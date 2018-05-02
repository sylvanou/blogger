<nav class="navbar navbar-inverse">
  <div class="container">
      <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar">a</span>
          <span class="icon-bar">s</span>
          <span class="icon-bar">c</span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/articles">Blog</a></li>
        </ul>
      </div>
    </div>
</nav>