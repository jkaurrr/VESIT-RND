<!DOCTYPE html>
<html lang="en">
<head>
<script src="/plugin/jquery.js"></script>
</head>
<body>
<?php 
include("config.php");
$all_brand=$db->query("SELECT distinct brand FROM `products` 
                    WHERE category_id = '1' GROUP BY brand");

$all_material=$db->query("SELECT distinct material FROM `products`
                    WHERE category_id = '1' GROUP BY material");

$all_size=$db->query("SELECT distinct size FROM `products`
                    WHERE category_id = '1' GROUP BY size");
// Filter query
$sql= "SELECT distinct * FROM `products` WHERE category_id = '1'";

if(isset($_GET['brand']) && $_GET['brand']!="") :
    $sql.=" AND brand IN ('".implode("','",$_GET['brand'])."')";
endif;

if(isset($_GET['material']) && $_GET['material']!="") :
    $sql.=" AND material IN ('".implode("','",$_GET['material'])."')";
endif;

if(isset($_GET['size']) && $_GET['size']!="") :
    $sql.=" AND size IN (".implode(',',$_GET['size']).")";
endif;

if(isset($_GET['sort_price']) && $_GET['sort_price']!="") :
    if($_GET['sort_price']=='price-asc-rank') :
        $sql.=" ORDER BY price ASC";
    elseif($_GET['sort_price']=='price-desc-rank') :
        $sql.=" ORDER BY price DESC";
    endif;
endif;

$all_product=$db->query($sql);
?>
<form method="get" id="search_form">
<!--right side bar -->
<div class="row">
    <aside class="col-lg-3 col-md-4">
        <div class="panel list">
            <div class="panel-heading">
                <h3 class="panel-title">Shop by Brand</h3></div>
            <div>
            <ul class="list-group">
            <?php foreach ($all_brand as $key => $new_brand) :
                if(isset($_GET['brand'])) :
                    if(in_array($new_brand['brand'],$_GET['brand'])) : 
                        $brand_check='checked="checked"';
                    else : $brand_check="";
                    endif;
                endif;
            ?>
            <li class="list-group-item">
                <div class="checkbox"><label>
                <input type="checkbox" value="<?=$new_brand['brand']; ?>" <?=@$brand_check?>
                 name="brand[]" class="sort_rang">
                <?=$new_brand['brand']; ?></label></div>
            </li>
            <?php endforeach; ?>
            </ul>
            </div>
        </div>
        <div class="panel list">
            <div class="panel-heading"><h3>Shop by Material</h3></div>
            <div>
            <ul class="list-group">
            <?php foreach ($all_material as $key => $new_material) :
                if(isset($_GET['material'])) :
                    if(in_array($new_material['material'],$_GET['material'])) : 
                        $material_check='checked="checked"';
                    else : $material_check="";
                    endif;
                endif;
            ?>
            <li class="list-group-item">
             <div class="checkbox"><label>
             <input type="checkbox" value="<?=$new_material['material']; ?>"
              <?=@$material_check?> name="material[]" class="sort_rang">
              <?=$new_material['material']; ?></label></div>
             </li>
            <?php endforeach; ?>
            </ul>
            </div>
        </div>
        <div class="panel list">
            <div class="panel-heading"><h3>Shop by Size</h3></div>
            <div>
            <ul class="list-group">
                <?php foreach ($all_size as $key => $new_size) : 
                    if(isset($_GET['size'])) :
                        if(in_array($new_size['size'],$_GET['size'])) : 
                            $size_check='checked="checked"';
                        else : $size_check="";
                        endif;
                    endif;
                ?>
                <li class="list-group-item">
                  <div class="checkbox"><label>
                   <input type="checkbox" value="<?=$new_size['size']; ?>" <?=@$size_check?>  
                    name="size[]" class="sort_rang">
                    <?=$new_size['size']; ?></label></div>
                </li>
            <?php endforeach; ?>
            </ul>
            </div>
        </div>
    </aside> <!-- /.sidebar -->

    <!-- listing -->
    <section class="col-lg-9 col-md-8">
        <div class="row">
        <?php if(isset($all_product) && count($all_product)) : ?>
            <?php foreach ($all_product as $key => $products) : ?>
                <article class="col-md-4 col-sm-6">
                    <div class="thumbnail product">
                    <figure>
                       <img src="product_images/<?php echo $products['image']; ?>"/>
                    </figure>
                    <div class="caption">
                    <?php echo $products['product_name']; ?>
                    <div class="price">Rs.<?php echo $products['price']; ?>/-</div>
                    <h5>Brand : <?php echo $products['brand']; ?></h5>
                    <h5>Material : <?php echo $products['material']; ?></h5>
                    <h5>Size : <?php echo $products['size']; ?></h5>
                    </div>
                    </div>
                </article>
            <?php endforeach; ?> 
        <?php else : ?>                                               
                    <h3>Sorry, no results found! </h3>
                    <h5>Please check the spelling or try searching for something else</h5>                           
         <?php endif; ?>

                                 
        </div>
        
    </section> <!-- /.listing -->
</div>
</form>
 <script src="/js/script.js"></script>
 <script type="text/javascript">
$(document).on('change','.sort_rang',function(){
   $("#search_form").submit();
  return false;
});
</script>
</body>
</html>
