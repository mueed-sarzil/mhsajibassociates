<!DOCTYPE html>
<html>
<head>
  <title>Login|M.H.Sajib Associates</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 10px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 10px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 50%;
  }
}
.btn {
  background-color: red;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn1 {
  background-color: blue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
</style>
</head>
<body>


<form method="post">
{{ csrf_field() }}
  <div class="imgcontainer">
    <img src="/images/pad.jpg" height="220" width="10" alt="Avatar" class="avatar">
    <div align="center"><h1><b>M.H.Sajib Associates</b></h1>
      <span><b><i>We give you better ideas</i></b></span>
    </div>
  </div>

  <div align="center"class="container">
    <label for="uname"><b>User-name:</b></label>
    <input type="text" placeholder="Username......" name="uname" required=""><br>

    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Password......" name="psw" required=""><br>

    <button class="btn1" type="submit"><i class="fa fa-sign-in"></i>Login</button><br/>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a class="btn" href="{{route('home.index')}}"><i class="fa fa-close"></i>Close</a>
   
  </div>
</form>

</body>
</html>
