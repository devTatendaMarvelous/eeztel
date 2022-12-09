 @extends('layouts.dash')

@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Faults
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
                            
                           
                            <div class=" col-3">
                                
                                 <button class="btn btn-success w-100" id="download">Generate PDF Report</button>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class="row clearfix" id="generatePDF">
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
                                    
                                    <th data-breakpoints="xs sm md">Technician Assigned</th>
                                    <th data-breakpoints="xs sm md">Status</th>
                                    
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
                                        <span class="phone">
                                       
                                            {{$fault->technician}}
                                         
                                     </span>
                                    </td>
                                   
                                      <td>
                                        <span class="phone">{{$fault->status}}</span>
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

<script src="{{asset('pdf.js')}}"></script>
<script src="{{asset('download.js')}}"></script>
@endsection
