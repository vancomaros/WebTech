           <!--Nav bar-->
           <nav class="navbar navbar-expand-sm navbar-dark bg-black">
               <div class="container">
                   <a class="navbar-brand col-4" href="/">
                       <img src="./img/Logo/logo_size_invert.jpg" alt="logo">
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
                                <a class="nav-link" href="{{ __('Dashboard') }}">Home</a>
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
                               <a class="nav-link" href="#">Notebooks</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="#">Mobile phones</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="#">TV's</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="#">Monitors</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="#">Smart watches</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="#">Gaming devices</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="#">Photo, audio, video</a>
                           </li>
                           <li class="nav-item d-block d-sm-none pl-4">
                               <a class="nav-link" href="#">Office</a>
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

            <!--Search-->
            <div class="bg-black head">
                <div class="searchbar">
                    <div class="input-group row">
                        <input class="form-control col-7 col-md-4 col-sm-8 mt-2 py-1 mx-auto amber-border search-window"
                            type="text" name="query" placeholder="Search" aria-label="Search">
                        <a class="nav-link btn btn-color mt-1" href="#">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>

           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
