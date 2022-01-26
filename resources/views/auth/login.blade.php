<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/main.css" rel="stylesheet" />
</head>

<body style="padding-top: 60px;">
    <form action="{{route('login-user')}}" method="post">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        <div class="container" >

        <label for="name">Email or Username</label>
        <input type="text" placeholder="Enter Email or Username" name="email" id="email" required>

        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>

        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            <span class="psw"><a href="#">Forgot password?</a></span>
        </label>
        <br><br>
        <button type="submit" class="loginbtn" style="text-align:center"><b>Log In</b></button>
      

        <p style="text-align:center">Don't have an account? <a href="registration">Sign up</a> </p>
        
    </form>
</body>
</html>