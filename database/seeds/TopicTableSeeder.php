<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('topics')->insert([
            'user_id' => 1,
            'title' => 'Admin',
            'body' => 'hello we are  dealing with new have a nice day!', 
			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
		  DB::table('topics')->insert([
            'user_id' => 2,
            'title' => 'admin23 danounce',
            'body' => 'hello we are  dealing with new have a nice day!',			    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
		 DB::table('topics')->insert([
            'user_id' => 3,
            'title' => 'gundam versus',
            'body' => 'its a thing!!',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
