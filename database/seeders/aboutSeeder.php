<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class aboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title'=>'Hello! I Am Md Enamul Haque.',
            'describtion'=>'web developer with a strong passion. I have build several project for e-Commerch, Shop, Corporate Office using PHP, Laravel, Wordpress. I want to obtain a full time job working as a Software Engineer to develop, maintain and design software',
            'resident'=>'Bangladesh',
            'freelance'=> 'Avalable',
            'address' => 'Gorai,Tangail'
        ]);
    }
}
