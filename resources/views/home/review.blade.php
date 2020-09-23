<!DOCTYPE html>
<html>
<head>
  <title>Review|M.H.Sajib & Associates</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.open-button {
  background-color: #555;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 25px;
  border: 30px solid lightgray;
  z-index: 15;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding: 20px;
  background-color: white;
}
.form-container textarea {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
 textarea:focus {
  background-color: lightgray;
  outline: none;
}





.container {
  padding: 12px;
}

.btn2 {
  background-color: blue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn4 {
  background-color: green;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn3 {
  background-color: red;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}

input[type=text]:focus {
  background-color: lightgray;
}
</style>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</head>
<body>

  <div align="center">
    <img src="/images/pad.jpg" height="100" width="100">
    <div align="center"><h1><b>M.H.Sajib Associates</b></h1>
      <span><b><i>We give you better ideas</i></b></span>
    </div>
  </div>

  <button class="open-button" onclick="openForm()">Review</button>

<div class="chat-popup" id="myForm">
  <form method="post" class="form-container">
    {{ csrf_field() }}
    <h1 style="color: blue;" align="center">Review</h1>
     <label for="msg"><b>Name:</b></label>
    <input type="text" name="name" placeholder="Type your name.." required=""><br/><br/>

    <label for="msg"><b>Message:</b></label><br/><br/>
    <textarea rows="3" cols="20" placeholder="Type message.." name="msg"  required></textarea><br/><br/>

    <button type="submit" class="btn4"><i class="fa fa-send"></i>Send</button>
    <button type="button" class="btn3" onclick="closeForm()"><i class="fa fa-close"></i>Close</button>
  </form>
</div>




  <div class="container" style="background-color:#f1f1f1">
    <a class="btn2" href="{{route('home.index')}}"><i class="fa fa-home"></i>Home</a>
   
  </div>
<div>
  
  <img src="/images/review.jpg" height="350" width="1350">
</div>
</body>
</html>
