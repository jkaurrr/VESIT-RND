@extends('boilerplate')

@section('page')
    <div class="jumbotron">
        <h3 class="text-center">{{ $patent->title }}</h3>
        <hr />
        <div>
        <h3 class="text-left">Patent Number </h3>
           <h4 class="text-muted">{{ $patent->app_no }}</h4>
         </div>
        <hr />
        
        <div>
        <h3 class="text-left">Domains </h3>

        @foreach($domain_names as $name)
            <h4 class="text-muted">{{ $name }}</h4>
        @endforeach
       </div>
        <hr/>
        <div>
        <h3 class="text-left">Abstract </h3>
        <h4 class="text-muted">{{ $patent->abstract }}</h4> 
       </div>
        <hr />
        <div>
        <h3 class="text-left">People Involved </h3>

        @foreach($user_names as $name)
            <h4 class="text-muted">{{ $name }}</h4>
        @endforeach
       </div>
        <hr/>

        @auth
            <a href="/editPatent/{{ $patent->id }}" class="btn btn-warning">Edit Patent</a>
        @endauth
    </div>
@endsection