@extends('template.v_navbar')


@section('title')
  E-Diary - Comments
@endsection


@section('pagetitle')
  My Story
@endsection


@section('main')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <input type="button" onclick="window.location.href='/{username}/{storyid)/addcomment';" value="Add Comment" class="btn btn-primary pull-right"/><br><br><br>
        <!-- untuk buat kotak ungu -->
        <div class="card" style="background-color:purple"> 
            <div class="card-body""  style="color:rgb(240,240,240)" >
                <h3> {{ $stories->story_title }} </h3>
                <h5><b> nama  </b> </h5>
                <h5>{{ $stories->story_body }}</h5>
            </div>
        </div>
        @foreach($comments as $datacomments)
        <div class="card"> 
            <div class="card-body">
                <h4 style="color:purple;" >
                    <b>Nama pengomen </b>
                </h4>
                <h5>
                {{ $datacomments->story_comment_body }}
                </h5><br>
            </div> 
        </div>
        @endforeach 
    </div>
</div>

@endsection