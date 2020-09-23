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
  background-color:green;
  color: white;
}

.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn1 {
  background-color: red;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
/*.btn:hover {
  background-color: RoyalBlue;
}*/

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
    <li><a href="#">Employee</a></li>
    <li><a href="{{route('admin.info')}}">Data-Information</a></li>
    <li><a href="{{route('admin.contact')}}">Contact</a></li>
    <li><a href="{{route('admin.about')}}">About</a></li>
    <li><a href="{{route('admin.service')}}">Services</a></li>
    <li><a href="{{route('admin.motto')}}">Motto</a></li> 
    <li><a href="{{route('admin.information')}}">Information</a></li> 
    <li><a href="#">Quote</a></li> 
    <li><a href="{{route('admin.review')}}">Review</a></li>  
    <li><a href="{{route('logout.index')}}">Logout</a></li>
  </ul>
</nav>

<div class="container" align="center">
      <h1 style="color:blue;"><i>Review-Information</i></h1>
  </div>
  <div class="container" align="center">
      <h1 style="color:blue;"><i>Service-Information</i></h1>
  </div>
  <form>
  <table id="customers">
  
  <tr>
    <th>Name</th>
    <th>Review</th>
    <th >Action</th>
  </tr>
  @foreach($reviews as $acc)
  <tr>
    <td>{{$acc['name']}}</td>
    <td>{{$acc['msg']}}</td>
    <td>
      <a class="btn1" href=""><i class="fa fa-trash">Delete</i></a>
    </td>
  </tr>
   @endforeach
  </table>
</form>
</form>
</body>
</html>


