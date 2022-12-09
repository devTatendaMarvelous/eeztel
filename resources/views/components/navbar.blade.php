<nav class="navbar">
    <div class="col-12">        
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.svg')}}" width="30" alt="{{ config('app.name') }}"><span class="m-l-10">{{ config('app.name') }}</span></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
           
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
            <li class="dropdown">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn  btn-round btn-lg btn-block waves-effect waves-light" data-close="true"><i class="zmdi zmdi-power"></i></button>
                </form>
                
            </li>
            <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>