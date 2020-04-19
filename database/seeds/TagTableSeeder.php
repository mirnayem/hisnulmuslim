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
        $str = strtolower($tag1->name);
        $tag1->slug = preg_replace('/\s+/', '-', $str);
        $tag1->save();
       
        $tag2 = new Tag();

        $tag2->name = 'Sleep';
        $str = strtolower($tag2->name);
        $tag2->slug = preg_replace('/\s+/', '-', $str);
        $tag2->save();

        $tag3 = new Tag();

        $tag3->name = 'Salat';
        $str = strtolower($tag3->name);
        $tag3->slug = preg_replace('/\s+/', '-', $str);
        $tag3->save();

        $tag4= new Tag();

        $tag4->name = 'Ramadan';
        $str = strtolower($tag4->name);
        $tag4->slug = preg_replace('/\s+/', '-', $str);
        $tag4->save();

        $tag5 = new Tag();

        $tag5->name = 'Hajj';
        $str = strtolower($tag5->name);
        $tag5->slug = preg_replace('/\s+/', '-', $str);
        $tag5->save();
    }
}
