<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/page.css" rel="stylesheet" />
<link href="css/profile.css" rel="stylesheet"/>
<link href="css/table2.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
 
    <div class="topnav">
        <img class="imglogo" src="img/bookhealthlogo.png" alt="logo">
        <a class="button" href="book.html" style="color: white">Book Now</a>
    </div>
    
    <div class="sidenav">
        <a class="buttonside" href="homepage">Home</a>
        <a class="buttonside" href="add-profile">My Profile</a>
        <a class="buttonside" href="#healthdeclaration">Health Declaration</a>
        <a class="buttonside" href="serviceschedule">Service Schedule</a>    
        <a class="buttonside" href="bookingAppointment">Book Now</a>
        <a class="buttonside" href="bookingHistory">Booking History</a>
        <a class="buttonside" href="healthinfo">Health Information</a>
        <a class="buttonside" href="login">Log Out</a>
    </div>
    <br>
    <div class="content">
        <br><br><br>
        <h2>Service Schedule</h2>
        <form>
            <div class="row">
              <div class="col-E">
                <label for="typeappoint">Type of Appointment : </label>
              </div>
              <div class="col-Ff">
                <select id="typeappoint" name="typeappoint">
                    <option value="generalmedic">General Medicine</option>
                    <option value="dental">Dental</option>
                    <option value="physiotherapy">Physiotherapy</option>
                    <option value="hemodialysis">Hemodialysis</option>
                    <option value="medicalexam">Medical Examination</option>
                    <option value="pharmacy">Pharmacy</option>
                </select>
              </div>
            </div> 
            <div class="row">
              <div class="col-E">
                <label for="date">Date : </label>
              </div>
              <div class="col-F">
                <input type="date" id="date" name="date">
              </div>
            </div>
        </form>      
        <p>
           <table>
               <tr>
                   <th>Time Start</th>
                   <th>Time End</th>
                   <th>Available</th>
                   <th>Unavailable</th>
               </tr>
               <tr>
                   <td>08.00 AM</td>
                   <td>08.30 AM</td>
                   <td><img src="img/righticon.png" width="20px"></td>
                   <td></td>
               </tr>
               <tr>
                   <td>08.30 AM</td>
                   <td>09.00 AM</td>
                   <td><img src="img/righticon.png" width="20px"></td>
                   <td></td>
               </tr>
               <tr>
                   <td>09.00 AM</td>
                   <td>09.30 AM</td>
                   <td></td>
                   <td><img src="img/cancelicon.png" width="20px"></td>
               </tr>
               <tr>
                   <td>09.30 AM</td>
                   <td>10.00 AM</td>
                   <td></td>
                   <td><img src="img/cancelicon.png" width="20px"></td>
               </tr>
               <tr>
                <td>10.00 AM</td>
                <td>10.30 AM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>10.30 AM</td>
                <td>11.00 AM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>11.00 AM</td>
                <td>11.30 AM</td>
                <td></td>
                <td><img src="img/cancelicon.png" width="20px"></td>
            </tr>
            <tr>
                <td>11.30 AM</td>
                <td>12.00 PM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>12.00 PM</td>
                <td>12.30 PM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>12.30 PM</td>
                <td>01.00 PM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>               <tr>
                <td>02.00 PM</td>
                <td>02.30 PM</td>
                <td></td>
                <td><img src="img/cancelicon.png" width="20px"></td>
            </tr>
            <tr>
                <td>02.30 PM</td>
                <td>03.00 PM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>03.00 PM</td>
                <td>03.30 PM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>03.30 PM</td>
                <td>04.00 PM</td>
                <td></td>
                <td><img src="img/cancelicon.png" width="20px"></td>
            </tr>
            <tr>
                <td>04.00 PM</td>
                <td>04.30 PM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>04.30 PM</td>
                <td>05.00 PM</td>
                <td><img src="img/righticon.png" width="20px"></td>
                <td></td>
            </tr>

                
           </table>
        </p>
    </div>
    
    </body>
    </html>
    