<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border: 1px solid #dee2e6; border-radius: 5px; overflow: hidden;">
        <div style="background-color: #007bff; color: #ffffff; padding: 20px;">
            <h2 style="margin: 0; font-size: 24px;">We got a new Membership Application from {{ $mailData['name'] }}</h2>
        </div>
        <div style="padding: 20px;">
            <p style="margin-bottom: 20px;">Their information is as stated below:</p>
            <div style="display: flex; flex-wrap: wrap;">
                <div style="flex: 1; min-width: 200px; padding-right: 10px;">
                    <p><strong>Name/Company Name:</strong> {{ $mailData['name'] }}</p>
                    <p><strong>Email Address:</strong> {{ $mailData['email'] }}</p>
                    <p><strong>Telephone Number:</strong> {{ $mailData['telephoneNumber'] }}</p>
                </div>
                <div style="flex: 1; min-width: 200px; padding-left: 10px;">
                    <p><strong>Mobile Number:</strong> {{ $mailData['mobileNumber'] }}</p>
                    <p><strong>Home Address:</strong> {{ $mailData['address'] }}</p>
                    <p><strong>National Identity Number:</strong> {{ $mailData['NIK'] }}</p>
                </div>
            </div>
            <p style="margin-top: 20px;">Please respond and confirm the membership application immediately.</p>
        </div>
    </div>
</body>
</html>