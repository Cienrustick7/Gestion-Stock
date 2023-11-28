<!DOCTYPE html>
<html lang="en">

@include('layouts.style')
<body>

  <!-- ======= Header ======= -->
  @include('require.header')
  <!-- End Header -->
@include('require.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="text-center">
         <h1>Bienvenue sur Application Gestion Stock</h1>
        </div>
        <div>
            <img src="{{ asset('assets/img/images.jpeg') }}" alt="" style="width: 100% " height="50%">
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  @include('require.footer')
  @include('layouts.script')
</body>

</html>
