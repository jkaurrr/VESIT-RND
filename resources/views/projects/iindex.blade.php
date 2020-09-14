@extends('boilerplate')
@section('page')

<style>
@media (max-width: 768px) {
    .sidebar {
        margin-left: -250px;
    }
    .sidebar.active {
        margin-left: 0;
    }
}

.sidemenu
        {
            height: 300px;
            align-items: center;
        }
    
        .sidemenu .checkbox{
            text-decoration: none;
            align: center;
        }

        
</style>
<!-- <script>


$(document).ready(function() {

  
$('[data-toggle="collapse"]').click(function() {
  $(this).toggleClass( "active" );
  if ($(this).hasClass("active")) {
    $(this).text("Show Filters");
  } else {
    $(this).text("Hide Filters");
  }
});  
// document ready  
});
</script>-->

<form method="get" id="search_form" >
<!-- {{csrf_field()}} -->
<div class="row">

    <div class="container container-fluid col-sm-2" style="float: left;margin-left: 0%;margin-right: auto;padding: 50px">
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-controls="demo">Hide Filters</button><br/>
    <div id="demo" class="collapse show">
    <i class="fa fa-filter"></i> <span> Refine by <br/><br/> </span>
            <h6 class="text-muted">Domains</h6>
            <ul class="sidemenu list-group  list-group-flush" style="float: left;margin-left: -40px;margin-right: -50px;">
             <?php
             $selected="";
             foreach ($domains as $key => $new_domain) :
                if(isset($_GET['domain'])) :
                    if(in_array($new_domain->name,$_GET['domain'])) : 
                        {
                            $domain_check='checked="checked"';
                            // $selected=$selected+$_GET['domain'];
                        }
                        
                    else : $domain_check="";
                    endif;
                endif;
            ?>
            <li class="list-group-item" style="border:none;float: left;margin-left: 0%; margin-right:0%; ">
                <div id="form-ui" class="checkbox "><label class="float-left">
                 <input type="checkbox" id="checkb" class="float-left" onclick="myfunc()" value="<?=$new_domain->id; ?>" <?=@$domain_check?>
                 name="domain[]" class="sort_rang">
                <?=$new_domain->name; ?></label></div>
            </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <!-- <button type="submit">Submit</button> -->
        </div>
        </form>

     
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
<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<!-- <script src="{{ asset('js/post.js') }}" type="text/javascript"></script> -->
<script type="text/javascript">
 function myfunc(){
    var selected = new Array();
    //check_checkbox = document.getElementById("checkb").checked;

    $("#form-ui input[type=checkbox]:checked").each(function () {
                selected.push(this.value);
//                 $.ajax({
//                     url:'/projects/index',
//                     type: 'POST',
//                     data: {selected:selected},
//                     contentType:'text/plain',
//                     dataType: 'html',
    //                 success: function (response) {
    // checkdomain = response.checkdomain;

    // w = window.open(window.location.href,"_blank");
    // w.document.open();
    // w.document.write(response.checkdomain);
    // w.document.close();
// }
    //    });
             });
            
            if (selected.length > 0) {
                alert("Selected values: " + selected.join(","));
            }
    //         window.location.href = "/projects/index/{$selected}";
    // if(check_checkbox == true)
    // {
    //     selected.push(this.value);
    //     alert(selected);
    // }
    // if (selected.length > 0) {
    //             alert("Selected values: " + selected.join(","));
    //         }
    // else
    //     alert("false");
    //alert("1");
// }
// function filter($val)
// {
   
//  if($val=="Domains") {
//     var domain = ["Select Domain","AI","BlockChain","Cyber Security","Robotics","IOT","Algorithms"];
// 				var list1=document.getElementById('secondlist');
//                 list1.hidden = false;
// 				for (var i = 0; i < list1.length;) {
// 					list1.remove(i);
// 				}
// 				for(var i=0;i<domain.length;i++)
// 				{
// 					var child=document.createElement("option");
// 					child.text=domain[i];
// 					child.value=domain[i];
// 					list1.add(child);
// 				}
//  }
//  if($val=="Departments") {
//     var domain = ["Select Department","Computer","IT","Electronics","MCA"];
// 				var list1=document.getElementById('secondlist');
// 				for (var i = 0; i < list1.length;) {
// 					list1.remove(i);
// 				}
// 				for(var i=0;i<domain.length;i++)
// 				{
// 					var child=document.createElement("option");
// 					child.text=domain[i];
// 					child.value=domain[i];
// 					list1.add(child);
// 				}
//  }
// } 
 
//  function disp($val)
//  {
//      if($val=="AI")
//      $('#target').html('@foreach($projectsAI as $projects) @foreach($projects as $project)                <div class="card mb-6 ">             <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title"><a href="/individual_project" style="color:black;text-decoration: none;"><b>Project Title:{{$project->title}}</b></a>  </div>              <div class="card-text">Project Type {{$project->type}} <br/> {{$project->description}} </div></div></div></div></div> @endforeach @endforeach ');
//     if($val=="BlockChain")
//      $('#target').html('@foreach($projectsBC as $projects) @foreach($projects as $project)                <div class="card mb-6 ">             <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title"><a href="/individual_project" style="color:black;text-decoration: none;"><b>Project Title:{{$project->title}}</b></a>  </div>              <div class="card-text">Project Type {{$project->type}} <br/> {{$project->description}} </div></div></div></div></div> @endforeach @endforeach ');
//     if($val=="Cyber Security")
//      $('#target').html('@foreach($projectsCS as $projects) @foreach($projects as $project)                <div class="card mb-6 ">             <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title"><a href="/individual_project" style="color:black;text-decoration: none;"><b>Project Title:{{$project->title}}</b></a>  </div>              <div class="card-text">Project Type {{$project->type}} <br/> {{$project->description}} </div></div></div></div></div> @endforeach @endforeach ');
//     if($val=="Robotics")
//      $('#target').html('@foreach($projectsRobo as $projects) @foreach($projects as $project)                <div class="card mb-6 ">             <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title"><a href="/individual_project" style="color:black;text-decoration: none;"><b>Project Title:{{$project->title}}</b></a>  </div>              <div class="card-text">Project Type {{$project->type}} <br/> {{$project->description}} </div></div></div></div></div> @endforeach @endforeach '); 
//     if($val=="IOT")
//      $('#target').html('@foreach($projectsIOT as $projects) @foreach($projects as $project)                <div class="card mb-6 ">             <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title"><a href="/individual_project" style="color:black;text-decoration: none;"><b>Project Title:{{$project->title}}</b></a>  </div>              <div class="card-text">Project Type {{$project->type}} <br/> {{$project->description}} </div></div></div></div></div> @endforeach @endforeach ');
//     if($val=="Algoritms")
//      $('#target').html('@foreach($projectsAlgo as $projects) @foreach($projects as $project)                <div class="card mb-6 ">             <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 30vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title"><a href="/individual_project" style="color:black;text-decoration: none;"><b>Project Title:{{$project->title}}</b></a>  </div>              <div class="card-text">Project Type {{$project->type}} <br/> {{$project->description}} </div></div></div></div></div> @endforeach @endforeach ');
//  }
</script> 
//  <style>
// .dropdown-submenu {
//     position: relative;
// }

// .dropdown-submenu>.dropdown-menu {
//     top: ;
//     right: 100%;
//     margin-top: -4px;
//     margin-left: -1px;
//     -webkit-border-radius: 0 6px 6px 6px;
//     -moz-border-radius: 0 6px 6px;
//     border-radius: 0 6px 6px 6px;
// }

// .dropdown-submenu:hover>.dropdown-menu {
//     display: block;
// }

// .dropdown-submenu>a:after {
//     display: block;
//     content: " ";
//     float: left;
//     width: 0;
//     height: 0;
//     border-color: transparent;
//     border-style: solid;
//     border-width: 5px 0 5px 5px;
//     border-left-color: #ccc;
//     margin-top: 5px;
//     margin-right: -10px;
// }

// .dropdown-submenu:hover>a:after {
//     border-left-color: #fff;
// }

// .dropdown-submenu.pull-left {
//     float: none;
// }

// .dropdown-submenu.pull-left>.dropdown-menu {
//     left: -100%;
//     margin-left: 10px;
//     -webkit-border-radius: 6px 0 6px 6px;
//     -moz-border-radius: 6px 0 6px 6px;
//     border-radius: 6px 0 6px 6px;
// }

// </style> -->
<!--  -->

@endsection