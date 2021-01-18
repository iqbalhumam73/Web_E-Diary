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
				          <label class="control-label col-sm-2" for="fname">Title:</label>
				          <div class="col-sm-10">          
					          <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				          </div>
				      </div>
				      <div class="form-group">
				        <label class="control-label col-sm-2" for="lname">Playlist:</label>
				        <form action="/action_page.php">
                            <select id="cars" name="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                            <textarea class="form-control" enabled></textarea>
                        </form>
				      </div>
				      <div class="form-group">
				        <label class="control-label col-sm-2" for="comment">Story:</label>
				        <div class="col-sm-10">
					        <textarea class="form-control" rows="5" id="comment"></textarea>
				        </div>
				      </div>
				      <div class="form-group">        
				        <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn-default">Submit</button>
				        </div>
				      </div>
			      </div>
		      </div>
	      </div>
@endsection