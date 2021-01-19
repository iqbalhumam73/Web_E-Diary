@extends('template.v_navbar')


@section('title')
  E-Diary - New Story
@endsection


@section('pagetitle')
  New Story
@endsection


@section('main')
        <div class="container contact">
	        <div class="row">
		        <div class="col-md-3">
			        <div class="contact-info">
				        <h2>Create New Story</h2>
				        <h4>What are you waiting for?</h4>
			        </div>
		        </div>
		        <div class="col-md-9">
			        <div class="contact-form">
				        <div class="form-group">
				          <!-- <label class="control-label col-sm-2" for="fname">Title:</label> -->
				          <form action="/story/insert" method="POST" enctype="multipart/form-data">
								@csrf 
								<div class="form-group">
									<label class="control-label col-sm-2" for="fname">Title:</label>
									<input name="story_title" class="form-control">	
								</div>

								<div class="form-group">
									<label class="control-label col-sm-2" for="fname">Story:</label>
									<input name="story_body" class="form-control">	
								</div>
								<div class="col-sm-offset-2 col-sm-10">
					        		<button type="submit" class="btn btn-default">Submit</button>
				        		</div>
						  </form>
				      </div>
			      </div>
		      </div>
	      </div>
@endsection