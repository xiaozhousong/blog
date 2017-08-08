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
            <a href="{{ url('/albums') }}">
              <i class="fa fa-newspaper-o" aria-hidden="true"></i>
              News
            </a>
          </li>
          
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="">
              <a href="">
              Hello
              </a>
            </li>
            <li class="">
              <a href="">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                Dashboard
              </a>
            </li>
            <li class="">
              <a href=""
                  onclick="">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
                  Login
              </a>

              <form id="" action="" method="POST" style="display: none;">
                 
              </form>
    
            </li>

            <li class="">
              <a href=""
                  onclick="">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  Logout
              </a>

              <form id="" action="" method="POST" style="display: none;">
                 
              </form>
    
            </li>

             <li class="">
              <a href=""
                  onclick="">
                  <i class="fa fa-registered" aria-hidden="true"></i>
                  Register
              </a>

              <form id="" action="" method="POST" style="display: none;">
                 
              </form>
    
            </li>


        </ul>



    
    

  </div>
</nav>