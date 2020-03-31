<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Tag::class , 20)->create();
        $tag1 = new Tag();

        $tag1->name = 'Food';
        $tag1->save();
       
        $tag2 = new Tag();

        $tag2->name = 'Sleep';
        $tag2->save();

        $tag3 = new Tag();

        $tag3->name = 'Salat';
        $tag3->save();

        $tag4 = new Tag();

        $tag4->name = 'Fasting';
        $tag4->save();

        $tag5 = new Tag();

        $tag5->name = 'Ramadan';
        $tag5->save();

        $tag6 = new Tag();

        $tag6->name = 'Hajj';
        $tag6->save();
    }
}
