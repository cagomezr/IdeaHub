<?php

use Illuminate\Database\Seeder;

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
            'body' => 'hello we are  still dealing with issues!'
        ]);
		  DB::table('comments')->insert([
            'user_id' => 1,
            'topic_id'=> 2,	
            'title' => 'RE',
            'body' => 'hello we are  still dealing with user status!'
        ]);
		 DB::table('comments')->insert([
            'user_id' => 1,
            'topic_id'=> 3,	
            'title' => 'gundam versus',
            'body' => 'its a thing indeed'
        ]);
    }
}
