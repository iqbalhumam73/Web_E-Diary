@extends('template.v_template')

@section('contentwithoutnavbar')
    <div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Edit Data Akun</h2>
                        </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">ID</label>
                                        <div class="form-group">
                                            <textarea class="form-control" enabled placeholder="joeawlyn13"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Nama</label>
                                        <div class="form-group">
                                            <textarea class="form-control" enabled placeholder="Joe Matthew Alwyn"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Email</label>
                                        <div class="form-group">
                                            <textarea class="form-control" enabled placeholder="joealwyn13@gmail.com"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Alamat</label>
                                        <div class="form-group">
                                            <textarea class="form-control" enabled placeholder="Jl. Cornelia/13, Surabaya "></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple" >Nomor Telepon / HP</label>
                                        <div class="form-group">
                                            <textarea class="form-control" enabled placeholder="081535245151"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Jenis Kelamin</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating" style="color:rgb(220,220,220)">Ikhwan</label>
                                            <!-- <textarea class="form-control" enabled></textarea> -->
                                        </div>
                                        <input type="radio" id="l" name="akun_jk" value="Ikhwan">
                                        <label for="male">Ikhwan     </label>
                                        <input type="radio" id="p" name="akun_jk" value="Akhwat">
                                        <label for="perempuan">Akhwat</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple" >Kata Sandi</label>
                                        <div class="form-group">
                                            <input type="password" name="psswd" size="30" maxlength="25" class="form-control"></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" style="color:purple">Ketik Ulang Kata Sandi</label>
                                        <div class="form-group">
                                            <input type="password" name="psswd" size="30" maxlength="25" class="form-control"></li>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        <input type="button" onclick="window.location.href='/akun';" value="Kembali" class="btn btn-primary pull-right"/>
                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
                <!-- end of data -->
                <!-- tabel -->
        </div>
    </div>
@endsection