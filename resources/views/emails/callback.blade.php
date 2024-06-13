<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border: 1px solid #dee2e6; border-radius: 5px; padding: 20px;">
        <h2 style="color: #007bff; font-size: 24px;">We got a new Booking from {{ $mailData['name'] }}</h2>
        <p style="font-size: 16px;">Their Booking information is as stated below:</p>
        <br />
        <p style="font-size: 16px;"><strong>Custom ID:</strong> {{ $mailData['custom_id'] }}</p>
        <p style="font-size: 16px;"><strong>Status:</strong> {{ $mailData['status'] }}</p>
        <p style="font-size: 16px;"><strong>Date:</strong> {{ $mailData['date'] }}</p>
        <p style="font-size: 16px;"><strong>Name:</strong> {{ $mailData['name'] }}</p>
        <p style="font-size: 16px;"><strong>Email:</strong> {{ $mailData['email'] }}</p>
        <p style="font-size: 16px;"><strong>Phone Number:</strong> {{ $mailData['phoneNumber'] }}</p>
        <p style="font-size: 16px;"><strong>Package Name:</strong> {{ $mailData['packageName'] }}</p>
        <p style="font-size: 16px;"><strong>Price:</strong> {{ $mailData['price'] }}</p>
    </div>
</body>
</html>