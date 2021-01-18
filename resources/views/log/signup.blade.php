@extends('template.v_template')

@section('title')
    E-Diary - Sign Up
@endsection


@section('mainwithoutnav')
<div class="container-fluid">
            <div class="row">
                <!-- personal info-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title">Sign Up</h2>
                        </div>
                    <div class="card-body">
                    <div class="container">

                    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
                    <fieldset>

                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>


                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="user_name" placeholder="Username" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label" >Password</label> 
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="user_password" placeholder="Password" class="form-control"  type="password">
                    </div>
                    </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label" >Confirm Password</label> 
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
                    </div>
                    </div>
                    </div>


                    <!-- Text input-->
                    
                    <div class="form-group">
                    <label class="col-md-4 control-label">Phone Number</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input name="contact_no" placeholder="(639)" class="form-control" type="text">
                    </div>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label">Bio</label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="user_name" placeholder="Username" class="form-control"  type="text">
                    </div>
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
                    <p><a href="/login">Already have an account? Click here!</a></p>
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