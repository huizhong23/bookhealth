<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/page.css" rel="stylesheet" />
<link href="css/profile.css" rel="stylesheet"/>
</head>

<body>
 
    <div class="topnav">
        <img class="imglogo" src="img/bookhealthlogo.png" alt="logo">
        <a class="button" href="#booknow" style="color: white">Book Now</a>
    </div>

    
    <div class="sidenav">
        <a class="buttonside" href="homepage">Home</a>
        <a class="buttonside" href="#myprofile">My Profile</a>
        <a class="buttonside" href="#healthdeclaration">Health Declaration</a>
        <a class="buttonside" href="serviceschedule">Service Schedule</a>
        <a class="buttonside" href="#booknow">Book Now</a>
        <a class="buttonside" href="#bookinghistory">Booking History</a>
        <a class="buttonside" href="healthinfo">Health Information</a>
        <a class="buttonside" href="login">Log Out</a>
    
      </div>
    <br>
    <div class="content">
        <br><br><br><br>
        <h2>My Profile</h2>
        <p>
            <div class="container">
                <form method="" action="">
                    <div class="row">
                        <div class="col-A">
                        <label for="id">ID</label>
                        </div>
                        <div class="col-B">
                            <p>{{$data->id}}</p>
                        <!-- <input type="text" id="fullname" name="fullname"> -->
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-A">
                      <label for="fullname">Full Name</label>
                    </div>
                    <div class="col-B">
                        <p>{{$data->fullname}}</p>
                      <!-- <input type="text" id="fullname" name="fullname"> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="icnum">IC / Passport Number</label>
                    </div>
                    <div class="col-B">
                        <p>{{$data->icnum}}</p>
                      <!-- <input type="text" id="icnum" name="icnum"> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="contact">Contact Number</label>
                    </div>
                    <div class="col-B">
                        <p>{{$data->contact}}</p>
                      <!-- <input type="tel" id="contact" name="contact"> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="email">Email Address</label>
                    </div>
                    <div class="col-B">
                        <p>{{$data->email}}</p>
                      <!-- <input type="email" id="email" name="email"> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="homeadd">Home Address</label>
                    </div>
                    <div class="col-B">
                        <p>{{$data->homeadd}}</p>
                      <!-- <textarea id="homeadd" name="homeadd" style="height:70px"></textarea> -->
                    </div>
                  </div>
                    <!-- <a href = "myprofile" ><button class="savebtn" type="submit">Save</button></a> -->
                    <!-- <button class="editbtn" type="edit">Edit</button> -->
                </form>
                
            </div>    
        </p>
    </div>
    
    </body>
    </html>
    