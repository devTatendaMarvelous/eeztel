@extends('layouts.dash')

@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Employees
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            
        </div>
    </div>
        <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="employee action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-6">
                                <h3>All employees</h3>                               
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
                                    
                                    <th data-breakpoints="xs">Employee ID</th>                                 
                                    <th data-breakpoints="xs">Name</th>
                                    <th data-breakpoints="xs sm md">Surname</th>
                                    <th data-breakpoints="xs">Date Of Birth</th>
                                    <th data-breakpoints="xs">National Id</th>
                                    <th data-breakpoints="xs">Email Address</th>
                                    <th data-breakpoints="xs">Phone Number</th>
                                    <th data-breakpoints="xs">Role</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                               @forelse ($employees as $employee )
                                    <tr> 
                                    <td>
                                        <span class="phone">{{ $employee->empId }}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $employee->name }}</span>
                                    </td>
                                     <td>
                                        <span class="phone">{{ $employee->surname }}</span>
                                    </td>
                                    <td>
                                        <small>{{ $employee->dob }}</small>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $employee->idnum }}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $employee->email }}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $employee->phone }}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $employee->role }}</span>
                                    </td>
                                  
                                    <td>
                                       
                                        <a href="/employees/{{ $employee->id }}/delete" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                               @empty
                                   <tr class="text-center"><h3>No employee Exist For Now Click <a href="/employees/create"><em>Here</em></a> To Add A employee</h3></tr>
                               @endforelse
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="employee">
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