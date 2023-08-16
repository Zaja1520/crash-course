
  {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/Register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Login">Login</a>
        </li>
      </ul>
    </div>
  </nav> --}}
@section('style')
  <style>
    .navbar-container{
      display: grid;
      grid-template-columns: 1fr 1fr; 
    }

    .nav-link-container{
      justify-self: end;
      
    }

    ul {
      padding-top: 10px;
      margin: 0;
      display: grid;
      grid-template-columns: 150px 150px; 
      align-items: center;
      justify-content: center;
    }

    li, a{
      text-decoration: none;
      list-style-type: none;
      color: black;
    }
    .logo{
      height: 50px;
      width: 60px;
    }

  </style>
@endsection
  <nav class="navbar-container">
      <div class="logo-container"><img class="logo" src="{{asset('images/logo.png')}}" alt=""></div>
      <div class="nav-link-container">
        <ul>
          <li><a href="#">Register</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </nav>
