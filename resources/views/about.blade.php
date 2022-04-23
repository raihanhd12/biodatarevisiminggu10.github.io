@extends('layouts/main')

@section('tampilan')    

    <!-- About Section
   ================================================== -->
   <section id="about">

<div class="row">

   <div class="three columns">

      <img class="profile-pic"  src="images/raihan4.jpg" alt="" />

   </div>

   <div class="nine columns main-col">

      <h2>About Me</h2>

      <p>Perkenalkan saya {{ $nama }}. Biasa dipanggil {{ $namaPanggilan }}, Seseorang yang suka {{ $hobi }}.
      Mahasiswa Teknologi Informasi yang antusias dan bermotivasi tinggi untuk mencapai cita - citanya.
      </p>

      <div class="row">

         <div class="columns contact-details">

            <h2>Contact</h2>
            <p class="address">
                     <span>{{ $nama }}</span><br>
                     <span>{{ $alamat}}
               </span><br>
                     <span>{{ $noTelp }}</span><br>
               <span>{{ $email }}</span>
                 </p>

         </div>

         <div class="columns download">
            <p>
               <a href="selengkapnya" class="button"></i>Selengkapnya</a>
            </p>
         </div>

      </div> <!-- end row -->

   </div> <!-- end .main-col -->

</div>

</section> <!-- About Section End-->

<!-- Resume Section
================================================== -->
<section id="resume">

<!-- Education
----------------------------------------------- -->
<div class="row education">

   <div class="three columns header-col">
      <h1><span>Education</span></h1>
   </div>

   <div class="nine columns main-col">

      <div class="row item">

         <div class="twelve columns">

            <h3>TK PEPITO KIDS SCHOOL</h3>
            <p class="info">Playgroup - TK<span>&bull;</span> <em class="date">2006 - 2008</em></p>

            <p>
            TK PEPITO KIDS SCHOOL Kab. Bekasi merupakan salah satu pilihan sekolah tk yang ada di Kab. Bekasi.
            Alamat di Jl. Azalea Raya Ruko Melawai Blok A-26 Taman Lembah Hijau Serang Kec. Cikarang Selatan Kab. Bekasi Prov. Jawa Barat.
            Dikarenakan saya saat itu tinggal di Lembah Hijau maka saya Playgroup sampai TK di TK Pepito tersebut dikarenakan dekat dari rumah.                  
            </p>

         </div>

      </div> <!-- item end -->

      <div class="row item">

         <div class="twelve columns">

            <h3>SD Karya Iman</h3>
            <p class="info">Kelas 1 - 6<span>&bull;</span> <em class="date">2009 - 2014</em></p>

            <p>
            Saya menempuh pendidikan Sekolah Dasar di SD Karya Iman yang beralamat di Jln Cemara Raya Meadow Green, Lippo Cikarang.
            Dikarenakan kita satu keluarga pindah rumah ke daerah meadow green maka dari itu saya menempuh pendidikan sekolah dasar di SD Karya Iman.
            Dekat dari rumah dan fasilitasnya lumayan bagus, selama 6 tahun disana saya memiliki banyak teman di sekitar rumah. Dikarenakan banyak murid bahkan teman sekelas
            yang tinggal di sekitar rumah saya
            </p>

         </div>

      </div> <!-- item end -->

      <div class="row item">

         <div class="twelve columns">

            <h3>SMP Presiden</h3>
            <p class="info">7 - 9 <span>&bull;</span> <em class="date">2015 - 2017</em></p>

            <p>
            SMP PRESIDEN adalah salah satu satuan pendidikan dengan jenjang SMP di Simpangan, Kec. Cikarang Utara, Kab. Bekasi, Jawa Barat.
             Dalam menjalankan kegiatannya, SMP PRESIDEN berada di bawah naungan Kementerian Pendidikan dan Kebudayaan. Saya menempuh pendidikan Menengah Pertama di
             SMP Presiden, yang beralamatkan di Jababeka. Dikarenakan orang tua saya mencari tempat tinggal yang lebih dekat dengan akses tol maka dari itu kita sekeluarga pindah
             ke Jababeka, dimana dekat juga dengan sekolah saya. di SMP Presiden ini ada hal istimewanya menurut saya yaitu peraturan Black Book. Dimana ketika kita melakukakan
             pelanggaran kita menulis pelanggaran kita di buku Black Book, Yang akan mempengaruhi nilai akademik yaitu pelajaran Leadership.
            </p>

         </div>

      </div> <!-- item end -->

      <div class="row item">

         <div class="twelve columns">

            <h3>SMA Al Muslim</h3>
            <p class="info">10 - 12<span>&bull;</span> <em class="date">2018 - 2020</em></p>

            <p>
            SMA Al Muslim beralamatkan di Tambun, Bekasi. Saya menempuh pendidikan menengah atas di SMA Al Muslim. Dikarenakan saya ingin menemukan suasana baru
            yaitu lebih memperdalam ilmu agama saya, maka dari itu saya bersekolah di SMA Al Muslim. Sekolah ini jauh dari rumah saya tetapi disekolah ini kita diperbolehkan
            membawa kendaraan. Ada yang membawa mobil atau motor dan juga ada jemputuan khusus untuk daerah jauh seperti Lippo Cikarang dan Jababeka. Pada Kelas 10 karena awal
            jadi saya menggunakan jemputan selanjutnya kelas 11 sampai 12 saya membawa kendaraan motor sendiri.
            </p>

         </div>

      </div> <!-- item end -->

   </div> <!-- main-col end -->

</div> <!-- End Education -->

</section> <!-- Resume Section End-->



<!-- footer
================================================== -->
<footer>

<div class="row">

   <div class="twelve columns">

      <ul class="social-links">
         <li><a href="https://www.facebook.com/RaihanHidayatullahD"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>               
         <li><a href="https://www.linkedin.com/in/raihan-d-320a1412a/"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="https://www.instagram.com/raaihan.n/"><i class="fa fa-instagram"></i></a></li>
      </ul>

      <ul class="copyright">
         <li>&copy; Copyright Februari 2022 By RHD</li>                
      </ul>

   </div>
</div>

</footer> <!-- Footer End-->    
@endsection

   