<nav class = "navbar navbar-inverse">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavBar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="{{ url('/') }}">Partizan_Task</a>
    </div>

    <div class="collapse navbar-collapse" id="topNavBar">
        <ul class="nav navbar-nav">
          <li class="">
            <a href="{{ url('/') }}">
              <i class="fa fa-newspaper-o" aria-hidden="true"></i>
              News
            </a>
          </li>
          
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if(Auth::guest())
          <li class="">
            <a href="{{ route('login') }}"
                onclick=>
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                Login
            </a>

            <form id="" action="" method="POST" style="display: none;">
               
            </form>
  
          </li>

          <li class="">
            <a href="{{ route('register') }}"
                onclick="">
                <i class="fa fa-registered" aria-hidden="true"></i>
                Register
            </a>

            <form id="" action="" method="POST" style="display: none;">
               
            </form>
  
          </li>

          @else
          <li class="">
            <a href="">
              Hello {{ Auth::user()->name }}
            </a>
          </li>
          @role('superadministrator')
              <li class="">
                <a href="{{ route('manage.index') }}">
                  <i class="fa fa-tachometer" aria-hidden="true"></i>
                  Manage User
                </a>
              </li>
          @endrole
          @role('superadministrator')
              <li class="">
                <a href="{{ route('post.index') }}">
                  <i class="fa fa-tachometer" aria-hidden="true"></i>
                  Posts Dashboard
                </a>
              </li>
          @endrole
          @role('administrator')
              <li class="">
                <a href="{{ route('post.index') }}">
                  <i class="fa fa-tachometer" aria-hidden="true"></i>
                  Posts Dashboard
                </a>
              </li>
          @endrole
          @role('user')
              <li class="">
                <a href="{{ route('post.index') }}">
                  <i class="fa fa-tachometer" aria-hidden="true"></i>
                  Posts Dashboard
                </a>
              </li>
          @endrole

          

          <li class="">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
  
          </li>

          @endif

        </ul>

  </div>
</nav>
