@extends('boilerplate')
@section('page')
 <script>


$(document).ready(function(){
    $("#achievements").click(function(){  
       $('#target').html('@foreach($achievements_list as $achievement) {{$achievement}} @endforeach')
   });
});

$(document).ready(function(){
    $("#details").click(function(){  
       $('#target').html('Name : Pooja Shetty<br>Department : Information Technology<br>Contact: +91 1234567890<br>Address: Hashu Adwani Memorial Complex, Collector\'s Colony, Chembur, Mumbai, Maharashtra 400074<br>')});
});

$(document).ready(function(){
    $("#complete").click(function(){  
       $('#target').html('<ul><li>This is a list element1 </li><li>This is a list element2 </li><li><b>Acquisition and Analysis of EEG Signals with Improved Signal to Noise Ratio</b>Signal analysis data alone can contribute important information for diagnosis and tracking of disease. Electrocardiogram (ECG) results have made major contributions to cardiac diagnosis whereas the electroencephalogram (EEG) is useful in neurological diagnosis. In many cases combination of signal analysis data with other clinical information results in a more comprehensive analysis. The automation of the entire process requires the construction of higher order processing methodology in which signal analysis results can play a major role.The design includes a sophisticated EEG acquisition system that picks up signals from the brain of the patient using special scalp electrodes, conditions the signal like amplify it, filter it and process it in such a way that it is suitable for further analysis. The components for design are advanced filter and instrumentation amplifier IC chips with very low noise, high gain accuracy, low gain temperature coefficient and high linearity, such that the EEG signal obtained at the end of the Signal Conditioning system is with excellent signal to noise ratio. Such signals can then be further analysed for various mental disorders and neurological correlations. </li><li>This is a list element 4</li></ul>')
   });
});
$(document).ready(function(){
    $("#ongoing").click(function(){  
       $('#target').html('<ul><li>This is a list element1 </li><li>This is a ongoing list element2 </li><li>This is a list element3 </li><li>This is a list element 4</li></ul>')
   });
});
$(document).ready(function(){
    $("#research").click(function(){  
       $('#target').html('<ul><li>This is a list element1 </li><li>This is a list element2 </li><li>This is a list element3 </li><li>This is a list element 4</li></ul>')
   });
});
</script>
<style>
    body{
        scroll-behavior: inherit;
    }
    #target li{
        border: grey solid 0.5px;
        display: flex; 
        padding: 30px;
        width: 650px;
        overflow-x: hidden;
        overflow-y: auto; 
        scroll-margin-right:0%; 
    }
    #target{
        overflow-x: hidden;
        overflow-y: auto;
        width: 650px;
        height: 60%;
    }
     .sidemenu
    {
        background-color: #FFFFFF;
        color: #224C83; 
        border: solid;
        border-color: #224C83;
        width: 250px;
        height: 300px;
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
    </style>
<div class="row">
        <div class="column col-xs-2">
            <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding:50px">
                    <table class="sidemenu">
                    <tr><td><a href="#" id="details">Details</a></td></tr>
                    <tr><td><a href="#achievements" id="achievements">Achievements </a></td></tr>
                    <tr><td><a href="#complete" id="complete">Projects Completed</a></td></tr>
                    <tr><td><a href="#ongoing" id="ongoing" >On going projects</a></td></tr>
                    <tr><td><a href="#research" id="research" >Research Papers</a></td></tr>
                </table>
                </div>
        </div>
        <div class="column">
            <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding:50px">
                <img src="{{$user->cover_image}}" height="250px" width="250px"/>
            </div>
        </div>
        <div class="column">
                <div class="container container-fluid" style="margin-left: 0%;margin-right: auto;padding:50px" id="target">
                    Name : {{$user->name}}<br>
                    Department : {{$user->department}}<br>
                    Qualification: {{$user->qualification}}<br>
                    Designation: {{$user->designation}}<br>
                </div>
        </div> 
        

</div>


<!-- <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">User ID: {{ $user->id }}</h3>
            <hr />

            <img src="/storage/cover_images/{{ $user->cover_image }}" class="rounded" alt="{{ $user->name }}">
            <hr />
            <h3 class="text-muted">Name</h3>
            <h3 class="text-muted">{{ $user->name }}</h3>
            <hr />
            <h3 class="text-muted">Qualification</h3>
            <h3 class="text-muted">{{ $user->qualification }}</h3>
            <hr />
            <h3 class="text-muted">Department</h3>
            <h3 class="text-muted">{{ $user->department }}</h3>
            <hr />
            <h3 class="text-muted">Designation</h3>
            <h3 class="text-muted">{{ $user->designation }}</h3>
            <hr />


            <h3 class="text-muted">Achievements</h3>
            @foreach($user->achievements as $a)
                <h3 class="text-muted">{{ $a->achievement }}</h3>
            @endforeach
            <hr />
            
            <h3 class="text-muted">Area of Specialization</h3>
            <h3 class="text-muted">{{ $user->area_of_specialization }}</h3>
            <hr />
            <hr/>
            <h3 class="text-muted">{{ $user->created_at }}</h3>
            <hr>

            @auth
                <button data-target="#editUser" data-toggle="modal" class="btn btn-primary">Edit User</button>  
            @endauth
        </div>
 -->
        <!-- <div class="modal fade" id="editUser">
            <div class="modal-dialog">
                <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
                    <div class="modal-header">
                        <h3 class="modal-title">Edit Research Grant</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                    </div>
        
                    <div class="modal-body">
                        <form action="{{ action('UserController@update', $user->id) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">    
                                <label class="control-label">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="form-group">    
                                <label class="control-label">Department</label>
                                <input type="text" name="department" value="{{ $user->department }}" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="form-group">    
                                <label class="control-label">Qualification</label>
                                <input type="text" name="qualification" value="{{ $user->qualification }}" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="form-group">    
                                <label class="control-label">Designation</label>
                                <input type="text" name="designation" value="{{ $user->designation }}" autocomplete="off" class="form-control" required>
                            </div>
                            
                            <div class="form-group">    
                                <label class="control-label">Achievement</label>
                                <textarea type="text" row="10" col="30" value="{{ $user->achievements }}" name="achievement" autocomplete="off" class="form-control"></textarea>
                            </div>
                    </div>


                            <div class="form-group row">
                            <label for="cover_image" class="col-md-4 col-form-label text-md-right">{{ __('Cover Image') }}</label>

                            <div class="col-md-6">
                                <input id="cover_image" type="file" class="form-control" name="cover_image" autocomplete="off">

                            </div>
                        </div>
                         @method('PUT')
                            <div class="modal-footer">
                                <input type="submit" value="Edit" class="btn btn-primary float-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 

    </div> -->
@endsection