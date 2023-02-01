<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.styles')
  @stack ('after-style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('includes.navbar')
      @include('includes.sidebar')

      <!-- Main Content -->
      <div class="main-content">
       @yield('content')
      </div>
      @include('includes.footer')
    </div>
  </div>

  @include('includes.scripts')
  @stack('after-script')
</body>
</html>
