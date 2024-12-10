
<header class="header">
      <h1 class="header__title">Justine Batter</h1>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a href="/" class="header__nav-link link__hover-effect link__hover-effect--white">Home</a>
          </li>
          <li class="header__nav-item link__hover-effect link__hover-effect--white">
            <a href="/about" class="header__nav-link">About</a>
          </li>
          <li class="header__nav-item link__hover-effect link__hover-effect--white">
            <a href="/services" class="header__nav-link">Services</a>
          </li>
          <li class="header__nav-item link__hover-effect link__hover-effect--white">
            <a href="/contact" class="header__nav-link">Contact</a>
          </li>
          <li>
            <button id="darkModeToggle" class="header__nav-button">Dark Mode</button>
          </li>
          <li>
            <button id="textFormatToggle" class="header__nav-button text-format">Change Text Format</button>
          </li>
          <li>
          @if(auth()->check())
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-link">Logout</button>
            </form>
          @endif
          </li>
        </ul>
      </nav>
</header>