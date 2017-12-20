<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Topic;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $topics = Topic::get();
		return view('home',['topics'=>$topics]);
    }
	public function newTopic()
    {
		return view('createtopic');
    }
	public function processTopic(Request $request){
		$topic =new Topic();
		$topic ->user_id = Auth::user()->id;
		$topic ->title = $request->title;
		$topic ->body = $request->body;
		$topic ->save();
		return redirect(route("home"));
    }	
	public  function deleteTopic(Request $request){
		$topic = Topic::where ('id', $request->topic_id)->first();	
		$topic->delete();

		return redirect(route("home"));	
	}
	public function getTopic($id){
		$topic = Topic::where ('id', $id)->first();		
		$author = ( Auth::user()->id === $topic->user->id);
		return view('topic',['topic' => $topic , 'authcheck' =>  $author]);
		
	}
	
	public function processComment(Request $request){
		$comment =new Comment();
		$comment ->user_id = Auth::user()->id;
        $comment ->topic_id = $request->topic_id;
		if($request->title != null){$comment ->title = $request->title;}		
		$comment ->body = $request->comment;
		$comment ->save();
		return redirect()->route('topic', ['id' => $request->topic_id]);
	}
}
