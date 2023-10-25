<!DOCTYPE html>
<html>
   <head>
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
      <title>Kelly Pharmacy | Home</title>
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
            text-align: center;
            width: 70%;
            padding: 30px;
         }
         table,th,td{
            border: 1px solid black;
         }
         .center th{
            padding: 10px;
            font-weight: bold;
         }
      </style>
   
   </head>
   <body>
      <!-- <div class="hero_area"> -->
         <!-- header section strats -->
            @include('user.header')
     
            <div class="table-responsive center">
                <table>
                    <tr>
                        <td>Product Title</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td>Payment Status</td>
                        <td>Delivery Status</td>
                        <td>Image</td>
                        <td>Cancel Order</td>
                    </tr>
                    @foreach($order as $order)
                    <tr>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img height="100" width="120" src="product/{$order->image{}}" alt="">
                        </td>
                        <td>
                            @if($order->delivery_status=='processing')
                            <a onclick="return Confirm('Are You Sure to Cancel this Order!?)" class="btn btn-damger" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                        @else
                            <p>Not Allowed</p>
                        @endif
                        </td>
                    </tr>
                </table>
            </div>
      <!-- footer end -->
      <a href="http://wa.me/09033231620" target="_blank" rel="noopener noreferrer"><span class="circle-shape bg-success text-white chat mai-chatbubbles-outline"></span></a>
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
</html>