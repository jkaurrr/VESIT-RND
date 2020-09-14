@extends('boilerplate')

@section('page')

    <div class="container">
        @foreach($domains as $domain)
        <div class="card">
            <div class="card-header">{{ $domain->name }}</div>
            <div class="card-body"><img  width="500px" height="300px" src="/storage/cover_images/{{$domain->cover_image}}"></div>
        </div>
        @endforeach
    </div>
@endsection