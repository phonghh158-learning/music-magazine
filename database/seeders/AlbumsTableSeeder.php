<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album::create([
            'title' => 'BẬT NÓ LÊN',
            'artist_id' => 2,
            'release_date' => '2024-06-25',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'The Playah',
            'artist_id' => 2,
            'release_date' => '2024-12-15',
            'album_type' => 'ep',
        ]);
        Album::create([
            'title' => 'Keep Cầm Ca',
            'artist_id' => 3,
            'release_date' => '2024-11-27',
            'album_type' => 'ep',
        ]);
        Album::create([
            'title' => 'LOV6',
            'artist_id' => 4,
            'release_date' => '2022-09-15',
            'album_type' => 'ep',
        ]);
        Album::create([
            'title' => 'Bảo Tàng Của Nuối Tiếc',
            'artist_id' => 5,
            'release_date' => '2024-09-27',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'Một Vạn Năm',
            'artist_id' => 5,
            'release_date' => '2022-09-09',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => '25',
            'artist_id' => 6,
            'release_date' => '2020-12-16',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'Yên',
            'artist_id' => 6,
            'release_date' => '2022-08-24',
            'album_type' => 'ep',
        ]);
        Album::create([
            'title' => 'Một Vạn Năm',
            'artist_id' => 7,
            'release_date' => '2023-12-17',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'Yêu Rồi Yêu Rồi Yêu',
            'artist_id' => 25,
            'release_date' => '2021-12-15',
            'album_type' => 'ep',
        ]);
        Album::create([
            'title' => 'Armageddon - The 1st Album',
            'artist_id' => 66,
            'release_date' => '2024-05-27',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'SYNK:PARALLEL LINE - Special Digital Single',
            'artist_id' => 66,
            'release_date' => '2024-10-9',
            'album_type' => 'ep',
        ]);
        Album::create([
            'title' => 'Whiplash - The 5st Mini Album',
            'artist_id' => 66,
            'release_date' => '2024-10-21',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'Übermensch',
            'artist_id' => 69,
            'release_date' => '2025-02-25',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => '2',
            'artist_id' => 67,
            'release_date' => '2024-01-29',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'I NEVER DIE',
            'artist_id' => 67,
            'release_date' => '2022-03-14',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'I feel',
            'artist_id' => 67,
            'release_date' => '2023-05-15',
            'album_type' => 'ep',
        ]);
        Album::create([
            'title' => 'HEAT',
            'artist_id' => 67,
            'release_date' => '2023-10-05',
            'album_type' => 'ep',
        ]);
        Album::create([
            'title' => 'HIT ME HARD AND SOFT',
            'artist_id' => 57,
            'release_date' => '2024-05-17',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'Happier Than Ever',
            'artist_id' => 57,
            'release_date' => '2024-07-30',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'CHARLIE',
            'artist_id' => 60,
            'release_date' => '2022-10-07',
            'album_type' => 'album',
        ]);
        Album::create([
            'title' => 'YUQ1',
            'artist_id' => 68,
            'release_date' => '2024-04-23',
            'album_type' => 'album',
        ]);
    }
}
