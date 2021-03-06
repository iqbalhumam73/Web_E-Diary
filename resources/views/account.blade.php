@extends('template.v_navbar')

@section('title')
  E-Diary - My Account
@endsection


@section('pagetitle')
@endsection


@section('main')
<div class="container-fluid">
  <div class="row">
          <!-- start my story -->
          <div class="col-lg-12 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">library_books</i>
                </div>
                <p class="card-category">My Story</p>
                <!-- <h3 class="card-title">666</h3> -->
              </div>
              <div class="card-footer">
                <div class="stats">
                  <a href="/dummy/stories">See all stories</a>
                </div>
              </div>
            </div>
          </div>
          <!-- end of story -->
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
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ Auth::user()->name}}</label>
                          <textarea class="form-control" disabled></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email address</label>
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ Auth::user()->email}}</label>
                          <textarea class="form-control" disabled></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-4">
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
          </div> -->
          <!-- end of data -->
          <!-- tabel -->
        </div>
      </div>
    </div>
  </div>
</div>>
@endsection
