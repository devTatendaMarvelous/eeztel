@extends('layouts.dash')

@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Contact
                <small class="text-muted">Welcome to Compass</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
        <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-6">
                                <h3>All Departments</h3>                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead>
                                <tr>
                                    
                                    <th>Name</th>                                    
                                    <th data-breakpoints="xs">H.O.D</th>
                                    <th data-breakpoints="xs sm md">Description</th>
                                
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                               @forelse ($departments as $department )
                                    <tr> 
                                    <td>
                                        <span class="phone">{{ $department->name }}</span>
                                    </td>
                                     <td>
                                        <img src="assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">{{ $department->hod }} </p>
                                    </td>
                                    <td>
                                        <small>{{ $department->description }}</small>
                                    </td>
                                  
                                    <td>
                                        <a href="/departments/{{ $department->id }}/edit" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="/departments/{{ $department->id }}/delete" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                               @empty
                                   <tr class="text-center"><h3>No Department Exist For Now Click <a href="/departments/create"><em>Here</em></a> To Add A Department</h3></tr>
                               @endforelse
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card">
                    <div class="body">                            
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
       
    </div>
</section>
@endsection