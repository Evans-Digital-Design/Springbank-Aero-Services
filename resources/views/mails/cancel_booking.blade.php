<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Dear Employee,</p>
<br>
<pre>
        I hope this email finds you well.

        I regret to inform you that we need to cancel the booking made for you on {{ $data['date'] }} at  {{ $data['start_time'] }} to  {{ $data['end_time'] }}. Our sincerest apologies for any inconvenience this may cause.

        Our Client, {{ $data['client_name'] }}, has encountered unforeseen circumstances that require their immediate attention, necessitating the cancellation of the appointment.

        We understand the importance of this booking and sincerely regret any inconvenience this cancellation may have caused you. We value your understanding and cooperation in this matter.

        If you would like to reschedule the appointment or if there's anything else we can assist you with, please don't hesitate to reach out to us. We are more than willing to accommodate your needs and preferences.

</pre>
<br>
<br>
<p>Thank you for your understanding.</p>
</body>
</html>
