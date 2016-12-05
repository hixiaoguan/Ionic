<?php
use Illuminate\Database\Seeder;
class MegTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	DB::table('megs')->delete();
    	for ($i=0; $i < 100; $i++) { 
	        DB::table('megs')->insert([
	            'title' => 'title'.str_random(10),
	            'author' => 'Author'.str_random(10),
	            'body' => 'Body'.str_random(10),
	        ]);
    	}
    }
}
