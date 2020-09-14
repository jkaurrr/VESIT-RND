<style>
    #navbarNav{
            background-color: #FFFFFF;
            /* height: 75px; */
            z-index: 1;
            width:100%;
        }

        #nav{
            background-color: #FFFFFF;
        }

        .nav-link{
            float: center;
            color: black;
        }

        .navbar-brand{
            float: left;
            color: black; 
        }
        .nav-item{
            padding: 10px;
            font-size: :14;
        }
        #nav a:hover{
            color:  #404552;
        }
        button .navbar-toggler{
            color: black;
            margin-right: 0%;
        }
        .fa.fa-navicon {
        color: black;
        float: right;
        }
        #nav a img{
            height: 75px;
            
        }

        
</style>


<div class="container-fluid" id="nav">
    <nav class="navbar navbar-expand-lg" id="nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" onclick = 'onClickHandler(this)' aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
        </button>
        <a class="navbar-brand" style="font-size:18px;" href="/" id="navbar-brand"><img src="https://ves.ac.in/vesit/wp-content/uploads/sites/3/2018/07/Logo.png">&nbsp;Vivekanand Educations Society's Institute of Technology</a>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/patents">Patents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/publications">Publications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/research">Research Grants</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/profile_list">Research Faculty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
            </ul>

            @if (Request::is('this_is_special_url_for_admin'))
            <div class="dropdown">
                <button type="button" class=" btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  Admin Services
                </button>
                <div class="dropdown-menu">
                    
                        <button data-target="#createUser" data-toggle="modal"  class="dropdown-item">Add User</button>
                        <button data-target="#createPatent" data-toggle="modal"   class="dropdown-item">Add Patent</button>
                        <button data-target="#createProject" data-toggle="modal"    class="dropdown-item">Add Project</button>
                        <button data-target="#createDomain" data-toggle="modal"   class="dropdown-item">Add Domain</button>
                        <button data-target="#addCompany" data-toggle="modal"   class="dropdown-item">Add Company</button>
                        <button data-target="#addPublication" data-toggle="modal"   class="dropdown-item">Add Publication</button>
                        <button data-target="#addResearch" data-toggle="modal"   class="dropdown-item">Add Research Grant</button>  
                </div>
              </div>
                                  
            </div>
            @endif
            
    </nav>
</div>
    
@if (Request::is('this_is_special_url_for_admin'))

<div class="modal fade" id="addResearch">
        <div class="modal-dialog">
            <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
                <div class="modal-header">
                    <h3 class="modal-title">Add Research Grant</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
    
                <div class="modal-body">
                    <form action="{{ url('/addResearchGrant') }}" method="POST">
                        @csrf
                        <div class="form-group">    
                            <label class="control-label">Title</label>
                            <input type="text" name="title" autocomplete="off" class="form-control" required>
                        </div>
                        <div class="form-group">    
                            <label class="control-label">Description</label>
                            <input type="text" name="description" autocomplete="off" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Type</label>
                            <select class="form-control" name="type">
                                
                                <option class="control-form">Major</option>
                                <option class="control-form">Minor</option>
                                                                    
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">User</label>
                            <select class="form-control" name="user">
                                @foreach($users as $user)
                                    <option class="control-form" value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                                    
                            </select>
                        </div>

                        <div class="modal-footer">
                            <input type="submit" value="Add" class="btn btn-success btn-block">
                        </div>

                    </form>
                </div>
            </div>
        </div>
</div>

<div class="modal fade" id="addPublication">
        <div class="modal-dialog">
            <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
                <div class="modal-header">
                    <h3 class="modal-title">Add Publication</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
    
                <div class="modal-body">
                    <form action="{{ url('/addPublication') }}" method="POST">
                        @csrf
                        <div class="form-group">    
                            <label class="control-label">Link</label>
                            <input type="text" name="link" autocomplete="off" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Authors</label>
                            <select class="form-control" name="authors[]" multiple>
                                @foreach($users as $user)
                                    <option class="control-form" value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                                    
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Domains</label>
                            <select class="form-control" name="domains[]" multiple>
                                @foreach($domains as $domain)
                                    <option class="control-form" value="{{ $domain->name }}">{{ $domain->name }}</option>
                                @endforeach
                                    
                            </select>
                        </div>
    
                        <div class="modal-footer">
                            <input type="submit" value="Add" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

