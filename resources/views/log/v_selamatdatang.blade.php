@extends('template.v_template')

@section('contentwithoutnavbar')
<br>
<br>
<br>
<br>
<br>
<h2 style="text-align:center;"><b>Selamat Datang di Website <br>Ramadhan di Kampus ITS Surabaya</b></h2>
<br>
<br>
<br>
<h4 style="text-align:center;">Masuk atau buat akun sekarang</h4><br>
<input type="button" onclick="window.location.href='/daftarakun';" value="Daftar Akun" class="btn btn-primary centerbutton" />
<br>
<input type="button" onclick="window.location.href='/masuk';" value="Masuk" class="btn btn-primary centerbutton"/>
@endsection