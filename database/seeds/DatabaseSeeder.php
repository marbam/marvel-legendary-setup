<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $decks[] = ['name' => 'Standard'];
        $decks[] = ['name' => 'Dark City'];
        $decks[] = ['name' => 'Fantastic Four'];
        $decks[] = ['name' => 'Guardians of the Galaxy'];
        $decks[] = ['name' => 'Deadpool'];
        $decks[] = ['name' => 'Paint The Town Red'];
        $decks[] = ['name' => 'Civil War'];

        \App\Deck::insert($decks);

        $decks = \App\Deck::all();

        $original = $decks->where('name', 'Standard')->first()->id;



    }
}
