@extends('boilerplate')
@section('page')
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
    
            hr{
                color:#fff;
            }
            li{
                padding:10px;
            }
            #side a:hover{
                color:slategray;
            }
            #message_adjust {
                height: 40vh;
                width:100%;
            }
            #about_adjust{
                height: auto;
                max-width: 100%;
            }
</style>
<script>
//     $(document).ready(function(){
//     $("#Motto").click(function(){  
//         $('#target').html('<div id="Motto"><div class="container-fluid"><h2>Our Motto</h2><h5 class="jumbotron">Work towards achieving novel solutions to critical problems and unmet needs in the field of engineering and there by broaden our knowledge and expertise.With this as our motto the R&D department combining both basic and applied research aims at providing innovative and indigenous solutions to critical design issues in engineering systems.The department has successfully completed various projects in collaboration with some of the top industries and research centers.</h5>    </div></div'});
//     })});
             
//     $(document).ready(function(){
//     $("#Motto").click(function(){  
//         $('#target').html('<div id="Motto"><div class="container-fluid"><h2>Our Motto</h2><h5 class="jumbotron">Work towards achieving novel solutions to critical problems and unmet needs in the field of engineering and there by broaden our knowledge and expertise.With this as our motto the R&D department combining both basic and applied research aims at providing innovative and indigenous solutions to critical design issues in engineering systems.The department has successfully completed various projects in collaboration with some of the top industries and research centers.</h5>    </div></div'});
// })});
//         $(document).ready(function(){
//     $("#Message").click(function(){  
//        $('#target').html('<h3 class="jumbotron">RnD Head Speaks</h3><div class="container-fluid"><img class="img-responsive" id="adjust" src="http://vesitrnd.ves.ac.in/images/rnd.jpg" alt="Rnd Head"></div><div class="container-fluid"><h5><q>Our aim is to make engineering study in VESIT more attractive, exciting and fulfilling and also to transform the students to emerging professionals with knowledge and capability of lifelong learning</q></h5></div></div>')});
//     });
    
    $(document).ready(function(){
    $("#Message").click(function(){  
       $('#target').html('<div class="container container-fluid" style="padding: 20px;"><h3>RnD Head Speaks</h3><div class="container-fluid"><img class="img-responsive" id="message_adjust" src="http://vesitrnd.ves.ac.in/images/rnd.jpg" alt="Rnd Head"></div><div class="container-fluid"><blockquote>Our aim is to make engineering study in VESIT more attractive, exciting and fulfilling and also to transform the students to emerging professionals with knowledge and capability of lifelong learning</blockquote></div></div></div>')});
    });
    $(document).ready(function(){
    $("#Motto").click(function(){  
       $('#target').html('<div id="Motto"><div class="container-fluid"><h2>Our Motto</h2><h5 class="jumbotron">Work towards achieving novel solutions to critical problems and unmet needs in the field of engineering and there by broaden our knowledge and expertise.With this as our motto the R&D department combining both basic and applied research aims at providing innovative and indigenous solutions to critical design issues in engineering systems.The department has successfully completed various projects in collaboration with some of the top industries and research centers.</h5>    </div></div>')});
    });
    $(document).ready(function(){
    $("#About").click(function(){  
       $('#target').html('<div class="container-fluid">                            <h3>About VESIT R & D</h3>                            <p>VESIT has always given importance to the experiential way of teaching and learning of engineering concepts which can only be perfected through the best research and development practices. </p>                                    <p>Today we’re formally announcing our Long Term Support plan, a documented approach aimed at strengthening the stability and frequency of releases. As part of this initiative, each major version of Bootstrap will receive at least six months of support after it is retired, followed by six months of critical bug fixes and security updates.</p>                        </div>                        <div class="container-fluid"><img class="img-responsive" id="about_adjust" src="http://vesitrnd.ves.ac.in/images/drKalam.jpg" alt="Abdul Kalam"></div></div>')});
    });
    
</script>
<div class="row">
        <div class="column col-md-4">
            <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding: 50px">
                    <table class="sidemenu">
                    <tr><td><a href="#about" id="About">About Us</a></td></tr>
                    <tr><td><a href="#message" id="Message">Message </a></td></tr>
                    <tr><td><a href="#motto" id="Motto">Motto</a></td></tr>
                    </table>
                </div>
        </div>
        <div class="container container-fluid column col-md-8 mb-5  mr-auto"id="target">
                        <div class="container-fluid">
                            <h3>About VESIT R & D</h3>
                            <p>VESIT has always given importance to the experiential way of teaching and learning of engineering concepts which can only be perfected through the best research and development practices. </p>        
                            <p>Today we’re formally announcing our Long Term Support plan, a documented approach aimed at strengthening the stability and frequency of releases. As part of this initiative, each major version of Bootstrap will receive at least six months of support after it is retired, followed by six months of critical bug fixes and security updates.</p>
                        </div>
                        <div class="container-fluid">
                            <img class="img-responsive" id="about_adjust" src="http://vesitrnd.ves.ac.in/images/drKalam.jpg" alt='Abdul Kalam'>
                        </div>
        </div>
        </div>
    </div>            
                
 </div>
@endsection