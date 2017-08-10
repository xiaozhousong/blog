<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(['logo' => 'http://www.standardrepublic.com/wp-content/uploads/2017/08/928.jpg','title' => 'North Korea Guam missile strike plan','body'=>'North Korea has defied threats of “fire and fury” from Donald Trump, deriding his warning as a “load of nonsense” and announcing a detailed plan to launch missiles aimed at the waters off the coast of the US Pacific territory of Guam.','user_id'=>1]);
    }
}
