<!DOCTYPE html>
<html>
<head>
    <title>Reservation Confirmation</title>
</head>
<body>
    <p>Hello {{ $user->FullName }},</p>
    <p>Your reservation for the event "{{ $user->Name }}" has been confirmed.</p>
    <p>No of Tickets "{{ $user->NumberofTickets }}"</p>
    <p>Total Price "{{ $user->TotalPrice }}"</p>
    <p>Regards,</br>E-Ticket</p>

</body>
</html>