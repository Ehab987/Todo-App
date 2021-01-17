<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-brand afontSize" >TodosList</div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item ">
            <a class="nav-link navFontSize {{Request::is('/') ? 'active' : ' '}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navFontSize {{Request::is('todo/create') ? "active" : " "}}"" href="{{route('create')}}">Create Todo</a>
          </li>
      
   
        </ul>
    
      </div>
    </div>
  </nav>