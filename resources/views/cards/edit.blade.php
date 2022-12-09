@extends('layouts.dash')
@section('content')
<!-- Main Content -->
<section class="content agent">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Edit {{$card->name}}
                    <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i>  {{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">card</a></li>
                    <li class="breadcrumb-item active">Edit {{$card->title}}</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">        
        
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>card</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        
                            <form action="/cards/{{$card->id}}/update" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="title"class="form-control" value="{{  $card->title }}">
                                        </div>
                                    </div>
                                       <!-- <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="file" name="file"class="form-control"value="{{  $card->file }}">
                                        </div>
                                    </div> -->
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <textarea name="description" id="" class="form-control "  cols="30" rows="10">{{ $card->description }}</textarea>
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