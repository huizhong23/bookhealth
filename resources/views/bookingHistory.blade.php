<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/page.css" rel="stylesheet" />
<link href="css/profile.css" rel="stylesheet"/>
<link href="css/table.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
 
    <div class="topnav">
    <img class="imglogo" src="img/bookhealthlogo.png" alt="logo">
    <a class="button" href="bookingAppointment" style="color: white">Book Now</a>
    </div>
    
    <div class="sidenav">
    <a class="buttonside" href="homepage">Home</a>
    <a class="buttonside" href="#myprofile">My Profile</a>
    <a class="buttonside" href="#healthdeclaration">Health Declaration</a>
    <a class="buttonside" href="serviceschedule">Service Schedule</a>    
    <a class="buttonside" href="bookingAppointment">Book Now</a>
    <a class="buttonside" href="#bookinghistory.html">Booking History</a>
    <a class="buttonside" href="healthinfo">Health Information</a>
    <a class="buttonside" href="login">Log Out</a>
    </div>
    <br>
    <div class="content">
        <br><br><br>
        <form method="get" action="{{route('bookingHistory')}}">
        <h2>Book History</h2>
        <p>
           <table>
               <tr>
                   <th>Appointment</th>
                   <th>Date</th>
                   <th>Time</th>
                   <th>Confirmation</th>
                   <th>Action</th>
               </tr>
               @foreach ($booking as $book)
               <tr>
                   <td>{{ $book['typeAppointment'] }}</td>
                   <td>{{ $book['date'] }}</td>
                   <td>{{ $book['time'] }}</td>
                   <td><a href="/bookingAppointmentConfirmed/{{ $book['id'] }}">View Booking Confirmation</a></td>
                   <td class="btn"><a href="/delete/{{ $book['id'] }}"><i class="fa fa-trash"></i>Delete</a></td>
               </tr>
               @endforeach
           </table>
        </p>
    </div>
    
    </body>
    </html>
    