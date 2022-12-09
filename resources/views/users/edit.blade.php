@extends('layouts.dash')
@section('content')

<!-- Main Content -->
<section class="content agent">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Edit {{ $user->name }}
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i>  {{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                    <li class="breadcrumb-item active">Add User</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">        
        
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Account</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        
                          
                            <form action="/users/{{ $user->id }}/update" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="name"class="form-control" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        
                                            <select name="role" class="form-control show-tick">
                                                <option value="{{ $user->role }}">{{ $user->role }}</option>
                                                <option value="SuperAdmin">SuperAdmin</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Technician">Technician</option>
                                                <option value="Client">Client</option>
                                            </select>
                                        
                                    </div>
                                  
                                    <div class="col-sm-12">
                                        <button type="submit" class="col-sm-12 btn btn-primary btn-round">Submit</button>
                                       
                                    </div>
                                </div>   
                            </form>
                                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection