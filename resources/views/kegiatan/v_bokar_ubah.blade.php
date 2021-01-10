@extends('template.v_navbar')

@section('title')
  RDK ITS - kegiatan
@endsection

@section('content')
<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Edit Informasi Kegaitan</h2>
                        </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Nama Kegiatan</label>
                                        <div class="form-group">
                                            <textarea class="form-control" enabled placeholder="Buka Bersama di Manarul Ilmi (BOKAR)"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Deskripsi Kegiatan</label>
                                        <div class="form-group">
                                            <textarea class="form-control" enabled placeholder="Ramadhan di Kampus 1441H (RDK 41) ITS memiliki serangkaian kegiatan untuk menunjang ibadah dan amalan di bulan Ramdhan, salah satu kegiatan yang dilakukan oleh RDK adalah BOKAR atau Buka Bersama di Manarul Ilmi."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Atur Tanggal Kegiatan :</label>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                </div>
                            <div class="clearfix"></div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating" style="color:purple">Dokumentasi</label>
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
                <input type="file" id="myFile" name="filename">
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                <!-- end of data -->
                <!-- tabel -->
            </div>
</div>
@endsection