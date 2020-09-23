<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin|M.H.SAjib  Associates</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
body {
  margin: 0;
  background-color: lightgray;
}


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.label-txt {
position: absolute;
top: -1.6em;
padding: 10}
form {
width: 60%;
margin: 60px auto;
background: #efefef;
padding: 60px 120px 80px 120px;
text-align: center;
-webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
display: block;
position: relative;
margin: 40px 0px;
px;
font-family: sans-serif;
font-size: .8em;
letter-spacing: 1px;
color: rgb(120,120,120);
transition: ease .3s;
}
.input {
width: 100%;
padding: 10px;
background: transparent;
border: none;
outline: none;
}

.line-box {
position: relative;
width: 100%;
height: 2px;
background: #BCBCBC;
}

.line {
position: absolute;
width: 0%;
height: 2px;
top: 0px;
left: 50%;
transform: translateX(-50%);
background: #8BC34A;
transition: ease .6s;
}

.input:focus + .line-box .line {
width: 100%;
}

.label-active {
top: -3em;
}

button {
display: inline-block;
padding: 12px 24px;
background: rgb(220,220,220);
font-weight: bold;
color: rgb(120,120,120);
border: none;
outline: none;
border-radius: 3px;
cursor: pointer;
transition: ease .3s;
}

button:hover {
background: #8BC34A;
color: #ffffff;
}

</style>
<body>
 
<div align="center">
  <img src="/images/logo.jpg" width="20%" height="50%"><br/>
  <span><b><i>We give you better ideas</i></b></span>
</div>
<div>
  <span style="color:blue;">Welcome to {{Session::get('username')}}</span>
</div>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="{{route('admin.index')}}">Profile</a></li>
    <li><a href="#">Employee</a></li>
    <li><a href="{{route('admin.info')}}">Data-Information</a></li>
    <li><a href="{{route('admin.contact')}}">Contact</a></li>
    <li><a href="{{route('admin.about')}}">About</a></li>
    <li><a href="{{route('admin.service')}}">Services</a></li>
    <li><a href="{{route('admin.motto')}}">Motto</a></li> 
    <li><a href="{{route('admin.information')}}">Information</a></li> 
    <li><a href="#">Quote</a></li> 
    <li><a href="#">Review</a></li>  
    <li><a href="{{route('logout.index')}}">Logout</a></li>
  </ul>
</nav>

<div class="container" align="center">
      <h1 style="color:blue;"><i>Motto-Information</i></h1>
  </div>
  
   <form method="post">
{{ csrf_field() }}
  <label>
    <p class="label-txt">Enter Your Company Motto</p>
    <input type="text" name="motto" class="input" required="" value="{{$acc['motto']}}">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Your Sologan</p>
    <input type="text" name="sol" class="input" required="" value="{{$acc['sol']}}">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
   <button type="submit">submit</button><br/>
</form>

</body>
</html>


