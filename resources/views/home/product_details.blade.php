<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
        @include('home.header')




      </div>
      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto;width:50%; padding:30px;">

                <div class="img-box" style="padding:20px ">
                   <img src="products/{{$products->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                      {{$products->title}}
                   </h5>
                   @if ($products->discount_price!=null)


                   <h6 style="color: red">
                    Discount Price
                    <br>
                    ${{$products->discount_price}}
                 </h6>




                 <h6 style="text-decoration: line-through; color:blue">
                    price
                    <br>
                    ${{$products->price}}
                 </h6>
                 @else
                 <h6 style="color:blue">
                    price
                    <br>
                    ${{$products->price}}
                 </h6>

                 @endif


                 <h6>Product catagory:{{$products->catagory}}</h6>

                 <h6>Product Detials :{{$products->description}}</h6>

                 <h6>Availabe quantity: {{$products->quantity}}</h6>



                </div>
             </div>
          </div>
        </div>

      <!-- why section -->

      <!-- footer start -->
    @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
