<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Hi <br>
    You have a contact email from your portfolio website.
    <p><strong>Name:</strong>{{ $FormFields['name'] }}</p>
    <p><strong>Email:</strong>{{ $FormFields['email'] }}</p>
    <br>
    <h2>Message</h2><em>{{ $FormFields['message'] }}</em>
</body>

</html>
