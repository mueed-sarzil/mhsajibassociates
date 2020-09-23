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
  background-color:purple;
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
.btn2 {
  background-color: red;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 11px;
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
      <h1 style="color:black"><i>Employee-Information</i></h1>
  </div>
  <form>
  <table id="customers">
  
  <tr>
    <th>Name</th>
    <th>Designation</th>
    <th>Education/Degree</th>
    <th>Picture</th>
    <th >Action</th>
  </tr>
  @foreach($users as $acc)
  <tr>
    <td>{{$acc['name']}}</td>
    <td>{{$acc['des']}}</td>
    <td>{{$acc['edu']}}</td>
    <td><img src="{{asset($acc->img)}}" alt="" width="100" height="100"></td>
     <td>
      <a class="btn" href="{{route('admin.edit_emp', $acc['id'])}} "><i class="fa fa-edit">Edit</i></a>
     </td>
  </tr>
   @endforeach
  </table>
<div class="container" align="center">
      <h1 style="color:blue;"><i>About-Information</i></h1>
  </div>
  <table id="customers" align="center">
  
  <tr>
    <th>About</th>
    <th >Action</th>
  </tr>
  @foreach($admins as $acc)
  <tr>
    <td>{{$acc['about']}}</td>
    <!-- <td><input type="submit" name="" value="Edit"></td> -->
    <td>
      <a class="btn" href="{{route('admin.edit_about', $acc['id'])}}"><i class="fa fa-edit">Edit</i></a>
     </td>
  </tr>
   @endforeach
  </table>

<div class="container" align="center">
      <h1 style="color:blue;"><i>Contact-Information</i></h1>
  </div>
  <form>
  <table id="customers">
  
  <tr>
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    <th >Action</th>
  </tr>
  @foreach($contacts as $acc)
  <tr>
    <td>{{$acc['address']}}</td>
    <td>{{$acc['email']}}</td>
    <td>{{$acc['mobile']}}</td>
     <td>
      <a class="btn" href="{{route('admin.edit_contact', $acc['id'])}}"><i class="fa fa-edit">Edit</i></a>
     </td>
  </tr>
   @endforeach
  </table>
  <div class="container" align="center">
      <h1 style="color:blue;"><i>Service-Information</i></h1>
  </div>
  <form>
  <table id="customers">
  
  <tr>
    <th>Head Line</th>
    <th>Details</th>
    <th colspan="2">Action</th>
  </tr>
  @foreach($services as $acc)
  <tr>
    <td>{{$acc['head']}}</td>
    <td>{{$acc['details']}}</td>
     <td>
      <a class="btn" href="{{route('admin.edit_service', $acc['id'])}}"><i class="fa fa-edit">Edit</i></a>
     </td>
    <td>
      <a class="btn1" href="{{route('admin.delete_service', $acc['id'])}}"><i class="fa fa-trash">Delete</i></a>
    </td>
  </tr>
   @endforeach
  </table>
</form>
<div class="container" align="center">
      <h1 style="color:blue;"><i>Motto-Information</i></h1>
  </div>
  <form>
  <table id="customers">
  
  <tr>
    <th>Motto</th>
    <th>Sologan</th>
    <th >Action</th>
  </tr>
  @foreach($mottoes as $acc)
  <tr>
    <td>{{$acc['motto']}}</td>
    <td>{{$acc['sol']}}</td>
     <td>
      <a class="btn" href="{{route('admin.edit_motto', $acc['id'])}}"><i class="fa fa-edit">Edit</i></a>
     </td>
  </tr>
   @endforeach
  </table>
  <div class="container" align="center">
      <h1 style="color:blue;"><i>Company-Information</i></h1>
  </div>
  <form>
  <table id="customers">
  
  <tr>
    <th>Project</th>
    <th>Customer</th>
    <th>Awwards</th>
    <th>Years Of Experience</th>
    <th >Action</th>
  </tr>
  @foreach($events as $acc)
  <tr>
    <td>{{$acc['pro']}}</td>
    <td>{{$acc['cus']}}</td>
    <td>{{$acc['aww']}}</td>
    <td>{{$acc['exp']}}</td>
     <td>
      <a class="btn" href="{{route('admin.edit_information', $acc['id'])}}"><i class="fa fa-edit">Edit</i></a>
     </td>
  </tr>
   @endforeach
  </table>
</form>
<div class="container" align="center">
      <h1 style="color:blue;"><i>Review-Information</i></h1>
  </div>
  <form method="post">
  <table id="customers">
  
  <tr>
    <th>Name</th>
    <th>Review</th>
  </tr>
  @foreach($reviews as $acc)
  <tr>
    <td>{{$acc['name']}}</td>
    <td>{{$acc['msg']}}</td>
  </tr>
   @endforeach
  </table>
</form>
</form>
</body>
</html>


