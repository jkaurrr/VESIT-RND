@extends('boilerplate')
@section('page')
<style>
    .column{
        height: 300px;
        width: 50%;
    }
    #project-list{
        height: 300px;
        overflow-x: hidden;
        overflow-y: auto;
    }
    td img{
        height: 18vh;
        width: 18vh;
        border-radius: 30px;
    }
    /* td{
        width: 33%;
    } */
    #achievements{
        height:300px;
        width: 50%;
        overflow-x: hidden;
        overflow-y: auto;
    }
    #list td img{
        width: 100%;
    }
    p {
  text-shadow: 2px 2px 5px blue;
}
   
.fb-icon:hover {
    background: #224C83;
}
</style>


<div class="row" style="padding: 30px;">
    <div class="column" >
            <div id="demo" class="carousel slide " data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                 
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="http://vesitrnd.ves.ac.in/images/slide1.jpg" alt="Los Angeles" style="height: 300px;width: 100%">
                        </div>
                        <div class="carousel-item">
                          <img src="http://vesitrnd.ves.ac.in/images/slide6.jpg" alt="Chicago" style="height: 300px;width: 100%">
                        </div>
                        <div class="carousel-item">
                          <img src="http://vesitrnd.ves.ac.in/images/slide2.jpg" alt="New York" style="height: 300px;width: 100%">
                        </div>
                        <div class="carousel-item">
                         <img src="http://vesitrnd.ves.ac.in/images/slide3.jpg" alt="New York" style="height: 300px;width: 100%">
                        </div>
                      </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
            </div>
        </div>
       

   
 
 
        <div class="column text-center card mb-6 shadow-sm p-3 mb-5 bg-white rounded" id="achievements">
            <ul class="list-group">
                    {{-- This text will scroll from left to right --}}
                   {{-- <b><p style="color:white;font-size:20px;padding : 0px 0px 0px 40px;background-color:#00008b">
                            Accomplishments Of RnD department
                        </p> </b> --}}
                         <b><p align="left" style="color:white;font-size:30px;padding : 0px 0px 0px 40px;">
                            Accomplishments Of RnD department
                        </p> </b>
                    {{-- <b><p style="padding : 0px 0px 0px 40px;color:white;"><h4><span>Accomplishments Of RnD department</span></h4></p></b> --}}
                    <marquee direction = "up">
                    @foreach($accomplishments as  $accomplishment)
                    <b><i><li class="list-group-item" style="background-color:#ADD8E6"><p>{{ $accomplishment->achievement }}</p></li>
                    @endforeach
                    
                </marquee>
                   
             </ul>
    </div>
   
    {{-- <div class="column text-center" id="project-list" >
        <h4 style="padding : 0px 0px 0px 40px;"> Ongoing Projects</h4>
        <div class="container">
            <ul class="list-group">
                <li class="list-group-item">
                    <b>Kernel based machine learning for nuclear application</b>
                    <p>An algorithm for background estimation in low-count gamma-ray spectra have been developed using kernel-based Gaussian processes (GP) taken from the field of machine learning.</p>
                </li>
                <li class="list-group-item">
                        <b>Design and construction of precision and sliding pulse generator</b>
                        <p>To design the nuclear pulse generator for providing pulses of accurately predetermined characteristics in order to calibrate of Multichannel Analyzer (MCA).</p>
                </li>
                <li class="list-group-item">
                        <b>Application of Kalman filter Techniques in Nuclear Data science</b>
                        <p>The project report discusses the propagation of errors through nonlinear system using different error propagation techniques.</p>
                </li>            
            </ul>
        </div>
    </div>
</div> --}}

    <div style=width:100%>
           {{-- <p align="center" style="font-size:20px">
                RESEARCH AREAS
           </p> --}}

        <table>
                {{-- <tr>
                        <a href="{{ url('/allDomains') }}" class="btn btn-info float-right">All domains</a>
                    </tr> --}}
            <tr>
                <td style="padding: 60px;" class="fb-icon">
                    <a href="/projects"><img class="img-responsive" src="https://tse4.mm.bing.net/th?id=OIP.zTwk92jDrTFb_pL6rPs5HQHaHa&pid=Api&P=0&w=300&h=300" /></a>
                    <strong><p align="center">AI</p>
                    <p></p>
                </strong>
                </td>
                <td style="padding: 60px;" class="fb-icon">
                    <a href="/projects"><img class="img-responsive" src="https://cdn2.iconfinder.com/data/icons/bitcoin-and-mining/44/blockchain-512.png" /></a>
                    <strong><p align="center">Blockchain</p></strong>
                </td>
                <td style="padding: 60px;" class="fb-icon">
                    <a href="/projects"><img class="img-responsive" src="http://www.ibm.com/analytics/us/en/images/iot/iot_icon4.png" /></a>
                    <strong><p align="center">IoT</p></strong>
                </td>
       
                    <td style="padding: 60px;" class="fb-icon">
                        <img class="img-responsive" src="https://tse4.mm.bing.net/th?id=OIP.porx93_2hZi0_7i1FhJWbQHaHa&pid=Api&P=0&w=300&h=300" />
                        <strong ><p align="center">Robotics</p></strong>
                    </td>
                    <td style="padding: 60px;" class="fb-icon">
                        <img class="img-responsive" src="https://ttsquad.com/wp-content/uploads/2018/01/Icon8-01.png" />
                        <strong><p align="center">Cyber Security</p></strong>
                    </td>
                    <td style="padding: 60px;" class="fb-icon">
                        <img class="img-responsive" src="https://image.flaticon.com/icons/png/512/644/644628.png" />
                         <strong><p align="center">Algorithms</p></strong>
                    </td>
                   
                </tr>
               
        </table>
        <a href="{{ url('/allDomains') }}" class="btn btn-info float-right" ><b>. . .</b></a>
    </div>
   
    {{-- <div class="column text-center" id="achievements">
            <ul class="list-group">
                    <b><p style="padding : 0px 0px 0px 40px;"><h4>Accomplishments Of RnD department</h4></p></b>
                    @foreach($accomplishments as  $accomplishment)
                    <li class="list-group-item"><p>{{ $accomplishment->achievement }}</p></li>
                    @endforeach
                   
             </ul>
    </div>
     --}}


@endsection
