@extends('template.v_navbar')

@section('content')
<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Tambah Donasi</h2>
                        </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Nominal</label>
                                        <div class="form-group">
                                            <input  name="user_name" class="form-control"  type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Keterangan</label>
                                        <div class="form-group">
                                            <textarea class="form-control" enabled ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Tanggal :</label>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                </div>
                            <div class="clearfix"></div>
                        </form>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            </div>
</div>
@endsection