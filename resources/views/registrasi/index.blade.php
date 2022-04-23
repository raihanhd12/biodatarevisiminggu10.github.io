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
    
</style>

@section('tampilan')
<form action="/registrasi" method="POST" style="border:1px solid #ccc">
    @csrf
    <div class="container">
      <h1 style="color: #f1f1f1">Sign Up</h1>
      <p>Silahkan Isi Form Dibawah.</p>
      <hr>
      
      <label for="name"><b>Username</b></label>      
      <input type="text" placeholder="Username" name="name" value = "{{ old('name') }}" required>
      @error('name')
          <div class="error"> Minimal 5 huruf</div>
      @enderror

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" value = "{{ old('email') }}" required>
      @error('email')
      <div class="error"> Minimal 2 huruf</div>
      @enderror     
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>  
      @error('password')
      <div class="error"> Minimal 2 huruf</div>
      @enderror
     
  
      <div class="clearfix">        
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
    
@endsection