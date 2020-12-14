           <!--Nav bar-->
           <nav class="navbar navbar-expand-sm navbar-dark bg-black">
               <div class="container">
                   <a class="navbar-brand col-4" href="/">
                       <img src="/img/Logo/logo_size_invert.jpg" alt="logo">
                   </a>
                   <!-- Login button on small devices, if the user is already logged in,
                   there will be button with user name instead-->
                   <a class="nav-link d-block title-color btn-color d-sm-none col-2
                            mr-1 font-weight-bold btn btn-color btn-sm" href="login">Login</a>

                   <!--small devices-->
                   <button class="navbar-toggler" data-toggle="collapse"
                           data-target="#navbarCollapse">
                       <span class="navbar-toggler-icon"></span>
                   </button>

                   <div class="collapse navbar-collapse" id="navbarCollapse">
                       <ul class="navbar-nav ml-auto pt-2">
                       @if (Route::has('login'))
                            @auth
                            <li class="nav-item d-none d-sm-block">
                                <!-- <a class="nav-link" href="{{ __('dashboard') }}">Profile</a> -->
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                    @csrf
                                </form>
                            </li>
                            @else
                            <li class="nav-item d-none d-sm-block">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                            <li class="nav-item d-none d-sm-block">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                           @endauth
                        @endif
                           <li class="d-block d-sm-none">
                               <p class="title-color">Categories</p>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="/list/notebooks">Notebooks</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="/list/mobile_phones">Mobile phones</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="/list/tvs">TV's</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="/list/monitors">Monitors</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="/list/smartwatches">Smart watches</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="/list/gaming_devices">Gaming devices</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="/list/photo_audio_video">Photo, audio, video</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="/list/office">Office</a>
                           </li>
                           <!-- If user is logged in, logout button is in menu-->
                           <li class="nav-item d-block d-sm-none d-block d-sm-none pt-4">
                               <p class="title-color">Log out</p>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
           <!--End of nav-->


           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     <!--       <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script> -->

