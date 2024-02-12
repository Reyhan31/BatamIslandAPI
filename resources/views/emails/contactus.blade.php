<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <h2>We got a new message from {{ $mailData['name'] }}</h2>
    <p>Their message:</p>
    <br />
    <p>Name/Company Name	: {{ $mailData['name'] }}</p> 
    <p>Email Address		: {{ $mailData['email'] }}</p> 
    <p>Telephone Number		: {{ $mailData['telephoneNumber'] }}</p>
    <p>Mobile Number		: {{ $mailData['mobileNumber'] }}</p> 
    <p>Message			    : {{ $mailData['message'] }}</p>   
    </div>
</body>
</html>