{{-- <div class="modal fade" id="addCompany">
        <div class="modal-dialog">
            <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
                <div class="modal-header">
                    <h3 class="modal-title">Add User</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
    
                <div class="modal-body">

                </div>
            </div>
        </div>
</div> --}}

<div class="modal fade" id="addCompany">
    <div class="modal-dialog">
        <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
            <div class="modal-header">
                <h3 class="modal-title">Add Company</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
            </div>

            <div class="modal-body">
                <form action="{{ url('/addCompany') }}" method="POST">
                    @csrf
                    <div class="form-group">    
                        <label class="control-label">Name</label>
                        <input type="text" name="name" autocomplete="off" class="form-control" required>
                    </div>

                    <div class="modal-footer">
                            <input type="submit" value="Add" class="btn btn-success btn-block">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="createUser">
    <div class="modal-dialog">
        <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
            <div class="modal-header">
                <h3 class="modal-title">Add User</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
            </div>

            <div class="modal-body">
                <form method="post" action="{{ url('/addUser') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="role">
                                   <option class="form-control">Admin</option>
                                   <option class="form-control">Research Assistant</option>
                                   <option class="form-control">Faculty</option>
                                   <option class="form-control">Student</option>
                                    
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Qualification') }}</label>

                        <div class="col-md-6">
                            <input id="qualification" type="text" class="form-control" name="qualification" required autocomplete="off">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                        <div class="col-md-6">
                            <input id="department" type="text" class="form-control" name="department" required autocomplete="off">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="achievement" class="col-md-4 col-form-label text-md-right">{{ __('Achievement') }}</label>

                        <div class="col-md-6">
                            <textarea rows="10" col="30" id="achievement" type="text" class="form-control" name="achievement" required autocomplete="off">
                            </textarea>

                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                        <div class="col-md-6">
                            <input id="designation" type="text" class="form-control" name="designation" required autocomplete="off">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="area_of_specialization" class="col-md-4 col-form-label text-md-right">{{ __('Area of Specialization') }}</label>

                        <div class="col-md-6">
                            <input id="area_of_specialization" type="text" class="form-control" name="area_of_specialization" required autocomplete="off">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                        <div class="col-md-6">
                            <input id="picture" type="file" class="form-control" name="picture" required autocomplete="off">

                        </div>
                    </div>

                    

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
                    
                    
                    <div class="modal-footer">
                        <input type="submit" value="Add" class="btn btn-success btn-block">
                    </div>
                </form>
            </div>
            
     </div>
            
    </div>
</div>


<div class="modal fade" id="createPatent">
    <div class="modal-dialog">
        <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
            <div class="modal-header">
                <h3 class="modal-title">Add Patent</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
            </div>

            <div class="modal-body">
                <form action="{{ url('/addPatent') }}" method="POST">
                    @csrf
                    <div class="form-group">    
                        <label class="control-label">Name</label>
                        <input type="text" name="name" autocomplete="off" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Inventors</label>
                        <select class="form-control" name="inventors[]" multiple>
                            @foreach($users as $user)
                                <option class="control-form" value="{{ $user->name }}">{{ $user->name }}</option>
                            @endforeach
                                
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Application Number</label>
                        <input type="text" name="app_no" autocomplete="off" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Domains</label>
                        <select class="form-control" name="domains[]" multiple>
                            @foreach($domains as $domain)
                                <option class="control-form" value="{{ $domain->name }}">{{ $domain->name }}</option>
                            @endforeach
                                
                        </select>
                    </div>
                    
            </div>
                    
                    
                    <div class="modal-footer">
                        <input type="submit" value="Add" class="btn btn-success btn-block">
                    </div>
                </form>
            </div>
            
     </div>
            
    </div>
