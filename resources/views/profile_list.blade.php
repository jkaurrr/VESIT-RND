@extends('boilerplate')
@section('page')
 <script>
$(document).ready(function(){
    $("#AI").click(function(){  
       $('#target').html('<h3 class="text-center mb-3">Working on AI</h3> @for($i=1;$i<2;$i++)<div class="row">@for($j=0;$j<4;$j++)<div class="column" style="align: center;padding: 30px;"><div class="column-element" style="align: center; display: flexbox;"><img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/><a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a><blockquote style="text-align: center; color: #808080">Dept xyz </blockquote></div></div>&nbsp; @endfor </div> @endfor</div>')});
});
$(document).ready(function(){
    $("#All").click(function(){  
       $('#target').html('<h3 class="text-center mb-3">All Faculty</h3> @for($i=0;$i<2;$i++)<div class="row">@for($j=0;$j<4;$j++)<div class="column" style="align: center;padding: 30px;"><div class="column-element" style="align: center; display: flexbox;"><img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/><a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a><blockquote style="text-align: center; color: #808080">Dept xyz </blockquote></div></div>&nbsp; @endfor </div> @endfor</div>')});
});
$(document).ready(function(){
    $("#comms").click(function(){  
       $('#target').html('<h3 class="text-center mb-3">Working on communication</h3> @for($i=2;$i<3;$i++)<div class="row">@for($j=0;$j<4;$j++)<div class="column" style="align: center;padding: 30px;"><div class="column-element" style="align: center; display: flexbox;"><img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/><a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a><blockquote style="text-align: center; color: #808080">Dept xyz </blockquote></div></div>&nbsp; @endfor </div> @endfor</div>')});
});
$(document).ready(function(){
    $("#bchain").click(function(){  
       $('#target').html('<h3 class="text-center mb-3">Working on Blockchain</h3> @for($i=0;$i<1;$i++)<div class="row">@for($j=0;$j<4;$j++)<div class="column" style="align: center;padding: 30px;"><div class="column-element" style="align: center; display: flexbox;"><img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/><a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a><blockquote style="text-align: center; color: #808080">Dept xyz </blockquote></div></div>&nbsp; @endfor </div> @endfor</div>')});
});
</script>
<style>
    .sidemenu
    {
        background-color: #FFFFFF;
        color: #224C83; 
        border: solid;
        border-color: #224C83;
        width: 250px;
        height: 300px;
        align-items: center;
    }

    .sidemenu a{
        color: white;
        text-decoration: none;
        align: center;
    }
    
    .sidemenu td{
        padding: 10px;
    }
    .sidemenu tr{
        background-color: #224C83;
        border-bottom: solid; 
        border-color: #FFFFFF;
    }
    
    .filter-button{
        background: #224C83;
        color:#FFFFFF;
        padding: 2px;
        border:#224C83 solid;
        border-radius: 10px;
        margin : 0px 5px 0px 5px;
    }

    .row{
        overflow: hidden;
    }
</style>
<div class="row">
    <div class="column col-md-4 ">
        <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding: 50px">
                <table class="sidemenu">
                <tr><td><a href="#" id="All">All</a></td></tr>
                <tr><td><a href="#" id="AI">Working On AI </a></td></tr>
                <tr><td><a href="#1" id="comms">Working On Communication</a></td></tr>
                <tr><td><a href="#2" id="bchain">Working On Blockchain</a></td></tr>
            </table>
            </div>
    </div>
    <div class="lecturers-page1-area">
            <div class="container">
                <div class="row">
                    @for($j=1;$j<4;$j++)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <div class="single-item">
                            <div class="lecturers1-item-wrapper">
                                <div class="lecturers-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="https://i.stack.imgur.com/34AD2.jpg" alt="team" ></a>
                                </div>
                                <div class="lecturers-content-wrapper">
                                    <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                    <span class="item-designation">Senior Finance Lecturer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp;
                    @endfor
                </div>
            </div>
        </div>

    <!-- <div class="container container-fluid column col-md-8" style="margin-right: 0%;" id="target">
        <h3 class="text-center mb-3">All Faculty</h3>          
      @for($i=0;$i<3;$i++)
                <div class="row">
                    @for($j=1;$j<5;$j++)
                    <div class="column" style="align: center;padding: 30px;">
                        <div class="column-element" style="align: center; display: flexbox;">
                        <img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/>
                        <a href="/users/{{$j}}"><b><p style="text-align: center;">Name{{$i}}</p></b></a>
                        <blockquote style="text-align: center; color: #808080">Dept xyz </blockquote>
                    </div>
                    </div>
                    &nbsp; 
                    @endfor
                </div>
                @endfor

             @foreach($users as $user)
            <div class="card-body">
                <img class="card-img-top" height="250px" width="250px" src="/storage/cover_images/{{ $user->cover_image }}" alt="No image">
                <h4 class="card-title"><a href="/editUser/{{ $user->id }}">{{ $user->name }}</a></h4>
          </div>
            @endforeach
        </div>
    </div> -->
</div> 


<!-- <h3 class="text-muted text-center">All Users</h3>
    <div class="container">
        @foreach($users as $p)
            <div class="card">
                <div class="card-body">
                    <h4 class="text-muted"><a href="/users/{{ $p->id }}">{{ $p->name }}</a></h4>
                    <hr/>
                    <h5 class="text-muted">{{ $p->created_at }}</h5>
                </div>
            </div>
            <br/>
        @endforeach
    </div>
@endsection -->