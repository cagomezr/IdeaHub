@extends('layouts.app')

@section('content')
<div class="container replycheck body">
    <div class="row">
<div class="col-md-12  topicArea">
	
	@if(empty($topic))
	<h2>topic  does not  exist </h2>
	<a href="{{Route('home')}}">Go back and Find a  new topic!</a>	
	@else
		<div class="jumbotron">
			<h1>{{$topic->title}}</h1> 
			<div class="discussion-body">
				<p>{{$topic->body}}</p>
				<p>{{date('M-d-Y ', strtotime($topic->created_at))}} on {{date('h:i a', strtotime($topic->created_at))}}</p>
				<div>
					@if($authcheck)
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
							Delete Post
						</button>		
					@endif
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#replyModal">
						Reply
					</button>
				</div>
			</div>
		</div>
   			
	   <div>
	  	  @if(!empty($topic->comments))
          	
                @foreach($topic->comments as $comment)
                 <div class="panel panel-default">
               		 <div class="panel-heading">{{$comment->title}} </div>

               		 <div class="panel-body">
                		<p>{{$comment->body}}</p>
                		<p><strong>Posted by {{$comment->user->name}}</strong>  on {{date('M-d-Y ', strtotime($comment->created_at))}} at {{date('h:i a', 	strtotime($comment->created_at))}}</p>
            		</div>
		   		</div>
                @endforeach
         </div>    
        
	  @endif
	 
 
 </div>
	</div>
	
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#replyModal">
		Reply
	</button>
	@if($authcheck)
<!-- Modal Delete -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		
		{{csrf_field()}}
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					 
						 <p>
						 	Delete the post?
						 </p>
						
					 	
				</div>
				<div class="modal-footer">
				 <form action="{{route('delete-topic')}}" method="post">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					
         		   {{csrf_field()}}
         		   <input type="hidden" name="topic_id" id="topic_id" value ="{{$topic->id}}"  /> 
                  <button type="submit" class="btn btn-danger btn sm" > Delete Post</button>
                              
                   </form>
				</div>
				
			</div>
			
		</div>
	
	</div>
	@endif
	<!-- Modal -->
	<div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<form action="{{route('process-comment')}}" method="post">
		{{csrf_field()}}
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4>New Comment </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					 
						 <div class="form-group">
							 <input  type="text"  name="title" id="title" placeholder="title  (optional)"/> 
							 <input type="hidden" name="topic_id" id="topic_id" value ="{{$topic->id}}"  />
						 </div>
						 <div class="form-group">
						 	<textarea name ="comment" id="comment" class="form control" rows="2" placeholder="what you think?"></textarea>
						 </div> 
						
					 	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary btn sm" > Post</button>
				</div>
				
			</div>
			
		</div>
		</form>
	</div>
	@endif  
</div>

@endsection