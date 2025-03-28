<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style  type="text/css">
    .div_center
    {
      text-align: center;
      padding-top: 40px;
    }
    .font_s
    {
      font-size:40px;
      padding-bottom: 40px;

    }
    .text_color
    {
      color:black;
      padding-bottom: 20px;
    }
    label
    {
      display:inline-block;
      width: 200px;
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
                <div class="div_center">


                    @if (@session()->has('message'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
                      </div>


                    @endif


                  <h1 class="font_s">Add Product</h1>
                  <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <label>Product Title:</label>

                  <input class="text_color" type="text" name="title" placeholder="write a title" required="">

                </div>
                <div class="div_center">


                  <label>Product descrption:</label>

                  <input class="text_color" type="text" name="descrption" placeholder="write a descrption" required="">

                </div>
                 <div class="div_center">

                  <label>Product price:</label>

                  <input class="text_color" type="number" name="price" placeholder="write a price" required="">

                </div>
                <div class="div_center">

                  <label>Discount price:</label>

                  <input class="text_color" type="text" name="dis_price" placeholder="write a discout if there is">

                </div>
                <div class="div_center">

                  <label>Product Quantity:</label>

                  <input class="text_color" type="number" min="0" name="quantity" placeholder="write a quantity" required="">

                </div>

                <div class="div_center">

                  <label>Product Catagory:</label>
                  <select class="text_color" name="catagory" required="">

                    <option value="" selected="">Add a catagory</option>
                    @foreach ($catagory as $catagory)
                    <option value="{{$catagory->catagory}}">{{$catagory->catagory}}</option>
                    @endforeach

                  </select>


                </div>
                <div class="div_center">

                  <label>Product Image here:</label>

                  <input type="file" name="image" required="">


                </div>
                <div class="div_center">
                  <input type="submit" value="Add product" class="btn btn-primary">
                </div>

              </form>



            </div>
            </div>

        <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
@include('admin.jss')
  </body>
</html>
