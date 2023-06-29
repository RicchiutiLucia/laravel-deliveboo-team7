<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>New Order Created</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>Name: {{ $order->name }}</p>
    <p> Email: {{ $order->email}}</p>
    <p>Phone: {{ $order->phone }}</p>
    <p>Address: {{ $order->address }}</p>
    <p>Total price: {{ $order->total_price }}</p>
    
</body>
</html>