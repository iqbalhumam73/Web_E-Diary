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
            <h4 class="card-title" style="text-align: center;"><b>Tarawih</b></h4>
          </div><br>
          <h5 style="text-align: center;">
                Kegiatan Tarawih merupakan kegiatan rutin yang hanya dapat dilakukan di bulan suci Ramadhan. Dalam rangka meningkatkan kekhusyukan dan kondusivitas pelaksanaan ibadah tarawaih, kegiatan yang dilakukan berupa pengkondisian jamaah, terutama anak-anak jamaah masjid Manarul Ilmi dengan kegiatan yang bermanfaat. Selain itu, diadakan juga fasilitas bagi jamaah seperti fasilitas air minum dengan penyediaan galon
          </h5>
        </div>
        <input type="button" onclick="window.location.href='/peserta/tarawih';" value="Lihat peserta"  class="btn btn-primary centerbutton"/>
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
          <input type="button" onclick="window.location.href='/peserta/tarawih';" value="Lihat peserta" style="background-color:white; color:purple;" class="btn btn-primary pull-right"/>
        </div>
      </div>
    </div>
</div>


@endsection
