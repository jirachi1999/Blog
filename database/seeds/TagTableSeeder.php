<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag_names = ['newest', 'hot trend', 'old', "editor's choice"];
        foreach ($tag_names as $name)
        {
            $tag = new \App\Tag([
                'name' => $name,
            ]);
            $tag -> save();
        }
    }
}
