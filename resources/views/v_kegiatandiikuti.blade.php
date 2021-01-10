@extends('template.v_navbar')

@section('title')
  RDK ITS - Kegiatan
@endsection

@section('content')
<div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"><b>Kegiatan yang kamu ikuti</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>Tanggal</th>
                                        <th>Kegiatan</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Februari 2020</td>
                                            <td>Buka Bersama di Manarul Ilmi (Bokar)</td>
                                            <td>
                                            <input type="button" onclick="window.location.href='/kegiatandiikuti';" value="Batal Ikut" class="btn btn-danger pull-right" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                
        </div>
@endsection
