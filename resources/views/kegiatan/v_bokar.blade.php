@extends('template.v_navbar')

@section('title')
  RDK ITS - Kegiatan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <!-- untuk buat kotak ungu -->
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>Buka Bersama di Manarul Ilmi (BOKAR)</b></h4>
          </div><br>
          <h5 style="text-align: center;">
          Ramadhan di Kampus 1441H (RDK 41) ITS memiliki serangkaian kegiatan untuk menunjang ibadah dan amalan di bulan Ramdhan, salah satu kegiatan yang dilakukan oleh RDK adalah BOKAR atau Buka Bersama di Manarul Ilmi.
          </h5>
        </div>
        <input type="button" onclick="window.location.href='/kegiatan/bokar/ubah';" value="Ubah Informasi Kegiatan"  class="btn btn-primary centerbutton"/>
      </div>
      <div class="col-md-4">
        <!-- untuk buat kotak ungu -->
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>Daftar Yuk</b></h4>
          </div><br>
          <label for="cars" style="text-align: center;">Pilih Tanggal:</label>
            <select name="cars" id="cars" style="color:purple;">
                <option value="volvo">1 Januari 2021</option>
                <option value="saab">2 Januari 2021</option>
                <option value="mercedes">3 Januari 2021</option>
                <option value="audi">4 Januari 2021</option>
            </select>
            <button type="submit" class="btn btn-primary" style="background-color:white; color:purple;">Daftar</button>
          <input type="button" onclick="window.location.href='/kegiatan/peserta/bokar';" value="Lihat Peserta" style="background-color:white; color:purple;" class="btn btn-primary pull-right"/>
        </div>
      </div>
      <div class="col-md-12">
        <!-- untuk buat kotak ungu -->
        <div class="card"> 
          <div class="card-header card-header-primary">
            <h4 class="card-title" style="text-align: center;"><b>Dokumentasi</b></h4>
          </div><br>
          <img class="img" src="{{asset('template')}}/assets/img/baganorganisasi.jpg" width="600" 
          style="display: block; margin-left: auto; margin-right: auto;"class="centerimage"/><br>
          <img class="img" src="{{asset('template')}}/assets/img/cover.jpg" width="600" 
          style="display: block; margin-left: auto; margin-right: auto;"class="centerimage"/><br>
          <img class="img" src="{{asset('template')}}/assets/img/bg2.jpg" width="600" 
          style="display: block; margin-left: auto; margin-right: auto;"class="centerimage"/><br>
          <img class="img" src="{{asset('template')}}/assets/img/city.jpg" width="600" 
          style="display: block; margin-left: auto; margin-right: auto;"class="centerimage"/><br>
        </div>
      </div>
    </div>
</div>


@endsection
