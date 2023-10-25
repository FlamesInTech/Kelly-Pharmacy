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
         .chat{
            position: fixed;
            bottom: 3cm;
            right: 10px;
            z-index: 99999999;
         }
      </style>
   
   </head>
   <body>
      <!-- <div class="hero_area"> -->
         <!-- header section strats -->
            @include('user.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('user.hero')
         <!-- end slider section -->
      <!-- </div>       -->
      
      <!-- product section -->
         @include('user.product')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('user.book')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('user.testimonials')
      <!-- end client section -->
      <!-- footer start -->
      @include('user.footer')
      <!-- footer end -->
      <a href="http://wa.me/09033231620" target="_blank" rel="noopener noreferrer"><span class="circle-shape bg-success text-white chat mai-chatbubbles-outline"></span></a>
      
      <script>
         document.addEventListener("DOMContentLoaded", function(event){
            var scrollpos = localStorage.getItem('scrollpos');
            if(scrollpos) windows.scrollTo(0. scrollpos);
         });

         windows.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
         };
      </script>
      
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