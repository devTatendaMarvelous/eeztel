<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li >
                <div class="user-info ">
                    <div class="image"><a href="profile.html"><img src="{{ Auth::user()->photo ? asset('storage/'.Auth::user()->photo): asset('nomedia.png')}}" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{Auth::user()->name}}</h4>
                        <small>{{Auth::user()->role}}</small>                        
                    </div>
                    
                </div>
            </li>
            <li class="header ">MAIN</li>
            <li class="active open"><a href="/"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>  
                       
           
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Job Cards</span> </a>
                <ul class="ml-menu">
                    <li><a href="/cards">All Cards</a></li>
                    <li><a href="/cards/create">Add Card</a></li>
                </ul>
            </li>
          
          
            
              
         
        </ul>
    </div>
</aside>