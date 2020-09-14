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
        height: 15vh;
        width: 90%;
        border-radius: 30px;
    }
    td{
        width: 33%;
    }
    #achievements{
        height:300px;
        width: 50%;
        overflow-x: hidden;
        overflow-y: auto; 
    }
    #list td img{
        width: 100%;
    }
</style>


<div class="row" style="padding: 30px;">
    <div class="column" >
            <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                  
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" alt="Los Angeles" style="height: 300px;width: 100%">
                        </div>
                        <div class="carousel-item">
                          <img src="https://ves.ac.in/wp-content/uploads/2015/10/ves_slider_3.jpg" alt="Chicago" style="height: 300px;width: 100%">
                        </div>
                        <div class="carousel-item">
                          <img src="https://ves.ac.in/wp-content/uploads/2015/10/MG_9076.jpg" alt="New York" style="height: 300px;width: 100%">
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
    <div class="column text-center" id="project-list" >
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
</div>
<div class="row mb-5" style="padding: 30px;">
    <div class="column text-center">
        <table>
            <thead style="align-content: center;padding : 40px 0px 0px 0px;">
                <strong> Research Areas </strong>
            </thead>
            <tr>
                <td style="padding: 10px;">
                    <a href="/projects"><img src="https://tse4.mm.bing.net/th?id=OIP.zTwk92jDrTFb_pL6rPs5HQHaHa&pid=Api&P=0&w=300&h=300" /></a>
                    <strong><p>AI</p></strong>
                </td>
                <td style="padding: 10px;">
                    <a href="/projects"><img src="https://cdn2.iconfinder.com/data/icons/bitcoin-and-mining/44/blockchain-512.png" /></a>
                    <strong><p>Blockchain</p></strong>
                </td>
                <td style="padding: 10px;">
                    <a href="/projects"><img src="http://www.ibm.com/analytics/us/en/images/iot/iot_icon4.png" /></a>
                    <strong><p>IoT</p></strong>
                </td>
            </tr>
            <tr>
                    <td style="padding: 10px;">
                        <img src="https://tse4.mm.bing.net/th?id=OIP.porx93_2hZi0_7i1FhJWbQHaHa&pid=Api&P=0&w=300&h=300" />
                        <strong><p>Robotics</p></strong>
                    </td>
                    <td style="padding: 10px;">
                        <img src="https://ttsquad.com/wp-content/uploads/2018/01/Icon8-01.png" />
                        <strong><p>Cyber Security</p></strong>
                    </td>
                    <td style="padding: 10px;">
                        <img src="https://image.flaticon.com/icons/png/512/644/644628.png" />
                         <strong><p>Algorithms</p></strong>
                    </td>
                </tr>
                <tr>
                    <a href="{{ url('/allDomains') }}" class="btn btn-info float-right">All domains</a>
                </tr>
        </table>
    </div>
    <div class="column text-center" id="achievements">
            <ul class="list-group">
                    <b><p style="padding : 0px 0px 0px 40px;">Accomplishments Of RnD department</p></b>
                    <li class="list-group-item"><p>Nuclear spectroscopy system</p></li>
                    <li class="list-group-item"><p>8k multichannel analyzer, Mixed domain oscilloscope</p></li>
                    <li class="list-group-item"><p>500MHz oscilloscope, 6 & ½ digit multi-meters</p></li>
                    <li class="list-group-item"><p>Cloudera Lab</p></li>
                    <li class="list-group-item"><p>Advanced software including Halcon software etc</p></li>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    
             </ul>
    </div>
    
</div>

@endsection