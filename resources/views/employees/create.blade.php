@extends('layouts.dash')
@section('content')

<!-- Main Content -->
<section class="content agent">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Add Employee
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i>  {{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Employee</a></li>
                    <li class="breadcrumb-item active">Add Employee</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">        
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Employee</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                          
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body bg-secondary">
                        
                            <form action="/employees/store" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="name"class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                     <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="surname"class="form-control text-pri mary" placeholder="Surname">
                                        </div>
                                    </div>
                                     
                                     <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="date" name="dob"class="form-control text-pri mary" placeholder="dob">
                                        </div>
                                    </div>
                                     <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="idnum"class="form-control text-pri mary" placeholder="National Id Number">
                                        </div>
                                    </div>
                                     <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="phone"class="form-control text-pri mary" placeholder="Phone Number">
                                        </div>
                                    </div>

                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                   <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="empId" class="form-control" placeholder="Employee Number">
                                        </div>
                                    </div>
                                   
                                  <div class="col-sm-4">
                                        
                                            <select name="role" class="form-control show-tick">
                                                <option value="">-- Role --</option>
                                                <option value="SuperAdmin">SuperAdmin</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Technician">Technician</option>
                                            </select>
                                        
                                    </div>
                                    <div class="col-sm-12 mt-5">
                                        <button type="submit" class="col-sm-12 btn btn-primary btn-round">Submit</button>
                                       
                                    </div>
                                </div>   
                            </form>
                                              
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>@endsection