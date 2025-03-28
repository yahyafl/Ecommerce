<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.partial')

      <!-- partial -->
      @include('admin.nav')
        <!-- partial -->
        @include('admin.cont')
        <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
@include('admin.jss')
  </body>
</html>
