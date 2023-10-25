<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Oder Details</h1>
<img height="200" width="250" src="product/{{$order->image}}" alt="">

    Customer Name :<h3>{{$order->name}}</h3>
    Customer Email :<h3>{{$order->email}}</h3>
    Customer Phone :<h3>{{$order->phone}}</h3>
    Customer Address :<h3>{{$order->address}}</h3>
    Customer Id :<h3>{{$order->user_id}}</h3>

    Product Name: <h3>{{$order->product_title}}</h3>
    Product Price: <h3>{{$order->price}}</h3>
    Product Quantity: <h3>{{$order->quantity}}</h3>
    Product Status: <h3>{{$order->payment_status}}</h3>
    Product ID: <h3>{{$order->product_id}}</h3>
    <br> <br>

    

</body>
</html>