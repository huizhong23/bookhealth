<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/main.css" rel="stylesheet" />
</head>

<body>
    <form action="{{route('register-user')}}" method="post">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        <div class="container">

        <label for="name">Name</label>
        <input type="text" placeholder="Enter Name" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>

        <label for="psw-confirm">Confirm Password</label>
        <input type="password" placeholder="Enter Password" name="psw-confirm" id="psw-confirm" required>

        <button type="submit" class="registerbtn" style="text-align:center"><b>Sign Up</b></button>

        <p style="text-align:center">Already have an account? <a href="login">Sign in</a> </p>
        

    </form>
</body>
</html>