@extends('layouts.dash')

@section('content')
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> {{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="128" data-speed="2000" data-fresh-interval="700" >{{ $pending }}</h3>                        
                        <p class="text-muted">Total Pending Faults </p>
                        <div class="progress">
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: {{ $pending }}%;"></div>
                        </div>
                        <small>Change {{ $pending }}%</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="758" data-speed="2000" data-fresh-interval="700" >{{ $assigned }}</h3>
                        <p class="text-muted">Total Faults Already Assigned To Technicians</p>
                        <div class="progress">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: {{ $assigned }}%;"></div>
                        </div>
                        <small>Change {{ $assigned }}%</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="2521" data-speed="2000" data-fresh-interval="700" >{{ $waiting }}</h3>
                        <p class="text-muted">Total Faults Serviced Waiting Client Approval</p>
                        <div class="progress">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: {{ $waiting }}%;"></div>
                        </div>
                        <small>Change {{ $waiting }}%</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3>{{ $completed }}</h3>
                        <p class="text-muted">Total Fixed Faults</p>
                        <div class="progress">
                            <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: {{ $completed }}%;"></div>
                        </div>
                        <small>Change {{ $completed }}%</small>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Faults</strong> Pending Awaiting Technician Assignment</h2>
                       
                    </div>
                    <div class="body">
                        
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
                              @forelse ($unresolvedFaults as $fault )
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
                                        <span class="phone">
                                        @if ($fault->technician)
                                            {{$fault->technician}}
                                            @else
                                            <a href="/faults/{{$fault->id}}/technician" class="btn btn-success  ">Assign Technician </a>

                                        @endif
                                     </span>
                                    </td>
                                   
                                      <td>
                                        <span class="phone">{{$fault->status}}</span>
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
                </div>
            </div>
        </div>
        
              
    </div>
</section>
@endsection
