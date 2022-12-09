@extends('layouts.client')

@section('content')
<!-- Main Content -->
<section class="content agent">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Report Fault
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            
        </div>
    </div>
    <div class="container-fluid">        
        
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Fault</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                          
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        
                            <form action="/faults/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="title"class="form-control" placeholder="Title">
                                            @error('title')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <textarea name="description" id="" class="form-control " placeholder="Description" cols="30" rows="10"></textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                       <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="file" name="file"class="form-control">
                                        </div>
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