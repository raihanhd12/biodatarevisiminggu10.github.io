<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman {{  $title  }}</title>    
    <style>
        body{
            background-color: #12151F;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
        }
        .wrap {            
            background-color: #12151F;
            width: 800px;
            color:black;
            margin: 20px auto;
            padding:15px;
        }
        .icon {
            padding:5px;
            text-align: center;
        }
        span {
            color: #F06000;
        }
        h1, h2 {
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            color: #DEB992;
        }
        a{
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            color: #DEB992;
            
        }
        td{
            font-family: Arial, Helvetica, sans-serif;            
            text-decoration: none;
            color: white;
        }
        .footer{
            color: whitesmoke;
        }
        /*===================================================== 
                                 Prev And Next
        ======================================================*/        
        .previous {
          text-decoration: none;
          display: inline-block;
          padding: 8px 16px;
          background-color: #f1f1f1;
          color: black;
          margin-left: 550px;
        }
        .previous:hover {
          background-color: #ddd;
          color: black;
        }
    </style>
</head>
<body >
    <div class="wrap">
        <h1 align="center">BIO<span>DATA</span></h1>
        <h2 align="center" style="margin-top: -20px; color: #F06000;">_____________________________________________________________</h2>
        <table>
            <tr>
                <td rowspan="8" width="100px"> <img src="images/raihan1.jpg" width="200px" style="display: block;border-radius: 5%;border-color:#F06000;margin-right:30px"
                     border="2px" ></td>
            </tr>
            <tr>
                <td><b>Nama Lengkap</b></td>
                <td>:</td> <td>{{ $nama }}</td>
            </tr>
            <tr>
                <td><b>Tempat Tanggal Lahir</b></td><td>:</td> <td>{{ $ttl}}</td>
            </tr>

            <tr>
                <td><b>Jenis Kelamin</b></td><td>:</td> <td>{{ $jk }}</td>
            </tr>
            <tr>
                <td><b>Umur</b></td><td>:</td> <td>{{ $umur }}</td>
            </tr> 
            <tr>
                <td><b>Hobi</b></td><td>:</td> <td>{{ $hobi }}</td>
            </tr>  
            <tr>
                <td><b>Agama</b></td><td>:</td> <td>{{ $agama }}</td>
            </tr>         
            <tr>
                <td class="email"><b>Email</b></td><td>:</td><td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
        </table>
    </div>
    <h2 align="center" style="margin-top: -20px; color: #F06000;">_____________________________________________________________</h2>
    <div class="wrap" align="center">
        <h2 align="center">SOCIAL<span> MEDIA</span></h2>
        <a class="icon" href="https://www.instagram.com/raaihan.n/"><img src="https://liupurnomo.github.io/resume/icons/Instagram.png" alt="" width="40px"></a>
        <a class="icon" href="https://www.facebook.com/RaihanHidayatullahD"><img src="https://liupurnomo.github.io/resume/icons/Facebook.png" alt="" width="40px"></a>
        <a class="icon" href="https://steamcommunity.com/id/raihanhd"><img src="https://liupurnomo.github.io/resume/icons/Steam.png" alt="" width="40px"></a>
        <a class="icon" href="https://wa.me/6281906781639"><img src="https://liupurnomo.github.io/resume/icons/WhatsApp.png" alt="" width="40px"></a>  
    </div>
    <footer>        
        <p align="center" class="footer"><b><i> 
            Copyright © <a href="#" >| RHD |</a> Februari 2022</i></b>
        </p>
        <br><br><br>
        <a href="/about" class="previous">&laquo; Kembali Ke About</a>        
    </footer>
</body>
</html>
