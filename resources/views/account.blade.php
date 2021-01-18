@extends('template.v_navbar')

@section('title')
  E-Diary - My Account
@endsection


@section('pagetitle')
@endsection


@section('main')
<div class="container-fluid">
  <div class="row">
    <!-- start followers -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">73M</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/account/followers">See all followers</a>
              </div>
            </div>
          </div>
          </div>
          <!-- batas followers -->
          <!-- start following -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">person</i>
                </div>
                <p class="card-category">Following</p>
                <h3 class="card-title">2.4K</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <a href="/account/following">See all following</a>
                </div>
              </div>
            </div>
          </div>
          <!-- end of following -->
          <!-- start my story -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">library_books</i>
                </div>
                <p class="card-category">My Story</p>
                <h3 class="card-title">666</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <a href="/account/stories">See all stories</a>
                </div>
              </div>
            </div>
          </div>
          <!-- end of story -->
          <!-- playlist -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">library_books</i>
                </div>
                <p class="card-category">My Playlist</p>
                <h3 class="card-title">26</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <a href="/account/playlist">See all playlist</a>
                </div>
              </div>
            </div>
          </div>
          <!-- end of playlist -->
          <!-- personal info-->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="bmd-label-floating">Company</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"> ITS</label>
                          <textarea class="form-control" disabled></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <div class="form-group">
                          <label class="bmd-label-floating">iqbalhumam73</label>
                          <textarea class="form-control" disabled></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email address</label>
                        <div class="form-group">
                          <label class="bmd-label-floating">iqbalhumam73@gmail.com</label>
                          <textarea class="form-control" disabled></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Iqbal</label>
                            <textarea class="form-control" disabled></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <div class="form-group">
                             <label class="bmd-label-floating">Humam</label>
                             <textarea class="form-control" disabled></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Informatics Student</label>
                            <textarea class="form-control" disabled rows="2"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">
                      Update Profile
                    </button>
                    <div class="clearfix">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <a href="javascript:;">
                  <img class="img" src="{{asset('template')}}/assets/img/faces/marc.jpg" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                <h4 class="card-title">Alec Thompson</h4>
                <p class="card-description">
                  Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
              </div>
            </div>
          </div>
          <!-- end of data -->
          <!-- tabel -->
        </div>
      </div>
    </div>
  </div>
</div>>
@endsection