</div>

<div class="modal fade" id="createDomain">
        <div class="modal-dialog">
            <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
                <div class="modal-header">
                    <h3 class="modal-title">Add Domain</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
    
                <div class="modal-body">
                    <form action="{{ url('/addDomain') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">    
                            <label class="control-label">Name</label>
                            <input type="text" name="name" autocomplete="off" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Cover Image</label>
                            <input type="file" name="cover_image" autocomplete="off" class="form-control" required>
                        </div>
                        
                </div>
                        
                        
                        <div class="modal-footer">
                            <input type="submit" value="Add" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div>
                
         </div>
                
        </div>

        <div class="modal fade" id="createProject">
            <div class="modal-dialog">
                <div class="modal-content"  style="padding:10px;width:800px;margin-top:10px;">
                    <div class="modal-header">
                        <h3 class="modal-title">Add Project</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                    </div>
        
                    <div class="modal-body">
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
                                                                            <option value="Industrial" class= "form-control" selected>Industrial</option>
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
                                                                            <select class="form-control" name="users[]" multiple>
                                                                                @foreach($users as $user)
                                                                                    <option class="control-form" value="{{ $user->name }}">{{ $user->name }}</option>
                                                                                @endforeach
                                                                                    
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="domain" class="col-md-4 col-form-label text-md-right">{{ __('Domains') }}</label>
                                            
                                                                        <div class="col-md-6">
                                                                            <select class="form-control" name="domains[]" multiple>
                                                                            @foreach($domains as $domain)
                                                                                    <option class="control-form" value="{{ $domain->name }}">{{ $domain->name }}</option>
                                                                                @endforeach
                                                                                    
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="form-group row">
                                                                        <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Companies') }}</label>
                                            
                                                                        <div class="col-md-6">
                                                                            <select class="form-control" name="companies[]" multiple>
                                                                                @foreach($companies as $company)
                                                                                        <option class="control-form" value="{{ $company->name }}">{{ $company->name }}</option>
                                                                                    @endforeach
                                                                                        
                                                                                </select>
                                            
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
                                                                        <select class="form-control" name="users[]" multiple>
                                                                            @foreach($users as $user)
                                                                                <option class="control-form" value="{{ $user->name }}">{{ $user->name }}</option>
                                                                            @endforeach
                                                                                
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="domain" class="col-md-4 col-form-label text-md-right">{{ __('Domains') }}</label>
                                        
                                                                    <div class="col-md-6">
                                                                        <select class="form-control" name="domains[]" multiple>
                                                                        @foreach($domains as $domain)
                                                                                <option class="control-form" value="{{ $domain->name }}">{{ $domain->name }}</option>
                                                                            @endforeach
                                                                                
                                                                        </select>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group row">
                                                                    <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
                                        
                                                                    <div class="col-md-6">
                                                                        <input id="amount" type="text" class="form-control" name="amount" required autocomplete="off">
                                        
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group row">
                                                                    <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Funded By') }}</label>
                                        
                                                                    <div class="col-md-6">
                                                                        <select class="form-control" name="companies[]" multiple>
                                                                            @foreach($companies as $company)
                                                                                    <option class="control-form" value="{{ $company->name }}">{{ $company->name }}</option>
                                                                                @endforeach
                                                                                    
                                                                            </select>
                                        
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
                                                                        <select class="form-control" name="users[]" multiple>
                                                                            @foreach($users as $user)
                                                                                <option class="control-form" value="{{ $user->name }}">{{ $user->name }}</option>
                                                                            @endforeach
                                                                                
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="domain" class="col-md-4 col-form-label text-md-right">{{ __('Domains') }}</label>
                                        
                                                                    <div class="col-md-6">
                                                                        <select class="form-control" name="domains[]" multiple>
                                                                        @foreach($domains as $domain)
                                                                                <option class="control-form" value="{{ $domain->name }}">{{ $domain->name }}</option>
                                                                            @endforeach
                                                                                
                                                                        </select>
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
                    </div>
                </div>
            </div>
        </div>
@endif