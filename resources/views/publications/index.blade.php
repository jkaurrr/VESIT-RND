@extends('boilerplate')

@section('page')
    <h3 class="text-muted text-center">All Publications</h3>
    <div class="container">
        @foreach($publications as $p)
            <div class="card">
                <div class="card-body">
                    <h4 class="text-muted"><a href="/publications/{{ $p->id }}">{{ $p->link }}</a></h4>
                    <h5>Paper Title: {{$p->paper_title}}</h5>
                   
                  
                    <h5>Year: {{$p->year}}</h5>
                    <hr/>
                    <h5 class="text-muted">{{ $p->created_at }}</h5>
                </div>
            </div>
            <br/>
        @endforeach
        <span alignment="center">{{$publications->links()}}</span>
    </div>
    
@endsection