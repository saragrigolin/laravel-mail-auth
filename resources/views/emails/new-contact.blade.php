<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hai ricevuto una nuova mail!</h1>
    <p>Name: {{ $lead->name }}</p>
    <p>Email: {{ $lead->email}}</p>
    <p>Message: {{ $lead->message }}</p>
</body>
</html>