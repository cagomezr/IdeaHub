@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <a href="{{route('new-topic')}}" class="btn btn-primary btn sm"> New Topic </a>
           
                
                                       
                <table class="tbClass">
                @foreach($topics as $topic)
                <tr>
                	<td>
                		<a href="{{route('topic',[$topic->id])}}">{{$topic->title}}</a>
                	
					<span>
					 posted by {{$topic->user->name}} on {{date('d-M-Y ', strtotime($topic->created_at))}} at {{date('h:i a', strtotime($topic->created_at))}}
						</span> 
				</td>
          		
          		</tr>
           		@endforeach
           		</table>
            </div>
	</div>
	
</div>

@endsection
