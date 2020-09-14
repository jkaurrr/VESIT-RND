<!DOCTYPE html>
<html>
<head>
	<title>Project Add</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
	<!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a href="#industrial" class="nav-link active" role="tab" data-toggle="tab">Industrial</a>
			</li>
			<li class="nav-item">
				<a href="#funded" class="nav-link" role="tab" data-toggle="tab">Funded</a>
			</li>
			<li class="nav-item">
				<a href="#inhouse" class="nav-link" role="tab" data-toggle="tab">Inhouse</a>
			</li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="industrial">
                <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Add Industrial Project') }}</div>
                
                                <div class="card-body">
                                    <form method="POST" action="{{ action('ProjectsController@store') }}">
                                        @csrf
                
                                        <div class="form-group row">
                                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="description" type="textfield" class="form-control" name="description" value="{{ old('Description') }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                                            <select name="type">
                                                <option value="Industrial" selected>Industrial</option>
                                            </select>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}">
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="users" class="col-md-4 col-form-label text-md-right">{{ __('Users') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="users" type="text" class="form-control" name="users" required autocomplete="off" multiple>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="domain" class="col-md-4 col-form-label text-md-right">{{ __('Domains') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="domain" type="text" class="form-control" name="domain" required autocomplete="off" multiple>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Companies') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="company" type="text" class="form-control" name="company" required autocomplete="off" multiple>
                
                                            </div>
                                        </div>
                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Add Project') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
			<div role="tabpanel" class="tab-pane" id="funded">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Add Funded Project') }}</div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ action('ProjectsController@store') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
            
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="description" type="textfield" class="form-control" name="description" value="{{ old('Description') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                                        <select name="type">
                                            <option value="Funded" selected>Funded</option>
                                        </select>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}">
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="users" class="col-md-4 col-form-label text-md-right">{{ __('Users') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="users" type="text" class="form-control" name="users" required autocomplete="off" multiple>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="domain" class="col-md-4 col-form-label text-md-right">{{ __('Domains') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="domain" type="text" class="form-control" name="domain" required autocomplete="off" multiple>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="amount" type="text" class="form-control" name="amount" required autocomplete="off">
            
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="funded by" class="col-md-4 col-form-label text-md-right">{{ __('Funded By') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="funded by" type="text" class="form-control" name="funded by" required autocomplete="off">
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Add Project') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div role="tabpanel" class="tab-pane" id="inhouse">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Add Inhouse Project') }}</div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ action('ProjectsController@store') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
            
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="description" type="textfield" class="form-control" name="description" value="{{ old('Description') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                                        <select name="type">
                                            <option value="Inhouse" selected>Inhouse</option>
                                        </select>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}">
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="users" class="col-md-4 col-form-label text-md-right">{{ __('Users') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="users" type="text" class="form-control" name="users" required autocomplete="off" multiple>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="domain" class="col-md-4 col-form-label text-md-right">{{ __('Domains') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="domain" type="text" class="form-control" name="domain" required autocomplete="off" multiple>
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Add Project') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</body>
</html>