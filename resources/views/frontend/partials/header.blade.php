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
                  <a class="nav-link" href="{{route('About.list')}}">About</a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="{{route('Contact.list')}}">Contact</a>
               </li>
               <li class="nav-item col-3">
                  <a type="button" class="btn btn-outline-danger">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
                     </svg>
                     Cart
                  </a>
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