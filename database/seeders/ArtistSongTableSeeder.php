<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 111; $i <= 130; $i++) {
            $data[] = [
                'artist_id' => 66,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 131; $i <= 138; $i++) {
            $data[] = [
                'artist_id' => 69,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 139; $i <= 165; $i++) {
            $data[] = [
                'artist_id' => 67,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 166; $i <= 191; $i++) {
            $data[] = [
                'artist_id' => 57,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 192; $i <= 203; $i++) {
            $data[] = [
                'artist_id' => 60,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 204; $i <= 210; $i++) {
            $data[] = [
                'artist_id' => 68,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 211; $i <= 223; $i++) {
            $data[] = [
                'artist_id' => 2,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 224; $i <= 228; $i++) {
            $data[] = [
                'artist_id' => 3,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 229; $i <= 234; $i++) {
            $data[] = [
                'artist_id' => 4,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 235; $i <= 251; $i++) {
            $data[] = [
                'artist_id' => 5,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 252; $i <= 264; $i++) {
            $data[] = [
                'artist_id' => 6,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 265; $i <= 275; $i++) {
            $data[] = [
                'artist_id' => 7,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 276; $i <= 279; $i++) {
            $data[] = [
                'artist_id' => 25,
                'song_id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        $data[] = [
            'artist_id' => 3,
            'song_id' => 279,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[] = [
            'artist_id' => 3,
            'song_id' => 222,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $data[] = [
            'artist_id' => 3,
            'song_id' => 244,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('artist_song')->insert($data);
    }
}
