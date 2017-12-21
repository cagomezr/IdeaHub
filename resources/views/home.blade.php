@extends('layouts.app')

@section('content')
<div class="container body">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="jumbotron">
				<h1>IdeaHub</h1>
				<p>
					Welcome to Idea hub  thanks for being here , we are a comunity of  people interested in ideas make sure you grab a chair and  see what the others have to say as  usual be  respectul:
				</p>
				<div>
					<a href="{{route('new-topic')}}" class="btn btn-primary btn sm"> New Topic </a> 
				</div>
			</div>
			<table class="tbClass">
				<tr>
					<th>
						Topic:
					</th>
					<th>
						Author:
					</th>
					<th>
						Posted on:
					</th>
				</tr>	 
                @foreach($topics as $topic)
				<tr>
					<td>
						<a class="lead topic" href="{{route('topic',[$topic->id])}}">{{$topic->title}}</a>
					</td>
					<td>
						{{$topic->user->name}} 
					</td> 
					<td>
						{{date('d-M-Y ', strtotime($topic->created_at))}} at {{date('h:i a', strtotime($topic->created_at))}}
					</td>          		
				</tr>
				@endforeach
			</table>
		</div>
	</div>	
</div>

@endsection
