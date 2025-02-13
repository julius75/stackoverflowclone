<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//       factory(\App\User::class,5)->create()->each(function ($u){
//           $u->questions()->saveMany(
//               factory(\App\Question::class,rand(1,8))->make()
//           );
//       });
        {
            $this->call([
                UsersQuestionsAnswersTableSeeder::class,
                FavoritesTableSeeder::class,
                VotablesTableSeeder::class,
            ]);
        }
    }
}
