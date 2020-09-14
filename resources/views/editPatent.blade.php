@extends('boilerplate')

@section('page')

@if(Auth::check())
    <div class="container" style="padding-bottom:30px;padding-left:100px;padding-right:100px;">
        <form method="post" action="{{ url('/edit_this_patent') }}">
                
                {{ csrf_field() }}
                        
                <input type="hidden" value="{{ $patent->id }}" name="patent_id">
                <div class="form-group">
                        <label class="control-label">Title</label>
                        <input type="text" value="{{ $patent->title }}" class="form-control" name="title">
                </div>
                
                <div class="form-group">
                    <label class="control-label">Application Number</label>
                    <input type="number" name="app_no" value="{{ $patent->app_no }}" class="form-control">
                </div>
                
                {{-- @method('PUT')  --}}
                <br/>

                <input type="submit" value="Update" class="btn btn-primary btn-block"> 
            
            
        </form>    

    </div>
@else
    <h4 class="text-muted" style="padding-bottom:100px;">You cannot edit this patent</h4>
@endif
@endsection