@extends('template.v_navbar')


@section('title')
  E-Diary - My Story
@endsection


@section('pagetitle')
  My Story
@endsection


@section('main')
<div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Stories</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Story</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($stories as $data)
                                            <tr>
                                                <td>{{ $data->story_id }}</td>
                                                <td>{{ $data->story_title }}</td>
                                                <td>{{ $data->story_body }}</td>
                                                <td>
                                                    <a href="/{{ $data->story_id }}/storiescomment" class="btn btn-sm btn-warning">Comments</a>
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