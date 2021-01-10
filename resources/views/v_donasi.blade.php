@extends('template.v_navbar')

@section('title')
  RDK ITS - Donasi
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <!-- untuk buat kotak ungu -->
        <div class="card" style="background-color:purple"> 
          <div class="card-body""  style="color:rgb(240,240,240)" >
            <br>
            <h5 style="font-size:22px; text-align:center;"><b>
                Total Donasi Terkumpul :
            </h5>
            <h5 style="font-size:70px; text-align:center;"><b>
                57.250.000
            </b>
            </h5>
          </div>
        </div>
        <input type="button" onclick="window.location.href='/tambahdonasi';" value="Tambah Donasi" class="btn btn-primary centerbutton"/>
        <br>
        <br>
        <br>
        <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Cara Berdonasi</b>
              </h4>
              <h5 style="text-align: center;">
                Transfer ke : 0421513515 (BNI) A.N Eka Gustiwana (Bendahara RDK)
              </h5>
              <h5 style="text-align: center;">
                Menghubungi Bendahara RDK : 081413114675636 (Eka Gustiwana)
              </h5>
              <h5 style="text-align: center;">
                Kirim bukti transfer
              </h5>
              <h5 style="text-align: center;">
                Isi form yang diberikan
              </h5>
              <h5 style="text-align: center;">
                Tunggu donasi diverifikasi
              </h5>
              <br>
        </div>
      </div>
    </div>
</div>
@endsection