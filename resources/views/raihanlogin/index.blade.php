@extends('layouts/main')
<style>
b{
    color: white;
}
/* Bordered form */

form {
   border: 3px solid #f1f1f1;
 }
 
 /* Full-width inputs */
 input[type=text], input[type=password] {
   width: 100%;
   padding: 12px 20px;
   margin: 8px 0;
   display: inline-block;
   border: 1px solid #ccc;
   box-sizing: border-box;
 }
 
 /* Set a style for all buttons */
 button {
   background-color:  #b6372e;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 100%;
 }
 
 /* Add a hover effect for buttons */
 button:hover {
   opacity: 0.8;
 }
 
 /* Extra style for the cancel button (red) */
 .cancelbtn {
   width: auto;
   padding: 10px 18px;
   background-color: #f44336;
 }
 
 /* Center the avatar image inside this container */
 .imgcontainer {
   text-align: center;
   margin: 24px 0 12px 0;
 }
 
 /* Avatar image */
 img.avatar {
   width: 40%;
   border-radius: 50%;
 }
 
 /* Add padding to containers */
 .container {
   padding: 16px;
 }

 
 /* The "Forgot password" text */
 span.psw {
   float: right;
   padding-top: 16px;
 }
 
 /* Change styles for span and cancel button on extra small screens */
 @media screen and (max-width: 300px) {
   span.psw {
     display: block;
     float: none;
   }
   .cancelbtn {
     width: 100%;
   }
 }

 /* The alert message box */
.alert {
  padding: 20px;
  background-color: #00f335; /* Red */
  color: rgb(0, 0, 0);
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}

</style>

@section('tampilan') 
<form action="/raihanlogin" method="POST">
    @csrf
@if (session()->has('success'))
<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    Registrasi Berhasil.
  </div>
    
@endif
  
    <div class="container">
      <label for="name"><b>Username</b></label>
      <input value = "{{ old('name') }}" type="text" placeholder="Enter Username" name="name" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  
      <button type="submit">Login</button>
    </div>
  
    <div class="container" style="background-color:#ffffff">      
      <span class="psw">Don't have an account?<a href="/registrasi"> Register</a></span>
    </div>
  </form>
@endsection