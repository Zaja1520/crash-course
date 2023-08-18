<section class="section" style="padding: 10px;">
    <div style="background-image: url('images/laravel-logo.png')"></div>
    <div>
      <h1 style="color: white;">
        LARA<span class="text-black">GIGS</span>
      </h1>
      <p>
        Find or <a style="color:white;"href="{{ route('createJob') }}">post Laravel jobs & projects</a>
      </p>
      <div>
        @auth
        @else
        <a class="register-shortcut" href="{{ route('registration') }}">Sign
          Up to List a Gig</a>
        @endauth
      </div>
    </div>
  </section>