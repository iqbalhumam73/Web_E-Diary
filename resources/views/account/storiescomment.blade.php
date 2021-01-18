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
        <input type="button" onclick="window.location.href='/kegiatandiikuti';" value="Lihat kegiatan yang kamu ikuti" class="btn btn-primary pull-right"/><br><br><br>
        <!-- untuk buat kotak ungu -->
        <div class="card" style="background-color:purple"> 
            <div class="card-body""  style="color:rgb(240,240,240)" >
                <h3> Judul </h3>
                <h5><b> nama pembuat story </b> </h5>
                <h5>ini story tentang awagfafe ini story tentang awagfafe ini story tentang awagfafeini story tentang awagfafe ini story tentang awagfafe ini story tentang awagfafeini story tentang awagfafeini story tentang awagfafe ini story tentang awagfafe ini story tentang awagfafeini story tentang awagfafe</h5>
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