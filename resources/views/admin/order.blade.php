<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .title_deg {
            text-align: center;
            font-size: larger;
            padding-bottom: 40px;
            overflow-x: auto; 
        }
        .table_deg {
            border: 2px solid white;
            margin: auto;
            text-align: center;
            width: 100%;
        }
        .th_deg th {
            background-color: skyblue;
            padding: 10px; 
        }
        .img_size {
            width: 100px;
            height: 70px;
        }
        .td_deg td {
             padding: 5px; 
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="title_deg">All Orders</div>
            <div class="table-responsive">
            <table class="table_deg table-bordered">
                <tr class="th_deg">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                </tr>
                @foreach($order as $order)
                <tr class="td_deg">
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$order->image}}" >
                    </td>
                    <td>
                    @if($order->delivery_status=='processing')

                        <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered?')" class="btn btn-primary">Delivered</a>
                    @else
                    <p style="color: green">Delivered</p>
                    @endif
                    </td>
                </tr>
                @endforeach
            </table> 
          </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>