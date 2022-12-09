 @extends('layouts.dash')

@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>technicians
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">technicians</li>
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
                                
                                <a href="/technicians/create" class="btn btn-detechnician btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down">
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
                                    
                                    <th>Technician Name</th>  
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                              @forelse ($technicians as $technician )
                                <tr>
                                    
                                    <td>
                                       {{$technician->name}}
                                        
                                    </td>
                                    <td>
                                        <span class="phone">
                                        <form action="/faults/{{$id}}/updateTechnician" method="post">
                                        @csrf                                        
                                        <input  type="hidden"name="technician" value="{{$technician->id}}">
                                            <input type="submit"   class="btn btn-success" value="Assign Technician">
                                        </form>
                                        

                                        
                                     </span>
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
