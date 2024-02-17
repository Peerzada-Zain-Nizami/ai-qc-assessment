
<!DOCTYPE html>
<html>
  <head>
    <title>Product Management System</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('products') }}">
          <div class="nav-link" style="color: white">PMS,</div>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mynavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link nav-item-color" href="{{ route('products') }}">Products</a>
            </li>
          </ul>
          @if (Route::has('login'))
                <div>
                    @auth
                    <form class="d-flex" style="justify-content: space-between" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="nav-link mt-2 nav-logout" type="submit" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="nav-link mt-2 nav-logout">Log in</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link mt-2 nav-logout">Register</a>
                        @endif --}}

                    @endauth
                </div>
            @endif

          {{-- <form class="d-flex" style="justify-content: space-between">
            <a class="nav-link mt-2 nav-logout" href="card.html">Logout</a> --}}
            <a href="{{ route('product.create') }}">
              <button class="btn theme-nav-btn" type="button">Create</button>
            </a>
          {{-- </form> --}}
        </div>
      </div>
    </nav>
  </body>
</html>


@yield('content')
