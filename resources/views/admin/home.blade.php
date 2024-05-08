      <!-- partial Header -->
      @include('admin.layouts.header')
      <!-- partial: Sidebar -->
      @include('admin.layouts.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial: Navbar -->
      @include('admin.layouts.navbar')
        <!-- partial -->
        <div class="main-panel">
      @include('admin.layouts.body')
          <!-- content-wrapper ends -->
          <!-- partial: Footer -->
      @include('admin.layouts.footer')
    <!-- End custom js for this page -->
  </body>
</html>
