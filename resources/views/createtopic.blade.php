@extends('layouts.app')

@section('content')
	<div class="container body">
    	<div class="row">
			<div class="col-md-12  topicArea">
				 <div class="panel panel-default">
	  				<div class="panel-heading">
                		<h2> New Topic</h2>
                 	</div>
	   				<div class="panel-body">
						<form action="{{route('process-topic')}}" method="post">
							{{csrf_field()}}
							<div class="formcontainer">
								<div class="form-group">
									<input required type="text" name="title" id="title" class="form control" placeholder="title"/>
									<textarea required name ="body" id="body" class="form control" rows="3" placeholder="whats on your mind"></textarea>
								</div>             
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn sm" > 	Post</button>
								</div>
							 </div>
						</form>	
					</div>
				</div>	
			</div>
		</div>
	</div>
@endsection