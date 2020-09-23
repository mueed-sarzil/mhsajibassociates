<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin|M.H.SAjib  Associates</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
  margin: 0;
  background-color: lightgray;
}


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;

}

#customers td, #customers th {
  border: 1px solid gray;
  padding: 20px;
}
#customers tr:nth-child(odd){background-color: gray;

color: white;
}

#customers tr:hover{background-color: purple;
color: white;
}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.button2 {
  background-color: blue;
  border: none;
  color: white;
  padding: 10px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 60px;
  font-size: 16px;
  cursor: pointer;
}
</style>
<body>
  <form method="post">
{{ csrf_field() }}
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
    <li><a href="{{route('admin.emp')}}">Employee</a></li>
     <li><a href="{{route('admin.info')}}">Data-Information</a></li>
    <li><a href="{{route('admin.contact')}}">Contact</a></li>
    <li><a href="{{route('admin.about')}}">About</a></li>
    <li><a href="{{route('admin.service')}}">Services</a></li>
    <li><a href="{{route('admin.motto')}}">Motto</a></li> 
    <li><a href="{{route('admin.information')}}">Information</a></li>  
    <li><a href="{{route('logout.index')}}">Logout</a></li>
  </ul>
</nav>

<div class="container" align="center">
      <h1 style="color:blue;"><i>My-Profile</i></h1>
  </div>
  <table id="customers" align="center">
      @foreach($profiles as $acc)
    <tr>
      <td>
        <h3>Name: <b>{{$acc['name']}}</b></h3>
      </td>
    </tr>
    <tr>
      <td>
        <h3>User-Name:<b> {{$acc['username']}}</b></h3>
      </td>
    </tr>
    <tr>
      <td>
       <h3> Password:<b> {{$acc['password']}}</b></h3>
      </td>
    </tr>
     @endforeach
  </table><br/>
  <div align="center"> 
    <a class="btn" href="{{route('admin.edit_profile', $acc['id'])}}"><i class="fa fa-edit">Edit</i></a>
  </div>
</form>
</body>
</html>


