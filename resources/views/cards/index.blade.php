@extends('layouts.dash')

@section('content')
<section class="content contact">
    <div class="block-header">
        
    </div>
        <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-12">
                               <center> <h3>Availabe Job cards</h3></center>                               
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
                                    
                                    <th data-breakpoints="xs">Client Name</th>
                                                                 
                                    <th data-breakpoints="xs">Title</th>
                                    <th data-breakpoints="xs sm md">Description</th>
                                     <th data-breakpoints="xs">File</th>
                                    <th data-breakpoints="xs">Report Date</th>
                                    <th data-breakpoints="xs">Time In</th>
                                    <th data-breakpoints="xs">Time Out</th>
                                    <th data-breakpoints="xs">Total Hours Worked</th>
                                      <th data-breakpoints="xs">Technician Attended</th>   
                                     <th data-breakpoints="xs">Status</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                               @forelse ($cards as $card )
                                    <tr> 
                                        
                                    <td>
                                        <span class="phone">{{ $card->client }}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $card->title }}</span>
                                    </td>
                                     
                                    <td>
                                        <small>{{ $card->description }}</small>
                                    </td>
                                  
                                    <td>
                                        @if($card->file )
                                         <a href="/storage/{{$card->file}}" class="btn btn-primary  ">View Card</a>
                                        @else
                                        <p class="btn btn-default  ">nofile</p>
                                        @endif
                                        
                                       
                                    </td>
                                      <td>
                                        <span class="phone">{{ $card->reportDate }}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $card->timeIn }}</span>
                                    </td>
                                      <td>
                                        <span class="phone">{{ $card->timeOut }}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $card->totalTime }}</span>
                                    </td>
                                      <td>
                                        <span class="phone">{{ $card->name }}</span>
                                    </td>
                                    <td>
                                        <span class="phone">{{ $card->status }}</span>
                                    </td>
                                    <td>
                                        <a href="/cards/{{ $card->id }}/edit" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="/cards/{{ $card->id }}/delete" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                               @empty
                                   <tr class="text-center"><h3>No card Exist For Now Click <a href="/cards/create"><em>Here</em></a> To Add A card</h3></tr>
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