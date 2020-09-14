@extends('boilerplate')

@section('page')
    <h3 class="text-muted text-center">All Research Grants</h3>
    <div class="container">
        @foreach($research as $p)
            <div class="card">
                <div class="card-body">
                    <h4 class="text-muted"><a href="/research/{{ $p->id }}">{{ $p->title }}</a></h4>
                    <hr/>
                    <h5 class="text-muted">{{ $p->created_at }}</h5>
                </div>
            </div>
            <br/>
        @endforeach
    </div>
@endsection