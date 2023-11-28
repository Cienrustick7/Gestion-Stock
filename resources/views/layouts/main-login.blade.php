<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.style')
</head>

<body>

  <main>
    <div class="container">

      @yield('content')

    </div>
  </main><!-- End #main -->

  @include('layouts.script')

</body>

</html>
