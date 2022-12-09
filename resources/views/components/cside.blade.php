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
                    <!-- <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a href="sign-in.html" title="Sign out"><i class="zmdi zmdi-power"></i></a> -->
                </div>
            </li>
            <li class="header ">MAIN</li>
            <li class="active open"><a href="/"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>  
             <li><a href="/faults/create" class="menu-to ggle"><i class="zmdi zmdi-report"></i>                <span>Report A Fault</span> </a>
               
            </li> 
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i>                <span>Feedback</span> </a>
                <ul class="ml-menu">
                    <li><a href="/feedbacks/{{ Auth::user()->id }}/client">Your Sent Feedbacks</a></li>
                    <li><a href="/feedbacks/create">Give Us Feedback</a></li>                       
                    {{-- <li><a href="profile.html">Agent Profile</a></li>
                    <li><a href="invoices.html">Agent Invoice</a></li> --}}
                </ul>
            </li> 
              
        </ul>
    </div>
</aside>