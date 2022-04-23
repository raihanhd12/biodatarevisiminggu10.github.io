<!-- File CSS
================================================== -->
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/media-queries.css">  
 

<nav id="nav-item">
    <ul id="nav" class="nav">
        <li class=" {{ Request::is('home') ? 'current' : '' }}">
            <a href="/home">Home</a></li>
        <li class=" {{ Request::is('about') ? 'current' : '' }}">
            <a href="about">About</a></li>
        <li class=" {{ Request::is('comment') ? 'current' : '' }}">
            <a href="comment">Comment</a></li>   
        <li class=" {{ Request::is('coba') ? 'current' : '' }}">
            <a href="coba">Coba</a></li>      
        @auth 
        <form action="/raihanlogout" method="POST">
        @csrf
            <button type="submit" style="background-color: rgb(109, 38, 38)">Logout</button>
        </form>
        @else
        <li class=" {{ Request::is('raihanlogin') ? 'current' : '' }} {{ Request::is('raihanregister') ? 'current' : '' }} {{ Request::is('registrasi') ? 'current' : '' }}">
            <a href="raihanlogin">Login</a></li>  
        @endauth     
           
                         
    </ul> <!-- end #nav -->

</nav> <!-- end #nav-wrap -->

<!-- Java Script
================================================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/waypoints.js"></script>    
<script src="js/init.js"></script>
