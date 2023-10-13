
<header class="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <div class="container-fluid">
    <a class="navbar-brand" href="#"> 
    <img src="{{ asset('assets/img/aea.png')}}" alt="" width="55  " height="30" class="d-inline-block align-text-top">
      Go To Work
    </a>
    @auth
  </div>
        <li class="nav-item">
          <a class="nav-link" href="#">JOBS</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
       
        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->nombre}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Mis Jobs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Cerrar Seccion</a></li>
          </ul>
        </li>
        @endauth

    
      </ul>
        
      </form>
    </div>
  </div>
  </header>
</nav>