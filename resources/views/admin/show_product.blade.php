<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
      .font_size {
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
        color: #333; /* Darker color for better contrast */
      }
      .center {
        margin: auto;
        width: 70%;
        border: 2px solid #ddd; /* Slightly darker border */
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
        background-color: #fff; /* White background for better contrast */
      }
      table.center {
        width: 100%;
        border-collapse: collapse;
      }
      table.center th, table.center td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
        color: #333; /* Darker text color */
      }
      table.center th {
        background-color: #f8f8f8;
        color: #333;
      }
      table.center tr:nth-child(even) {
        background-color: #f9f9f9;
      }
      table.center tr:hover {
        background-color: #f1f1f1;
      }
      table.center img {
        max-width: 100px;
        height: auto;
        border-radius: 4px;
      }
      table.center a {
        text-decoration: none;
        color: #007bff;
      }
      table.center a:hover {
        text-decoration: underline;
      }
      .container-scroller {
        background-color: #fafafa;
        padding: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.partial')
      <!-- partial -->
      @include('admin.nav')
      <div class="main-panel">
        <div class="content-wrapper">
            @if (@session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>


            @endif
          <h2 class="font_size">All Products</h2>
          <table class="center">
            <tr>
              <th>Product Title</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>Category</th>
              <th>Price</th>
              <th>Discount</th>
              <th>Product Image</th>
              <th>Delete</th>
              <th>Edit</th>
            </tr>
            @foreach ($Product as $product)
            <tr>
              <td>{{$product->title}}</td>
              <td>{{$product->description}}</td>
              <td>{{$product->quantity}}</td>
              <td>{{$product->catagory}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->discount_price}}</td>
              <td>
                <img src="/products/{{$product->image}}" alt="{{$product->title}}">
              </td>
              <td>
                <a class="btn btn-danger" onclick="return confirm('are you sure to delete this')" href="{{url('delete_product',$product->id)}}">Delete</a>
              </td>
              <td>
                <a class="btn btn-success" href="{{url('edit_product',$product->id)}}">Edit</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      <!-- partial -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
    @include('admin.jss')
  </body>
</html>
