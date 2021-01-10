@extends('template.v_navbar')

@section('title')
  RDK ITS - Kegiatan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <input type="button" onclick="window.location.href='/kegiatandiikuti';" value="Lihat kegiatan yang kamu ikuti" class="btn btn-primary pull-right"/><br><br><br>
        <!-- untuk buat kotak ungu -->
        <div class="card" style="background-color:purple"> 
          <div class="card-body""  style="color:rgb(240,240,240)" >
            <h5> <br><br><b>
            Ramadhan di Kampus 1441 H (RK 41) ITS memiliki serangkaian kegaitan untuk menunjang ibadah dan amalan di bulan Ramdhan, baik yang dilaksanakan pada 
            bulan Ramadhan maupun di luar itu. Kegiatan yang InsyaAllah akan dijalankan oleh RDK ITS 41 dapat dilihat di halaman ini.
            </b><br><br>
            </h5>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="card"> 
          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Buka Bersama di Manarul Ilmi (BOKAR)</b>
              </h4>
              <h5 style="text-align: center;">
                Ramadhan di Kampus 1441H (RDK 41) ITS memiliki serangkaian kegiatan untuk menunjang ibadah dan amalan di bulan Ramdhan, salah satu kegiatan yang dilakukan oleh RDK adalah BOKAR atau Buka Bersama di Manarul Ilmi.
              </h5><br>
              <input type="button" onclick="window.location.href='/kegiatan/bokar';" value="Selengkapnya" class="btn btn-primary centerbutton"/>
          </div>
          <br>
          <div class="card-body">
              <h4 style="text-align: center; color:purple;" >
                <b>Tarawih</b>
              </h4>
              <h5 style="text-align: center;">
                Kegiatan Tarawih merupakan kegiatan rutin yang hanya dapat dilakukan di bulan suci Ramadhan. Dalam rangka meningkatkan kekhusyukan dan kondusivitas pelaksanaan ibadah tarawaih, kegiatan yang dilakukan berupa pengkondisian jamaah, terutama anak-anak jamaah masjid Manarul Ilmi dengan kegiatan yang bermanfaat. Selain itu, diadakan juga fasilitas bagi jamaah seperti fasilitas air minum dengan penyediaan galon
              </h5><br>
              <input type="button" onclick="window.location.href='/kegiatan/tarawih';" value="Selengkapnya" class="btn btn-primary centerbutton"/>
          </div>
        </div>
        <input type="button" onclick="window.location.href='/tambahkegiatan';" value="+" class="btn btn-primary centerbutton"/>
      </div>
    </div>
</div>

<!-- //card bawah -->
        
@endsection
