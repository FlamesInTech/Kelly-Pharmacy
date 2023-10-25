<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        label{
            display: inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
        }
        
    </style>
  </head>
  <body>
    <x-app-layout>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
        @include('admin.sidebar')
      <!-- partial -->
         @include('admin.header')
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <h1 style="text-align: center;">Send Email to {{$order->email}}</h1>
          
            <form action="{{url('send_user_email', $order->id)}" method="POST">

            @csrf
            
                <div style="padding: 10px;">
                    <label >Email Greeting :</label>

                    <input style="color: black;" type="text" name="greeting">
                </div>

                <div style="padding: 10px;">
                    <label >Email Firstline :</label>

                    <input style="color: black;" type="text" name="firstline">
                </div>

                <div style="padding: 10px;">
                    <label >Email Body :</label>

                    <input style="color: black;" type="text" name="body">
                </div>

                <div style="padding: 10px;">
                    <label >Email Button :</label>

                    <input style="color: black;" type="text" name="button">
                </div>

                <div style="padding: 10px;">
                    <label >Email Url :</label>

                    <input style="color: black;" type="text" name="url">
                </div>

                <div style="padding: 10px;">
                    <label >Email Lastline :</label>

                    <input style="color: black;" type="text" name="lastline">
                </div>

                <div style="padding: 10px;">
                   
                    <input type="submit" value="Send Email" class="btn btn-primary">
                </div>
            </form>
            
        
          </div>
        </div>
        

    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page --> 
  </x-app-layout>
  </body>
</html>
