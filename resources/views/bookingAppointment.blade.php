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
    <a class="button" href="bookingAppointment" style="color: white">Book Now</a>
</div>

<div class="sidenav">
    <a class="buttonside" href="homepage">Home</a>
    <a class="buttonside" href="myprofile">My Profile</a>
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
        <h2>Book Now</h2>
        <p>
    
      <form action="{{route('bookingAppointment_detail')}}" method="post"> 
            <div class="container">
                
                  <div class="row">
                    <div class="col-A">
                    
                      @csrf  
                      <label for="typeAppointment">Type of Appointment</label>
                    </div>
                    <div class="col-Bb">
                      <select for="typeAppointment" id="typeAppointment" name="typeAppointment" value="{{ old('typeAppointment') }}">
                        <option value="GENERAL MEDIC">General Medicine</option>
                        <option value="DENTAL">Dental</option>
                        <option value="PHYSIOTHERAPY">Physiotherapy</option>
                        <option value="HEMODIALYSIS">Hemodialysis</option>
                        <option value="MEDICAL EXAMINATION">Medical Examination</option>
                        <option value="PHARMACY">Pharmacy</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="date">Date</label>
                    </div>
                    <div class="col-B">
                      <input type="date" id="date" name="date" value="{{ old('date') }}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="time">Time</label>
                    </div>
                    <div class="col-B">
                      <input type="time" id="time" name="time" value="{{ old('time') }}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="assistance">Do you need assistance?</label>
                    </div>
                    <div class="col-B">
                      <select for="assistance" id="assistance" name="assistance" value="{{ old('assistance') }}">
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-A">
                      <label for="remarks">Remarks</label>
                    </div>
                    <div class="col-B">
                        <textarea for="remarks" id="remarks" name="remarks" value="{{ old('remarks') }}" style="height:100px"></textarea>
                    </div>
                  </div>
                </form>
                <!-- <button class="savebtn" type="submit">Save</button> -->
                <button class="savebtn" type="submit">Save</button>
                @if(Session::has('bookingAppointment_detail'))
                        <div class="alert alert-success">{{Session::get('bookingAppointment_detail')}}</div>
                @endif
            </div>  
        </form> 
        <a href="/bookingHistory"><p>Display Booking History</p></a>
        </p>
    </div>
    
    </body>
    </html>
    