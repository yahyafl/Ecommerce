<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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


                  <h1 class="font_s">Update Product</h1>
                  <form action="{{url('/edit_product_conf',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <label>Product Title:</label>

                  <input class="text_color" type="text" name="title" placeholder="write a title" required="" value="{{$product->title}}">

                </div>
                <div class="div_center">


                  <label>Product descrption:</label>

                  <input class="text_color" type="text" name="descrption" placeholder="write a descrption" required="" value="{{$product->description}}">

                </div>
                 <div class="div_center">

                  <label>Product price:</label>

                  <input class="text_color" type="number" name="price" placeholder="write a price" required="" value="{{$product->price}}">

                </div>
                <div class="div_center">

                  <label>Discount price:</label>

                  <input class="text_color" type="text" name="dis_price" placeholder="write a discout if there is" value="{{$product->discount_price}}">

                </div>
                <div class="div_center">

                  <label>Product Quantity:</label>

                  <input class="text_color" type="number" min="0" name="quantity" placeholder="write a quantity" required="" value="{{$product->quantity}}">

                </div>

                <div class="div_center">

                  <label>Product Catagory:</label>
                  <select class="text_color" name="catagory" required="" >

                    <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>


                    @foreach ($catagory as $catagory)


                    <option value="{{$catagory->catagory}}">{{$catagory->catagory}}</option>

                    @endforeach


                  </select>


                </div>
                <div class="div_center">

                    <label>current Image here:</label>

                    <img src="/products/{{$product->image}}" alt="">



                  </div>
                <div class="div_center">


                  <label>change Image here:</label>

                  <input type="file" name="image" required="" value="{{$product->image}}">


                </div>">


                </div>
                <div class="div_center">
                  <input type="submit" value="update product" class="btn btn-primary">
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
