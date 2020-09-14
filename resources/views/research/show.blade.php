@extends('boilerplate')

@section('page')
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">Research Grant ID: {{ $research->id }}</h3>
            <hr />
            <h3 class="text-muted">{{ $research->title }}</h3>
            <hr />
            <h3 class="text-muted">Inventor</h3>
            <h4 class="text-muted">{{ $user_name }}</h4>
            <hr />
            <h3 class="text-muted">Description</h3>
            <h4 class="text-muted">{{ $research->description }}</h4>
            <hr />
            <h3 class="text-muted">Type </h3>
            <h4 class="text-muted">{{ $research->type }}</h4>
            <hr />
            
            <hr/>
            <h3 class="text-muted">{{ $research->created_at }}</h3>
            <hr>

            @auth
                <button data-target="#editresearch" data-toggle="modal" class="btn btn-primary">Edit research</button>  
            @endauth
        </div>
    </div>
    <div class="modal fade" id="editresearch">
            <div class="modal-dialog">
                <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
                    <div class="modal-header">
                        <h3 class="modal-title">Edit Research Grant</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                    </div>
        
                    <div class="modal-body">
                        <form action="{{ action('ResearchGrantController@update', $research->id) }}" method="POST">
                            @csrf
                            <div class="form-group">    
                                <label class="control-label">Title</label>
                                <input type="text" name="title" value="{{ $research->title }}" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="form-group">    
                                <label class="control-label">Description</label>
                                <input type="text" name="description" value="{{ $research->description }}" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="form-group">    
                                    <label class="control-label">Type</label>
                                    <select class="form-control" name="type">
                                        
                                        <option class="control-form">Major</option>
                                        <option class="control-form">Minor</option>
                                                                            
                                    </select>
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
@endsection