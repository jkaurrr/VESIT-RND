@extends('boilerplate')

@section('page')
<style>
    div{
        padding:10px;
    }
</style>
<div class="container container-fluid" style="padding:10px;">
        <div class="row">
            <div class="col-md-4">
                    <img style="width:14em;" src="https://i.stack.imgur.com/34AD2.jpg" style="float:left; padding-right: 2%" class="img-rounded">
            </div>

            <div class="col-md-8 mr-auto">
                    <div class = "panel panel-success">
                            <div class = "panel-heading">
                               <h3 class = "panel-title panel-success">
                                  Information
                               </h3>
                            </div>
                            
                            <div class = "panel-body">
                               <table class="table table-striped" style="width:40">
                                   <tr>
                                       <td>Project Incharge</td>
                                       <td>Incharge</td>
                                   </tr>
                                   <tr>
                                        <td>Date</td>
                                        <td>Date</td>
                                    </tr>
                                    <tr>
                                            <td>Area of research</td>
                                            <td>Unknown</td>
                                        </tr>
                                         
                               </table>
                            </div>
                         </div>
            </div>

            <div class="col-md-12">
                    <div class = "panel panel-danger">
                            <div class = "panel-heading">
                               <h3 class = "panel-title">
                                  About Faculty
                               </h3>
                            </div>
                            
                            <div class = "panel-body">
                               <table class="table table-bordered">
                                   <tr>
                                       <td>Faculty name</td>
                                       <td>Name</td>
                                   </tr>
                                   <tr>
                                        <td>Area of research</td>
                                        <td>Still Unknown</td>
                                    </tr>
                                    <tr>
                                            <td>Projects</td>
                                            <td><u>Out of Scope<u></td>
                                        </tr>
                                         
                               </table>
                            </div>
                         </div>
            </div>

            
    </div>

    <div class = "panel panel-info">
            <div class = "panel-heading">
                <h3 class = "panel-title">
                    This is title
                </h3>
            </div>
            <div class = "panel-body">
               <h3 style="font-family:Arial, Helvetica, sans-serif">Description</h3>
               <br/>
               <p>
                    Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our. 
                    Direction has strangers now believing. Respect enjoyed gay far exposed parlors towards. Enjoyment use tolerably dependent listening men.
                     No peculiar in handsome together unlocked do by. Article concern joy anxious did picture sir her. 
                    Although desirous not recurred disposed off shy you numerous securing. 


                    Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our. 
                    Direction has strangers now believing. Respect enjoyed gay far exposed parlors towards. Enjoyment use tolerably dependent listening men.
                     No peculiar in handsome together unlocked do by. Article concern joy anxious did picture sir her. 
                    Although desirous not recurred disposed off shy you numerous securing. 
                    
                    Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our. 
                    Direction has strangers now believing. Respect enjoyed gay far exposed parlors towards. Enjoyment use tolerably dependent listening men.
                     No peculiar in handsome together unlocked do by. Article concern joy anxious did picture sir her. 
                    Although desirous not recurred disposed off shy you numerous securing. 
                    
               </p>
            </div>
            </div>
        
        <a href="{{ url('/editProject') }}" class="btn btn-warning">Edit</a>
</div>
</div>

@endsection