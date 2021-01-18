
@extends('template.v_navbar')


@section('title')
  E-Diary - Followers
@endsection


@section('pagetitle')
  Followers
@endsection


@section('main')
<div class="container-fluid" style="text-align: center;">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Followers</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <div class="col-md-3">
                        <th>
                          Name
                        </th>
                        <div>
                        <th>
                          Username
                        </th>
                        <th>
                          Photo
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Taylor Swift
                          </td>
                          <td>
                            Lorem Ipsum
                          </td>
                          <td>
                          <img class="img" src="{{asset('template')}}/assets/img/faces/marc.jpg" width="50" height="50">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Joe Alwyn
                          </td>
                          <td>
                            Pagi hari yang cerah
                          </td>
                          <td>
                            <img class="img" src="{{asset('template')}}/assets/img/faces/marc.jpg" width="50" height="50">
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