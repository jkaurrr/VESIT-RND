@extends('boilerplate')


 


@section('page')
<style>
  
  .dropdown{
      margin: 15px;      
  }

  .sort{
      
      margin: 20px;
      position: absolute;
      left: 45%;
     
  
  }

  

  a:hover { 
  text-decoration-line: underline;
  text-decoration-color: red;
  
  text-decoration:blink;
} 
  
    </style>
<h3 class="text-muted text-center">All Patents (Applied/Granted)</h3>
     <div class="sort dropdown ">
                    <form action="{{ url('/patents') }}" method="GET">
                        @csrf   
                        <div class="form-group ">
                                   <select  name='sort' class="form-control" onchange='if(this.value != 9) { this.form.submit(); }'  >
                                   <option class="control-form dropdown-item " disabled selected value="9">Sort</option> 
                                   <option class="control-form dropdown-item" value="0">Sort by:  Latest</option>
                                    <option class="control-form dropdown-item" value='1'>Domains</option>
                                    <option class="control-form dropdown-item" value="2">Granted</option>
                                    <option class="control-form dropdown-item" value="3">Applied</option>
                                    <!-- <option class="control-form" value="Latest">Latest</option> -->
                                    </select>
                                    </div>     
                           </form>
                    
         </div>
<br>
<br>
<br>
<br>



<div class="container patents">
    @foreach($patents as $patent)
     <div class="card shadow p-3 mb-5 bg-blue rounded" > 
        
  
     <a href="/individual_patent/{{ $patent->id }}"> <div class="card-body " style="margin:2px;" > </a>
                <h3 class="text-muted"><a href="/individual_patent/{{ $patent->id }}">{{ $patent->title }}</a></h3>
                <h4 class="text-muted"> Patent Number: {{ $patent->app_no }}</a></h4>

                 @php if($patent -> status == 1)
                     {  
                         $status = "Granted"; 
                         } 
                     else {
                           $status = "Applied" ;  
                        } 
                @endphp
                <h5 class="text-muted">Status: {{ $status }}</h5>
                <h5 class="text-muted">{{ $patent -> date }}</h5>
            </div>
        </div>
        <br/>
    @endforeach
</div>
@endsection
