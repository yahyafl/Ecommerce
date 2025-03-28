<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    @include('admin.css')
    <style type="text/css">

    .div_center
    {
        text-align: center;
        padding-top: 40px;

    }
    .h2_font
    {
        font-size: 40px;
        padding-bottom: 40px';
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid greenyellow;
    }

</style>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.partial')

      <!-- partial -->
      @include('admin.nav')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if (@session()->has('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>


                @endif

                <div class="div_center">
                    <h2 class="h2_font">Add Catagory</h2>
                    <form action="{{url('/add_catagory')}}" method="POST">

                        @csrf
                        <input type="text" name="catagory" placeholder="Write catagory name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add catagory">
                    </form>
                </div>
                <table class="center">
                    <tr>
                        <td>Catagory name</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($data as $data)

                    <tr>

                        <td>{{$data->catagory}}</td>
                        <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger"  href="{{url('delete_catagory',$data->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
        </div>


        </div>
        <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
@include('admin.jss')
  </body>
</html>
