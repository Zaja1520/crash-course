<section class="section" style="padding: 10px;">
    <div style="background-image: url('images/laravel-logo.png')"></div>
    <div>
      <h1 style="color: white;">
        Lara<span class="text-black">Gigs</span>
      </h1>
      <p>
        Find or post Laravel jobs & projects
      </p>
      <div>
        @auth
        @else
        <a class="register-shortcut" href="/register">Sign
          Up to List a Gig</a>
        @endauth
      </div>
    </div>
  </section>