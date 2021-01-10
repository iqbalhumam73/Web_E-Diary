@extends('template.v_template')

@section('contentwithoutnavbar')
<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Login</h2>
                        </div>
                        <div class="card-body">
                            <form>
                            <div class="form-group">
                                <label for="exampleInputName">Email</label>
                                <input type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukkan Email">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                <!-- <br> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Password">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                <br>
                            </div>
                            <button type="submit" class="btn btn-primary">Log in</button>
                            <div class="clearfix"></div>
                            <p><a href="/daftarakun">Belum punya akun? Klik di sini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection