@extends('layouts.client')

@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Feedback
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            
        </div>
    </div>
        <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="feedback action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-6">
                                <h3>All feedbacks</h3>                               
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
                                    
                                    <th data-breakpoints="xs">User Name</th>                            
                                    <th data-breakpoints="xs">Title</th>
                                    <th data-breakpoints="xs sm md">Description</th>
                                    <th data-breakpoints="xs">File</th>
                                </tr>
                            </thead>
                                <tbody>
                               @forelse ($feedbacks as $feedback )
                                    <tr>
                                         <td>
                                        <span class="phone">{{ $feedback->name }}</span>
                                    </td> 
                                    <td>
                                        <span class="phone">{{ $feedback->title }}</span>
                                    </td>
                                     
                                    <td>
                                        <small>{{ $feedback->description }}</small>
                                    </td>
                                    <td>
                                        @if($feedback->file )
                                         <a href="/storage/{{$feedback->file}}" class="btn btn-primary  ">View Feedback File</a>
                                        @else
                                        <p class="btn btn-default  ">nofile</p>
                                        @endif
                                        
                                       
                                    </td>
                                 
                                </tr>
                               @empty
                                   <tr class="text-center"><h3>No feedback Exist For Now Click <a href="/feedbacks/create"><em>Here</em></a> To Add A feedback</h3></tr>
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