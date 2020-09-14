<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            body {
                position: relative; 
            }
            #section1 {padding-top:50px;height:500px;color: #000; background-color: #fff;}
            #section2 {padding-top:50px;height:500px;color: #000; background-color: #fff;}
            #section3 {padding-top:50px;height:500px;color: #000; background-color: #fff;}

            #side {
                position: fixed; 
            }

            #adjust {
                max-width: 100%;
                height: auto;
            }

        </style>
    </head>
    <body data-spy="scroll" data-target=".nav" data-offset="50">
        <div class = "row">
            <div class="col-sm-2">
                <ul class="nav nav-pills nav-stacked" id="side">
                    <li><a href="#section1">About</a></li>
                    <li><a href="#section2">Motto</a></li>
                    <li><a href="#section3">Message From R&D Head</a></li>
                </ul>
            </div>
            <div class="col-sm-8">
                <div id="section1">
                    <div class="container-fluid">
                        <h3>About VESIT R & D</h3>
                        <p>VESIT has always given importance to the experiential way of teaching and learning of engineering concepts which can only be perfected through the best research and development practices. </p>        
                        <p>Today we’re formally announcing our Long Term Support plan, a documented approach aimed at strengthening the stability and frequency of releases. As part of this initiative, each major version of Bootstrap will receive at least six months of support after it is retired, followed by six months of critical bug fixes and security updates.</p>
                    </div>
                    <div class="container-fluid">
                        <img class="img-responsive" id="adjust" src="http://vesitrnd.ves.ac.in/images/drKalam.jpg" alt='Abdul Kalam'>
                    </div>
                </div>
                <!-- Motto -->
                <div id="section2">
                    <div class="container-fluid">
                            <h2>Our Motto</h2>
                            <h5 class="jumbotron">Work towards achieving novel solutions to critical problems and unmet needs in the field of engineering and there by broaden our knowledge and expertise.
                            With this as our motto the R&D department combining both basic and applied research aims at providing innovative and indigenous solutions to critical design issues in engineering systems.     
                            The department has successfully completed various projects in collaboration with some of the top industries and research centers.</h5>    
                    </div>
                </div>
                <!-- Message --> 
                <div id="section3">
                    <h3 class="jumbotron">RnD Head Speaks</h3>
                    <div class="container-fluid">
                        <img class="img-responsive" id="adjust" src="http://vesitrnd.ves.ac.in/images/rnd.jpg" alt='RnD Head'>
                    </div>
                    <div class="container-fluid">
                        <h5><q>Our aim is to make engineering study in VESIT more attractive, exciting and fulfilling and also to transform the students to emerging professionals with knowledge and capability of lifelong learning</q></h5>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(".nav li").on("click", function{
                $(".nav li").removeClass("active");
                $(this).addClass("active");
            });
        </script>
    </body>
</html>