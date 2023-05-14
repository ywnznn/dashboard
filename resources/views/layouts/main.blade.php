
<!doctype html>
<html lang="en">

@include('pages.header')

<body class="vertical  dark  ">
  <div class="wrapper">
    @include('pages.navbar')
   @include('pages.sidebar')
    <main role="main" class="main-content">
      {{-- @yield('content') --}}
      @include('pages.dashboard')
    </main> <!-- main --> 
  </div> <!-- .wrapper -->
  
</body>

</html>