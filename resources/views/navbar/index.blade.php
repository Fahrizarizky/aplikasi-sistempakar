<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand disabled">Hi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
        @if (!auth()->check()) 
        <a class="nav-link active" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        <a class="nav-link active" href="/register"><i class="bi bi-person-vcard-fill"></i> Register</a>
        @else
        <a class="nav-link active" href="/konsultasi"><i class="bi bi-people-fill"></i> Konsultasi</a>
        <a class="nav-link active" href="/account/{{ auth()->user()->id }}"><i class="bi bi-person-circle"></i> Account</a>
        <a class="nav-link active" href="/logout"><i class="bi bi-power"></i> Logout</a>
        @endif
           @can('admin')
          <a class="nav-link active text-light" href="/dashboard"><i class="bi bi-person-workspace"></i> Admin</a>
          @endcan
      </div>
    </div>
  </div>
</nav>