<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		    DB::table('comments')->insert([
            'user_id' => 2,
			'topic_id'=> 1,	
            'title' => 'RE',
            'body' => 'hello we are  still dealing with issues!',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s')	
        ]);
		  DB::table('comments')->insert([
            'user_id' => 1,
            'topic_id'=> 2,	
            'title' => 'RE',
            'body' => 'hello we are  still dealing with user status!',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
		 DB::table('comments')->insert([
            'user_id' => 1,
            'topic_id'=> 3,	
            'title' => 'gundam versus',
            'body' => 'its a thing indeed',  
			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
