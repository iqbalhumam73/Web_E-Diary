
@extends('template.v_navbar')


@section('title')
  E-Diary - Timeline
@endsection


@section('pagetitle')
  Timeline
@endsection


@section('main')
<div class="container-fluid" style="text-align: center;">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Stories</h4>
                  <p class="card-category">Your friends have so many exciting stories! Read them all!</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-primary">
                                        <th>Nama</th>
                                        <th>Title</th>
                                        <th>Story</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($stories as $datatimeline)
                                            <tr>
                                                <td>taylor</td>
                                                <td>{{ $datatimeline->story_title }}</td>
                                                <td>{{ $datatimeline->story_body }}</td>
                                                <td>
                                                    <a href="/{{ $datatimeline->story_id }}/storiescomment" class="btn btn-sm btn-warning">Comments</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection