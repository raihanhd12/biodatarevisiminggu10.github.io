@extends('layouts/main')
<style>
    
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
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-top: 15px;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #6e2828;}
    
    #customers tr:hover {background-color: #F06000;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #000000;;
      color: white;
    }
    </style>
@section('tampilan') 
@if (session()->has('success'))
<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    Data Berhasil Di Inputkan.
  </div>
    
@endif  

<h1 style="color: #ddd">Ini adalah contoh</h1>
<div class="container" "       
<span class="psw">Memasukkan Data Ke Coba<a href="/raihanregister"> Input Data</a></span>
</div>
<a href="/" style="color: #F06000">Kembali Ke Home</a>

<table id="customers">
    <tr>
      <th>Nomor</th>
      <th>Nama Lengkap</th>
      <th>Nama Panggilan</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Umur</th>
      <th>Hobi</th>
      <th>Agama</th>
      <th>Email</th>
    </tr>
@foreach ($data as $value)    
    <tr style="color:#f2f2f2">
        <td>{{ $loop->iteration }}</td>  
        <td>{{ $value -> nama}}</td>
        <td>{{ $value -> namaPanggilan}}</td>
        <td>{{ $value -> ttl}}</td>
        <td>{{ $value -> jk}}</td>
        <td>{{ $value -> umur}}</td>
        <td>{{ $value -> hobi}}</td>
        <td>{{ $value -> agama}}</td>
        <td>{{ $value -> email}}</td>
    </tr>
  @endforeach

</table>


@endsection