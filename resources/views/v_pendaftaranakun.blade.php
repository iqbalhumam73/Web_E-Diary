@extends('template.v_navbar')

@section('title')
  RDK ITS - Pendaftaran Akun
@endsection

@section('content')
<div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"><b>Pendaftaran Akun</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>Nama</th>
                                        <th>Role</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Restu Agg</td>
                                            <td>SC</td>
                                            <td>
                                            <input type="button" onclick="window.location.href='/';" value="Ubah" class="btn btn-danger pull-right" />
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