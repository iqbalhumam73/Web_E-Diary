@extends('template.v_navbar')

@section('title')
  RDK ITS - Progres Ibadah
@endsection

@section('content')
<div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"><b>Progres Ibadah Kamu</b></h4>
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
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="button" onclick="window.location.href='/tambahprogresibadah';" value="+" class="btn btn-primary centerbutton"/>
                            </div>
                        </div>
                    </div>
                </div>                
        </div>
@endsection