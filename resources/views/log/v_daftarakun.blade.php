@extends('template.v_template')

@section('contentwithoutnavbar')
<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Daftar Akun</h2>
                        </div>
                    <div class="card-body">
                    <div class="container">

                    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
                    <fieldset>


                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label">ID</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="user_name" placeholder="Contoh : joealwyn13" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" placeholder="Contoh : joealwyn13@gmail.com" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label" >Kata Sandi</label> 
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="user_password" placeholder="Min. 8 Karakter" class="form-control"  type="password">
                    </div>
                    </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label" >Ulang Kata Sandi</label> 
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="confirm_password" placeholder="Masukkan kata sandi lagi" class="form-control"  type="password">
                    </div>
                    </div>
                    </div>


                    <!-- Text input-->
                    
                    <div class="form-group">
                    <label class="col-md-4 control-label">Nama</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input name="contact_no" placeholder="Contoh : Joe Matthew Alwyn" class="form-control" type="text">
                    </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label">Alamat</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="user_name" placeholder=" Contoh Jl. Cornelia / 13. Surabaya" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label">Nomor Telepon / HP</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="user_name" placeholder="Masukkan nomor telepon / HP" class="form-control"  type="number">
                    </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label">Jenis Kelamin</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="radio" id="l" name="akun_jk" value="Ikhwan">
                    <label for="male">Ikhwan</label>
                    <input type="radio" id="p" name="akun_jk" value="Akhwat">
                    <label for="perempuan">Akhwat</label><br>
                    </div>
                    </div>
    


                    <!-- Select Basic -->

                    <!-- Success message -->
                    <!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> -->

                    <!-- Button -->
                    <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                    <button type="submit" class="btn btn-primary" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT 
                    <span class="glyphicon glyphicon-send">
                    </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    <p><a href="/masuk">Already have an account? Click here!</a></p>
                    </div>
                    </div>

                    </fieldset>
                    </form>
                    </div>
                    </div><!-- /.container -->
                    </form>
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