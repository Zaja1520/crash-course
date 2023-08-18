
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

    .nav-links {
      padding-top: 30px;
      margin-left: -20px;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space;
    }
    .nav-links li {
      margin-right: 30px;
    }
    li, a{
      text-decoration: none;
      list-style-type: none;
      color: black;
    }
    .logo{
      height: 80px;
      width: 70px;
    }

  </style>
@endsection

@if (auth()->check())
<nav class="navbar-container">
  <div class="logo-container"><a href="{{ route('index') }}"><img class="logo" src="{{asset('images/logo.png')}}" alt=""></a></div>
  <div class="nav-link-container">
    <ul class="nav-links">
      {{-- route through route name --}}
      <li>Welcome {{ auth()->user()->name }}</li>
      <li><a href="{{route('manage-jobs')}}">Manage Listings</a></li>
      <li>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit">Logout</button>
        </form>
      </li>
    </ul>
  </div>
</nav>
@else
  <nav class="navbar-container">
    <div class="logo-container"><a href="{{ route('index') }}"><img class="logo" src="{{asset('images/logo.png')}}" alt=""></a></div>
    <div class="nav-link-container">
      <ul class="nav-links">
        {{-- route through route name --}}
        <li><a href="{{ route('registration') }}">Register</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
      </ul>
    </div>
  </nav>
  
@endif
  
