<!DOCTYPE html>
<html>
   <head>

      <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>EmmaSide Pharmacy | Home</title>
      <link rel="stylesheet" href="assets/css/maicons.css">

      <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

      <link rel="stylesheet" href="assets/vendor/animate/animate.css">

      <link rel="stylesheet" href="assets/css/theme.css">




      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="assets/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="assets/css/responsive.css" rel="stylesheet" />
    
      <style>
        .center{
            margin: auto;
            /* width: 70%; */
            text-align: center;
            padding: 30px;
        }
        table,th,td {
            border: 1px solid grey;
        }
        .table th {
            font-size: large;
            padding: 5px;
            background-color: skyblue;
        }
        .img_deg {
            height: 100px;
            width: 100px;
        }
        .total_deg {
            font-size: 20px;
            padding: 40px;
        }

        @media (max-width: 700px) {
            .center{
                padding: 10px;
            }
            table{
                padding: 0;
                margin: 0;
            }
            .img_deg {
                height: 50px;
                width: 80px;
            }
            .table th {
                font-size: smaller;
            }
            .total_deg {
                font-size: smaller;
                padding: 20px;
            }
            td{
                font-size: smaller;
            }
            .btn{
                font-size: smaller;
            }
        }
      </style>
   
    </head>
   <body>
      <!-- <div class="hero_area"> -->
         <!-- header section strats -->
            @include('user.header')
         <!-- end header section -->

         @if(session()->has('message'))

            <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" arial-hidden="true">x</button>
            {{session()->get('message')}}
            </div>

        @endif
         
         <div class="center">
            <div class="table-responsive">
                <table class="table table-bordered">
                <tr>
                    <th>Product title</th>
                    <th>Product quantify</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                <?php $totalprice=0; ?>

                @foreach($cart as $cart)

                <tr>
                    <td>{{$cart->product_title}}</td>
                    <td>{{$cart->quantity}}</td>
                    <td>${{$cart->price}}</td>
                    <td><img class="img_deg" src="/product/{{$cart->image}}" alt=""></td>
                    <td><a onclick="return confirm('Are you sure to remove this great product?')" href="{{url('/remove_cart', $cart->id)}}" class="btn btn-danger">Remove</a></td>
                </tr>

                <?php $totalprice=$totalprice + $cart->price  ?>
 

                @endforeach

            </table>
            </div>
            
            <div>
                <h1 class="total_deg" >Total price : ${{$totalprice}}</h1>
            </div>
            <div>
                <h1 style="font-size: 25px; padding-bottom: 10px;">Proceed to Order</h1>
                <a href="{{url('cash_order')}}" class="btn btn-danger" > Cash On Delivery</a>
                <a href="{{ url('paystack/' . $totalprice) }}" class="btn btn-danger">Pay Using Card</a>
            </div>
         </div>


      <!-- footer start -->
      @include('user.footer')
      <!-- footer end -->

      <!-- jQery -->
      <script src="assets/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="assets/js/popper.min.js"></script>
      <!--   bootstrap js -->
      <script src="assets/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="assets/js/custom.js"></script>


      <script src="assets/js/jquery-3.5.1.min.js"></script>

      <script src="assets/js/bootstrap.bundle.min.js"></script>

      <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

      <script src="assets/vendor/wow/wow.min.js"></script>

      <script src="assets/js/theme.js"></script>

   </body>
   <script>
    window.addEventListener('beforeunload', function(event) {
  // Prevent the browser from refreshing.
  event.preventDefault();
});

   </script>
</html>