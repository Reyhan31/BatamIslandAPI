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
    <h2>We got a new Booking from {{ $mailData['name'] }}</h2>
    <p>Their Booking information is as stated below:</p>
    <br />
    <p>Name/Company Name	    : {{ $mailData['name'] }}</p> 
    <p>Email Address		    : {{ $mailData['email'] }}</p> 
    <p>Telephone Number		    : {{ $mailData['phone'] }}</p>
    <p>Slot Date		        : {{ $mailData['day'] }} - {{ $mailData['month'] }} - {{ $mailData['year'] }}</p>
      
    <br />
    <p>Please respond and confirm the membership application immediately</p>
    </div>
</body>
</html>