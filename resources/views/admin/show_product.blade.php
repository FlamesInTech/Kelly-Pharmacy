<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .center {
            margin: auto;
            width: 100%;
            overflow-x: auto; /* Add horizontal scroll for smaller screens */
            text-align: center;
            margin-top: 40px;
        }

        .font_size {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size {
            width: 150px;
            height: 150px;
        }

        .th_color {
            background: skyblue;
        }

        .th_color th {
            padding: 20px; /* Reduce padding for smaller screens */
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

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <h2 class="font_size">All Products</h2>
            <div class="table-responsive">
                <table class="center table table-bordered"> <!-- Add 'table' and 'table-bordered' classes for table styling -->
                    <tr class="th_color">
                        <th>Product title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach($product as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td>
                                <img class="img_size" src="/product/{{$product->image}}" alt=" ">
                            </td>
                            <td><a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')" href="{{url('delete_product',$product->id)}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
