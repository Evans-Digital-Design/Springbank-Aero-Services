<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hi your appointment has been confirmed. Please see the details below:
    <br>
    <strong>{{$data->service->name}} ({{$data->service->duration}} minutes) at the aircraft location : {{$appointment->aircraft_location}}</strong>
</body>
</html>
