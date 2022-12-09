@extends('layouts.dash')
@section('content')
<!-- Main Content -->
<section class="content agent">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Users
                <small class="text-muted">Welcome to {{ config('app.name') }}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> {{ config('app.name') }}</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                    <li class="breadcrumb-item active">All Users</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">        
        <div class="row clearfix">
            @forelse ($users as $user )
                <div class="col-lg-4 col-md-6">
                <div class="card agent">
                    <div class="agent-avatar"> <a href="profile.html"> <img src="{{ asset('nomedia.png') }}" class="img-fluid " alt=""> </a> </div>
                    <div class="agent-content">
                        <div class="agent-name">
                            <h4><a href="profile.html">{{ $user->name }}</a></h4>
                            <span>{{ $user->role }}</span>
                        </div>
                        <ul class="agent-contact-details">
                            
                            <li><i class="zmdi zmdi-email"></i>{{ $user->email }}</li>
                        </ul>
                        <ul class="social-icons">
                            <li><a class="facebook" href="/users/{{ $user->id }}/edit"><i class="zmdi zmdi-edit"></i></a></li>
                            <li><a class="twitter" href="/users/{{ $user->id }}/delete"><i class="zmdi zmdi-delete"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
           
        </div>
    </div>
</section>
@endsection