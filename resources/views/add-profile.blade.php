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
        @if(Session::has('profile_add'))
        <span style="color = white">{{Session::get('profile_add')}}</span>
        @endif
        <p>
            <div class="container">
                <form method="post" action="{{route('save.profile')}}">
                    @csrf
                    <!--<div class="row">
                    <div class="col-A">
                      <label for="id">ID</label>
                    </div>
                    <div class="col-B">
                      <input type="text" id="id" name="id">
                    </div>
                  </div> -->
                    <div class="row">
                    <div class="col-A">
                      <label for="fullname">Full Name</label>
                    </div>
                    <div class="col-B">
                      <input type="text" id="fullname" name="fullname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="icnum">IC / Passport Number</label>
                    </div>
                    <div class="col-B">
                      <input type="text" id="icnum" name="icnum">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="contact">Contact Number</label>
                    </div>
                    <div class="col-B">
                      <input type="tel" id="contact" name="contact">
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-A">
                      <label for="contact">Emergency Contact Number</label>
                    </div>
                    <div class="col-B">
                      <input type="tel" id="emercontact" name="emercontact">
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-A">
                      <label for="email">Email Address</label>
                    </div>
                    <div class="col-B">
                      <input type="email" id="email" name="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="homeadd">Home Address</label>
                    </div>
                    <div class="col-B">
                      <textarea id="homeadd" name="homeadd" style="height:70px"></textarea>
                    </div>
                  </div>
                    <button class="savebtn" type="submit">Save</button>
                    <a href = "myprofile/{id}" ><button class="editbtn" type="display">Display profile</button></a>
                </form>
                
            </div>    
        </p>
    </div>
    
    </body>
    </html>
    