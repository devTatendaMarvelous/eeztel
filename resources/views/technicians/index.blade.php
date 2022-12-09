 @extends('layouts.tech')

@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Your Assigned Faults
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Faults</li>
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
                            
                            <div class="col-lg-5 col-md-5 col-6">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-3">
                                
                                <a href="/faults/create" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down">
                                    <center><i class="zmdi zmdi-plus-circle"></i></center>
                                </a>
                               
                                
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
                                        <form action="/faults/{{ $fault->id }}/complete" method="post">
                                            @csrf
                                            <input type="submit" class="btn btn-success "value="Complete">
                                        </form>
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
