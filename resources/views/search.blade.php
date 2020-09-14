@extends('boilerplate')

@section('page')

<br/><br/>
@if(isset($_POST['q']) || (!empty($users) || !empty($projects) || !empty($patents)))
<center><h3>Users</h3></center>    
<table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>>
            <th>Qualification</th>
            <th>Designation</th>
            <th>Area of Specialization</th>
        </tr>
        @foreach($users as $p)
        <tr style="color:black;">
            <th>{{ $p->id }}</th>
            <th>{{$p->name}}</th>
            <th>{{$p->email}}</th>
            <th>{{$p->qualification}}</th>
            <th>{{ $p->designation }}</th>
            <th>{{ $p->area_of_specialization }} $</th>
        </tr>
        @endforeach
</table>

<br/><br/>
<center><h3>Patents</h3></center>    
<table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Application Number</th>>
        </tr>
        @foreach($patents as $p)
        <tr style="color:black;">
            <th>{{ $p->id }}</th>
            <th>{{$p->title}}</th>
            <th>{{$p->app_no}}</th>
        </tr>
        @endforeach
</table>


@else
    <h4>No Records Found</h4>
@endif


@endsection