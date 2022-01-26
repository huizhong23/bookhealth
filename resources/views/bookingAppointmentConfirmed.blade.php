<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/page.css" rel="stylesheet" />
<link href="../css/profile.css" rel="stylesheet" />
</head>

<body>
 
    <div class="topnav">
    <img class="imglogo" src="../img/bookhealthlogo.png" alt="logo">
    <a class="button" href="bookingAppointment" style="color: white">Book Now</a>
    </div>
    
    <div class="sidenav">
    <a class="buttonside" href="/homepage">Home</a>
    <a class="buttonside" href="myprofile">My Profile</a>
    <a class="buttonside" href="#healthdeclaration">Health Declaration</a>
    <a class="buttonside" href="/serviceschedule">Service Schedule</a>    
    <a class="buttonside" href="/bookingAppointment">Book Now</a>
    <a class="buttonside" href="/bookingHistory">Booking History</a>
    <a class="buttonside" href="/healthinfo">Health Information</a>
    <a class="buttonside" href="/login">Log Out</a>
    </div>
    <br>
    <div class="content">
        <br><br><br>
        <h1>Your booking appointment has been confirmed!</h1>
        <p style="font-size: 16pt;">Booking Number: <b>AD00</b>{{$booking_appointments['id']}}</b></p> 
        <p>Please check your email.
            <br><br>
            Please show this QR code when arrived for registration.
            <br><br>
        <a href="{{ route('generate', $booking_appointments->id) }}">Generate Qr Code</a>
        {{--<img src="../img/qrcode.png" alt="pic"> --}}
        </p>
    </div>

    <a href="/bookingAppointment"><button class="savebtn" type="submit">Book Again</button><a>
    <button class="editbtn" type="edit">Edit</button>
    
    </body>
    </html>
    