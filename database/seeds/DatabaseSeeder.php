<?php

use Illuminate\Database\Seeder;
use App\Dua;
use App\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DuasTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TagTableSeeder::class);

        $tags = Tag::all();

        // Populate the pivot table
        Dua::all()->each(function ($dua) use ($tags) { 
            $dua->tags()->sync(
                $tags->random(rand(1, 2))->pluck('id')->toArray()
            ); 
        });
    }
}
