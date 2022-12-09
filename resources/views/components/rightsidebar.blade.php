<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Account</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Security</a></li>
        {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li> --}}
    </ul>
    <div class="tab-content">
        <div class="tab-pane active slideRight" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    {{-- /profile/{{ auth::user()->id }}/password --}}
                    <h6>Account Details</h6>
                         <form action="/profile/{{ auth::user()->id }}/edit" method="POST">
                              @csrf
                              <div class="input-group input-lg">
                                   <input id="email" type="name" placeholder="Email" value="{{ Auth::user()->name }}"class="form-control  @error('email') is-invalid @enderror" name="name" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   
                              </div>
                               <div class="input-group input-lg">
                                   <input id="email" type="email" placeholder="Email" value="{{ Auth::user()->email }}"class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   
                              </div>

                              <div class="footer text-center">
                                   <input type="submit" value="Update"  class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">
                              </div>
                         </form>        
                </div>
                
               
            </div>                
        </div>       
        <div class="tab-pane right_chat pullUp" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Change Password</h6>
                         <form action="/profile/{{ auth::user()->id }}/password " method="POST">
                              @csrf
                              <div class="input-group input-lg">
                                   <input id="email" type="password" placeholder="Password" value=""class="form-control  @error('email') is-invalid @enderror" name="password" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   
                              </div>
                               <div class="input-group input-lg">
                                   <input id="email" type="password" placeholder="Confirm Password" value=""class="form-control  @error('email') is-invalid @enderror" name="password2" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   
                              </div>

                              <div class="footer text-center">
                                   <input type="submit" value="Update"  class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">
                              </div>
                         </form>        
                </div>
            </div>
        </div>
        {{-- <div class="tab-pane slideRight" id="activity">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Recent Activity</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-cake bg-blue"></i>                    
                                <div class="info">
                                    <h4>Admin Birthday</h4>                    
                                    <small>Will be Jan 01</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-file-text bg-red"></i>
                                <div class="info">
                                    <h4>Bungalows for sale</h4>
                                    <small>Will be Jan 02</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                <div class="info">
                                    <h4>Star New project</h4>
                                    <small>Will be Jan 12</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-email bg-amber"></i>
                                <div class="info">
                                    <h4>New Email</h4>
                                    <small>Will be Jan 18</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Project Status</h6>
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">AWR Business Center</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86%</span>
                            </div>
                        </div>                        
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small>Team</small></li>
                            <li>
                                <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                            </li>                            
                        </ul>
                    </div>
                    <div class="progress-container">
                        <span class="progress-badge">Sandals Bungalows</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                <span class="progress-value">45%</span>
                            </div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small>Team</small></li>
                            <li>
                                <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                            </li>
                        </ul>
                    </div>
                    <div class="progress-container progress-warning">
                        <span class="progress-badge">Hill Status Flat</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                <span class="progress-value">29%</span>
                            </div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small>Team</small></li>
                            <li>
                                <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                            </li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</aside>