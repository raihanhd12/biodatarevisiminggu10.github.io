@extends('layouts/main')

@section('tampilan')

   <!-- Comment Section
   ================================================== -->
   <section id="contact">

<div class="row section-head">

   <div class="two columns header-col">

      <h1><span>Get In Touch.</span></h1>

   </div>

   <div class="ten columns">

         <p class="lead">Silahkan beri komentar tentang saya, Boleh tentang website
            ataupun pendapat kalian tentang saya.
         </p>

   </div>

</div>

<div class="row">

   <div class="eight columns">

      <!-- form -->
      <form action="" method="post" id="contactForm" name="contactForm">
           <fieldset>

         <div>
                  <label for="contactName">Nama <span class="required">*</span></label>
                  <input type="text" value="" size="35" id="contactName" name="contactName">
         </div>

         <div>
                  <label for="contactEmail">Email <span class="required">*</span></label>
                  <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
         </div>

         <div>
            <label for="contactMessage">Pesan <span class="required">*</span></label>
            <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
         </div>

         <div>
            <button class="submit">Submit</button>
            <span id="image-loader">
               <img alt="" src="images/loader.gif">
            </span>
         </div>

           </fieldset>
          </form> <!-- Form End -->

      <!-- contact-warning -->
      <div id="message-warning"> Error boy</div>
      <!-- contact-success -->
          <div id="message-success">
         <i class="fa fa-check"></i>Your message was sent, thank you!<br>
          </div>

   </div>


   <aside class="four columns footer-widgets">

      <div class="widget widget_contact">

              <h4>Contact Saya</h4>
               <p class="address">
                  <span>{{ $nama }}</span><br>
                  <span>{{ $alamat}}
            </span><br>
                  <span>{{ $noTelp }}</span><br>
            <span>{{ $email }}</span>
            </p>
          </div>

      <div class="widget widget_tweets">

         <h4 class="widget-title">Quote Yang Disukai</h4>

         <ul id="twitter">
            <li>
               <span>
               "Semesta sengaja membuatmu jatuh bukan karena ingn mendegarmu mengeluh.
                Semesta hanya ingin kamu belajar bagaimana bangkit dari rasa sakit."
               <a href="https://bit.ly/3hHEpe7">https://bit.ly/3hHEpe7</a>
               </span>               
            </li>
            <li>
               <span>
               "Umur membuat tubuh kita menua, gak punya tujuan membuat jiwa kita menua."
               <a href="https://bit.ly/3hMpzmq">https://bit.ly/3hMpzmq</a>
               </span>               
            </li>
            <li>
               <span>
               “Segala sesuatu memiliki kesudahan, 
               yang sudah berakhir biarlah berlalu dan yakinlah semua akan baik-baik saja.”
               <a href="https://bit.ly/3Ke2nd8">https://bit.ly/3Ke2nd8</a>
               </span>               
            </li>
         </ul>
        </div>
   </aside>
</div>
</section> <!-- Comment Section End-->
    
@endsection