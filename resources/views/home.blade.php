<!DOCTYPE html>
<html class="no-js" lang="en">
<body>
   @include('partials.navi')
   <!-- Header
   ================================================== -->
   
   <header id="home">
      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">{{ $nama }}</h1>            
            <h3><a class="smoothscroll" href="#about"><br><br><a class="ganti">~ {{ $quote }} ~</a></br></br></a></h3>
            <hr />
            <ul class="social">
               <li><a href="https://www.facebook.com/RaihanHidayatullahD"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>              
               <li><a href="https://www.linkedin.com/in/raihan-d-320a1412a/"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://www.instagram.com/raaihan.n/"><i class="fa fa-instagram"></i></a></li>
            </ul>
         </div>
      </div>
   </header> <!-- Header End -->
</body>
</html>