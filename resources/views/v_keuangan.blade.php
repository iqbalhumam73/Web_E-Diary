@extends('template.v_navbar')

@section('title')
  RDK ITS - Keuangan
@endsection

@section('content')
<div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"><b>Keuangan</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                        <th>Alur</th>
                                        <th>Tanggal</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Beli Galon</td>
                                            <td>15.000</td>
                                            <td>Keluar</td>
                                            <td>2 Januari 2020</td>
                                            <td>
                                            <input type="button" onclick="window.location.href='/kegiatandiikuti';" value="Ubah" class="btn btn-warning pull-right" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>              
                <input type="button" onclick="window.location.href='/tambahkeuangan';" value="Tambah Data Keuangan" class="btn btn-primary centerbutton" />  
        </div>
@endsection