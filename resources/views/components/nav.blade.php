    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark " style="background-color: #2bbbad;" dir="ltr">

        <ul class="navbar-nav ml-auto nav-flex-icons">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-left dropdown-default"
                aria-labelledby="navbarDropdownMenuLink-333">
               
                  <a class="dropdown-item" 
                  type="submit" 
                  href="{{ route('logout')}}" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();
                  ">
                  LogOut
                </a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>

                  <form id="logout-form" style="display: one;" action="{{ route('logout')}}" method="POST">
                    @csrf
                </form>
              
              </div>
            </li>
          </ul>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          

          </ul>

        </div>
      </nav>
      <!--/.Navbar -->
