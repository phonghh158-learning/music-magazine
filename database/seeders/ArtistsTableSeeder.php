<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vietnamese artist
        Artist::create([
            'real_name' => 'Nguyễn Thanh Tùng',
            'artist_name' => 'Sơn Tùng M-TP',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/son-tung-mtp.png',
            'artist_cover' => '/images/artist/cover/son-tung-mtp.png',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artist::create([
            'real_name' => 'Nguyễn Huỳnh Sơn',
            'artist_name' => 'SOOBIN',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Lê Nguyễn Trung Đan',
            'artist_name' => 'Binz',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Vũ Đức Thiện',
            'artist_name' => 'Rhymastic',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Hoàng Thái Vũ',
            'artist_name' => 'Vũ.',
            'bio' => '',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Hoàng Dũng',
            'artist_name' => 'Hoàng Dũng',
            'bio' => '',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Lê Phan',
            'artist_name' => 'Wren Evans',
            'bio' => '',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Thanh Tuấn',
            'artist_name' => 'Justatee',
            'bio' => '',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Hoàng Long',
            'artist_name' => 'Low G',
            'bio' => '',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Trần Tất Vũ',
            'artist_name' => 'BigDaddy',
            'bio' => '',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Phan Mạnh Quỳnh',
            'artist_name' => 'Phan Mạnh Quỳnh',
            'bio' => '',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Hà Anh Tuấn',
            'artist_name' => 'Hà Anh Tuấn',
            'bio' => '',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artist::create([
            'real_name' => 'Bùi Anh Tuấn',
            'artist_name' => 'Bùi Anh Tuấn',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Trần Minh Hiếu',
            'artist_name' => 'HIEUTHUHAI',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Phạm Bảo Khang',
            'artist_name' => 'HURRYKNG',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Da LAB - Nhóm nhạc số 2 Việt Nam',
            'artist_name' => 'Da LAB',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Hoàng Long',
            'artist_name' => 'Emcee L',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Đinh Hồng Thái',
            'artist_name' => 'Thái Đinh',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Đặng Mai Việt Hoàng',
            'artist_name' => 'GDucky',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Đức Cường',
            'artist_name' => 'Đen Vâu',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Trần Anh Khoa',
            'artist_name' => 'Kay Trần',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Lê Trung Hiếu',
            'artist_name' => 'Lê Hiếu',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Vũ Trường Giang',
            'artist_name' => 'Gill',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nhóm nhạc Chillies',
            'artist_name' => 'Chillies',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Khoa Tóc Tiên',
            'artist_name' => 'Tóc Tiên',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Hương Ly',
            'artist_name' => 'Emily',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Trương Mỹ Anh',
            'artist_name' => 'Mỹ Anh',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Trần My Anh',
            'artist_name' => 'marzuz',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Vũ Thanh Vân',
            'artist_name' => 'Vũ Thanh Vân',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Khương Hoàn Mỹ',
            'artist_name' => 'Orange',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Anh Tú',
            'artist_name' => 'Anh Tú',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Hoàng Thùy Linh',
            'artist_name' => 'Hoàng Thùy Linh',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Vũ Cát Tường',
            'artist_name' => 'Vũ Cát Tường',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Huỳnh Nữ Thủy Tiên',
            'artist_name' => 'Tiên Tiên',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Minh Hằng',
            'artist_name' => 'Min',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Lê Ánh Nhật',
            'artist_name' => 'Miu Lê',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Đức Phúc',
            'artist_name' => 'Đức Phúc',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Việt Hoàng',
            'artist_name' => 'MONO',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Ngọc Hoàng Anh',
            'artist_name' => 'onionn.',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Hoàng Tôn',
            'artist_name' => 'Hoàng Tôn',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Quách Cẩm Lê',
            'artist_name' => 'Kimmese',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Bùi Thị Bích Phương',
            'artist_name' => 'Bích Phương',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Trần Phương Ly',
            'artist_name' => 'Phương Ly',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Lê Vĩnh Hà',
            'artist_name' => 'Hà Lê',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Hoàng Kim Long',
            'artist_name' => 'Lou Hoàng',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Phúc Thạch',
            'artist_name' => 'OnlyC',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Hoàng',
            'artist_name' => 'Touliver',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Kim Long',
            'artist_name' => 'KIMLONG',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Lê Tuấn Anh',
            'artist_name' => 'Masew',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Ngô Tú',
            'artist_name' => 'Kriss Ngô',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Lê Nam Khánh',
            'artist_name' => 'itsnk',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Cao Văn Vịnh',
            'artist_name' => 'SlimV',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Dương Đại Dương',
            'artist_name' => 'TripleD',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Hoàng Phúc',
            'artist_name' => 'WOKEUPAT4AM',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Nguyễn Thị Hòa',
            'artist_name' => 'Hòa Minzy',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //International artist
        Artist::create([
            'real_name' => 'Ariana Grande-Butera',
            'artist_name' => 'Ariana Grande',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/ariana-grande.png',
            'artist_cover' => '/images/artist/cover/ariana-grande.png',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Billie Eilish Pirate Baird O\'Connell',
            'artist_name' => 'Billie Eilish',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Peter Gene Hernandez',
            'artist_name' => 'Bruno Mars',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Stefani Joanne Angelina Germanotta',
            'artist_name' => 'Lady Gaga',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Charles Otto Puth Jr.',
            'artist_name' => 'Charlie Puth',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Selena Marie Gomez',
            'artist_name' => 'Selena Gomez',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Cameron Jibril Thomaz',
            'artist_name' => 'Wiz Khalifa',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Justin Drew Bieber',
            'artist_name' => 'Justin Bieber',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Taylor Alison Swift',
            'artist_name' => 'Taylor Swift',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'K/DA',
            'artist_name' => 'K/DA',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'aespa',
            'artist_name' => 'aespa',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => '(G)I-DLE',
            'artist_name' => '(G)I-DLE',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Song Yuqi',
            'artist_name' => 'YUQI',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Kwon Ji-Yong',
            'artist_name' => 'G-DRAGON',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Dong Young-bae',
            'artist_name' => 'TAEYANG',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'XG',
            'artist_name' => 'XG',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Maroon 5',
            'artist_name' => 'Maroon 5',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'The Beatles',
            'artist_name' => 'The Beatles',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Imagine Dragons',
            'artist_name' => 'Imagine Dragons',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Edward Christopher',
            'artist_name' => 'Ed Sheeran',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Shawn Peter Raul Mendes',
            'artist_name' => 'Shawn Mendes',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/shawn-mendes.png',
            'artist_cover' => '/images/artist/cover/shawn-mendes.png',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Christopher Comstock',
            'artist_name' => 'Marshmello',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/marshmello.png',
            'artist_cover' => '/images/artist/cover/marshmello.png',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Alan Olav Walker',
            'artist_name' => 'Alan Walker',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/alan-walker.png',
            'artist_cover' => '/images/artist/cover/alan-walker.png',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Martin Garrix',
            'artist_name' => 'Martin Garrix',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/martin-garrix.png',
            'artist_cover' => '/images/artist/cover/martin-garrix.png',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Tim Bergling',
            'artist_name' => 'Avicii',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/avicii.png',
            'artist_cover' => '/images/artist/cover/avicii.png',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Calvin Harris',
            'artist_name' => 'Calvin Harris',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/calvin-harris.png',
            'artist_cover' => '/images/artist/cover/calvin-harris.png',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Adele Laurie Blue Adkins',
            'artist_name' => 'Adele',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Robyn Rihanna Fenty',
            'artist_name' => 'Rhihanna',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Beyoncé Giselle Knowles-Carter',
            'artist_name' => 'Beyoncé',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Karla Camila Cabello Estrabao',
            'artist_name' => 'Camila Cabello',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artist::create([
            'real_name' => 'Sabrina Ann Lynn Carpenter',
            'artist_name' => 'Sabrina Carpenter',
            'bio' => 'Nothing',
            'artist_avatar' => '/images/artist/avatar/',
            'artist_cover' => '/images/artist/cover/',
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
