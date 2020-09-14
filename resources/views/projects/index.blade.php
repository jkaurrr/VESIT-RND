@extends('boilerplate')
@section('page')
<style>
/* #demo{display:block} */
.show-filter-button-class{display:none}

 @media screen and (max-width: 767px) {
   /* #demo{display:none} */
   .show-filter-button-class{display:block}

 }
</style>

<meta name="csrf-token" content="{{ csrf_token() }}" />
<!--  -->
<form method="post" id="search_form" action="#">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">

    <div class="container container-fluid col-sm-2" style="float: left;margin-left: 0%;margin-right: auto;padding: 50px">
    <!-- <div class="col-xs-12 hidden-xs-up hidden-sm-up hidden-md-up hidden-lg-up">
      <a href="#demo" class="btn btn-success" data-toggle="collapse">Show Filter v</a>
   </div> -->
    <button type="button" class="btn btn-primary show-filter-button-class" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-controls="demo">Show Filters</button><br/>
    <div id="demo" class="collapse show">
    <i class="fa fa-filter"></i> <span> Refine by <br/><br/> </span>
            <h6 class="text-muted">Domains</h6>
            <ul class="list-group  list-group-flush" style="float: left;margin-left: -40px;margin-right: -50px;">
             <?php
             $selected="";
             foreach ($domains as $key => $new_domain) :
                if(isset($_GET['domain'])) :
                    if(in_array($new_domain->name,$_GET['domain'])) : 
                            $domain_check='checked="checked"';                        
                    else : $domain_check="";
                    endif;
                endif;
            ?>
            <li class="list-group-item" style="border:none;float: left;margin-left: 0%; margin-right:0%; ">
                <div id="form-ui" class="checkbox "><label class="float-left">
                 <input type="checkbox" id="checkb" class="float-left" onChange="myfunc()" value="<?=$new_domain->id; ?>" <?=@$domain_check?>
                 name="domain[]" class="sort_rang">
                <?=$new_domain->name; ?></label></div>
            </li>
            <?php endforeach; ?>
            </ul>
        </div>
        </div>
        </form>
        <div>
<div id="dd">
<!--  -->
</div>
     </div>
    <div class="container container-fluid col-sm-10">
            <div class="container container-fluid mr-auto" style="margin-top:25px; margin-left: 0%; padding-left:0%" id="target">
            
                 @foreach($projectsfilter as $project)
                    @foreach($project as $project)
                <div class="card mb-6 shadow p-3 lg-5 rounded">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">
                         </div>
                         <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="/individual_project" style="text-decoration: none;"><b>Project Title: {{$project->title}}</b></a>    
                                </div>
                                <div class="card-text">{{$project->description}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
                <button class="btn btn-primary">See More</button>
        </div>
    </div>

</div>
<!-- <script src="/js/script.js"></script> -->
<!-- <script type="text/javascript">
$(document).on('change','.sort_rang',function(){
   $("#search_form").submit();
  return false;
});
</script> -->
<script type="text/javascript">
$('form').on('click','.show-filter-button-class',function(){
 $('#demo').show();
});
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});
 function myfunc(){
    var selected = new Array();
    var res=new Array();
    $("#form-ui input[type=checkbox]:checked").each(function () {
                selected.push(this.value);
                
            });
            $.ajax({
                    url:'/projects/index',
                    type: 'POST',
                    data: {selected:selected},
                    processData:true,
                   dataType:'json',
                    success:function(data){
                        console.log(data);
                       // $('#dd').html(data);
                       // data.foreach(myfunction);
                       var txt='';
                       //document.getElementById('target').innerHTML=txt;
                       $.each(data,function myfunction(idx,obj){
                            $.each(obj,function myd(id,ob){ 
                         // alert(ob.title);
                                txt=txt+'<div class="card mb-6 ">             <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title"><b></b></a>'+ ob.title + '</div>              <div class="card-text">'+ob.description+'</div></div></div></div></div>'
                                document.getElementById('target').innerHTML=txt;
                            });
                            
                        });
                        //$('#target').html('<html><body>               <div class="card mb-6 ">             <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title"><b></b></a>  </div>              <div class="card-text">'+ob.project_id+'</div></div></div></div></div></body></html>');                            
                         //var dd=JSON.parse(data);
                        
                        
                    }
});
            // $("#form-ui input[type=checkbox]:unchecked").each(function () {
            //     selected.pop(this.value);
            // });
            // if (selected.length > 0) {
            //     alert("Selected values: " + selected);
            // }
// selected.toString=function(){
//     return 
// }
            
 }
</script>
@endsection