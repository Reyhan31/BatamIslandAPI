<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>We got a new Booking from {{ $mailData['name'] }}</h2>
    <p>Their Booking information is as stated below:</p>
    <br />
    <p>Custom id : {{ $mailData['custom_id'] }}</p>
    <p>status : {{ $mailData['status'] }}</p>
    <p>date : {{ $mailData['date'] }}</p>
    <p>name : {{ $mailData['name'] }}</p>
    <p>email : {{ $mailData['email'] }}</p>
    <p>Phone Number : {{ $mailData['phoneNumber'] }}</p>
    <p>Package Name : {{ $mailData['packageName'] }}</p>
    <p>Price : {{ $mailData['price'] }}</p>
</body>
</html>