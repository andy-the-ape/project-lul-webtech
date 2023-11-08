<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\Platform;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        Game::factory(15)->create();
//        Platform::factory(10)->create();
//        User::factory(50)->create();
        Review::factory(30)->create();

//         Studio::factory()->create([
//            'name' => 'Blizzard',
//         ]);
//        Studio::factory()->create([
//            'name' => 'Rockstar Games',
//        ]);

//        Review::factory()->create([
//            'description' => 'Lovely game',
//            'rating' => '2.5',
//            'user_id' => '1',
//            'game_id' => '2'
//        ]);
//    }
    }

}
