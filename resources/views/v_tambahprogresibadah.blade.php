@extends('template.v_navbar')

@section('content')
<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Tambah Progres Ibadah</h2>
                        </div>
                        <div class="card-body">
                            <form>
                            <div class="form-group">
                                <label for="exampleInputName">Tanggal</label>
                                <input type="date" id="birthday" name="birthday">
                            </div>
                            <div class="form-group">
                            <label for="cars" style="text-align: center;">Pilih Tanggal:</label>
                            <select name="cars" id="cars" style="color:purple;">
                                <option value="sholat">Sholat 5 Waktu</option>
                                <option value="mengaji">Mengaji</option>
                                <option value="tilawah">tilawah</option>
                                <option value="dzikir">Dzikir</option>
                            </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection