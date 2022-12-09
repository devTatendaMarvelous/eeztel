




@extends('layouts.client')

@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Your Reported Faults
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> {{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead>
                                <tr>
                                    
                                    <th>Client Name</th>                                    
                                    <th data-breakpoints="xs">Reference Number</th>
                                    <th data-breakpoints="xs sm md">Title</Title></th>
                                    <th data-breakpoints="xs sm md">Description</th>
                                    <th data-breakpoints="xs sm md">File</th>
                                    <th data-breakpoints="xs sm md">Technician Assigned</th>
                                    <th data-breakpoints="xs sm md">Status</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                              @forelse ($faults as $fault )
                                <tr>
                                    
                                    <td>
                                        @foreach ($users as $user )
                                            @if($user->id===$fault->clientId)
                                                <p class="c_name">{{ $user->name }} </p>

                                            @endif
                                        @endforeach
                                        
                                    </td>
                                    <td>
                                        <span class="phone">{{$fault->ref}}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{$fault->title}}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{$fault->description}}</span>
                                    </td>
                                    <td>
                                       @if($fault->file )
                                         <a href="/storage/{{$fault->file}}" class="btn btn-primary  ">View File</a>
                                        @else
                                        <p class="btn btn-default  ">nofile</p>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="phone">{{$fault->technician}}</span>
                                    </td>
                                    <td>
                                        <span class="phone">
                                            @if ($fault->status==='waiting')
                                                <a href="/faults/{{ $fault->id }}/clientConfirmed" class="btn btn-success ">Confirm Completed</a>
                                            @else
                                                {{$fault->status}}
                                            @endif
                                            
                                        
                                        </span>
                                    </td>
                                    
                                    <td>
                                        <a href="/faults/{{ $fault->id }}/edit" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></a>
                                        <a  href="/faults/{{ $fault->id }}/delete"class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                              @empty
                                  
                              @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
       
    </div>
</section>
@endsection
