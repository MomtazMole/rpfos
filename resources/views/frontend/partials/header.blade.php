<div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="{{route('Menu.List')}}">Menu</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                    
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                     </li>

                     
                     </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           @guest
                           <a href="{{route('front.login')}}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a>
                           <a href="{{route('customer.registration')}}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Register</a>
                           @endguest
                           @auth
                           <a href="{{route('customer.logout')}}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Logout</a> |
                           <a href="{{route('profile.view')}}"> {{auth()->user()->name}} ({{ auth()->user()->role }})</a>
                           @endauth
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         
      </div>
      <!-- header section end -->