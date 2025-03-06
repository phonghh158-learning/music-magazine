<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Album Armageddon - aespa
        Song::create([
            'title' => 'Supernova',
            'album_id' => 11,
            'duration' => 189,
        ]);
        Song::create([
            'title' => 'Armageddon',
            'album_id' => 11,
            'duration' => 203,
        ]);
        Song::create([
            'title' => 'Set The Tone',
            'album_id' => 11,
            'duration' => 197,
        ]);
        Song::create([
            'title' => 'Mine',
            'album_id' => 11,
            'duration' => 215,
        ]);
        Song::create([
            'title' => 'Licorice',
            'album_id' => 11,
            'duration' => 220,
        ]);
        Song::create([
            'title' => 'BAHAMA',
            'album_id' => 11,
            'duration' => 205,
        ]);
        Song::create([
            'title' => 'Long Chat (#&#9829;)',
            'album_id' => 11,
            'duration' => 210,
        ]);
        Song::create([
            'title' => 'Prologue',
            'album_id' => 11,
            'duration' => 200,
        ]);
        Song::create([
            'title' => 'Live My Life',
            'album_id' => 11,
            'duration' => 225,
        ]);
        Song::create([
            'title' => '목소리 (Melody)',
            'album_id' => 11,
            'duration' => 230,
        ]);

        //Album SYNK - aespa
        Song::create([
            'title' => 'Up - Karina',
            'album_id' => 12,
            'duration' => 189,
        ]);
        
        Song::create([
            'title' => 'Dopamine - Giselle',
            'album_id' => 12,
            'duration' => 203,
        ]);
        
        Song::create([
            'title' => 'Bored! - ningning',
            'album_id' => 12,
            'duration' => 197,
        ]);
        
        Song::create([
            'title' => 'Spark - winter',
            'album_id' => 12,
            'duration' => 215,
        ]);

        //Album Whiplash - aespa
        Song::create([
            'title' => 'Whiplash',
            'album_id' => 13,
            'duration' => 210,
        ]);
        
        Song::create([
            'title' => 'Kill It',
            'album_id' => 13,
            'duration' => 195,
        ]);
        
        Song::create([
            'title' => 'Flights, Not Feelings',
            'album_id' => 13,
            'duration' => 200,
        ]);
        
        Song::create([
            'title' => 'Pink Hoodie',
            'album_id' => 13,
            'duration' => 180,
        ]);
        
        Song::create([
            'title' => 'Flowers',
            'album_id' => 13,
            'duration' => 220,
        ]);
        
        Song::create([
            'title' => 'Just Another Girl',
            'album_id' => 13,
            'duration' => 205,
        ]);

        //Übermensch - GD
        Song::create([
            'title' => 'Home Sweet Home',
            'album_id' => 14,
            'duration' => 210,
        ]);
        
        Song::create([
            'title' => 'Power',
            'album_id' => 14,
            'duration' => 195,
        ]);
        
        Song::create([
            'title' => 'Too Bad',
            'album_id' => 14,
            'duration' => 200,
        ]);
        
        Song::create([
            'title' => 'Drama',
            'album_id' => 14,
            'duration' => 180,
        ]);
        
        Song::create([
            'title' => 'IBELONGIIU',
            'album_id' => 14,
            'duration' => 220,
        ]);
        
        Song::create([
            'title' => 'Take Me',
            'album_id' => 14,
            'duration' => 205,
        ]);
        
        Song::create([
            'title' => 'Bonamana',
            'album_id' => 14,
            'duration' => 215,
        ]);
        
        Song::create([
            'title' => 'Gyro-Drop',
            'album_id' => 14,
            'duration' => 190,
        ]);

        //2 of gidle
        Song::create([
            'title' => 'Super Lady',
            'album_id' => 15,
            'duration' => 210,
        ]);
        
        Song::create([
            'title' => 'Fate',
            'album_id' => 15,
            'duration' => 195,
        ]);
        
        Song::create([
            'title' => 'Revenge',
            'album_id' => 15,
            'duration' => 200,
        ]);
        
        Song::create([
            'title' => 'Doll',
            'album_id' => 15,
            'duration' => 180,
        ]);
        
        Song::create([
            'title' => 'Vision',
            'album_id' => 15,
            'duration' => 220,
        ]);
        
        Song::create([
            'title' => '7 Days',
            'album_id' => 15,
            'duration' => 205,
        ]);
        
        Song::create([
            'title' => 'Rollie',
            'album_id' => 15,
            'duration' => 215,
        ]);
        
        Song::create([
            'title' => 'Wife',
            'album_id' => 15,
            'duration' => 190,
        ]);

        //I NEVER DIE of gidle
        Song::create([
            'title' => 'TOMBOY',
            'album_id' => 16,
            'duration' => 174,
        ]);
        
        Song::create([
            'title' => 'Never Stop Me',
            'album_id' => 16,
            'duration' => 144,
        ]);
        
        Song::create([
            'title' => 'VILLAIN DIES',
            'album_id' => 16,
            'duration' => 184,
        ]);
        
        Song::create([
            'title' => 'ALREADY',
            'album_id' => 16,
            'duration' => 201,
        ]);
        
        Song::create([
            'title' => 'POLAROID',
            'album_id' => 16,
            'duration' => 218,
        ]);
        
        Song::create([
            'title' => 'ESCAPE',
            'album_id' => 16,
            'duration' => 209,
        ]);
        
        Song::create([
            'title' => 'LIAR',
            'album_id' => 16,
            'duration' => 171,
        ]);
        
        Song::create([
            'title' => 'MY BAG',
            'album_id' => 16,
            'duration' => 160,
        ]);

        //I feel of gidle
        Song::create([
            'title' => 'Queencard',
            'album_id' => 17,
            'duration' => 174,
        ]);
        
        Song::create([
            'title' => 'Allergy',
            'album_id' => 17,
            'duration' => 180,
        ]);
        
        Song::create([
            'title' => 'Lucid',
            'album_id' => 17,
            'duration' => 210,
        ]);
        
        Song::create([
            'title' => 'All Night',
            'album_id' => 17,
            'duration' => 195,
        ]);
        
        Song::create([
            'title' => 'Paradise',
            'album_id' => 17,
            'duration' => 200,
        ]);
        
        Song::create([
            'title' => 'Peter Pan',
            'album_id' => 17,
            'duration' => 185,
        ]);
        
        //HEAT of gidle
        Song::create([
            'title' => 'I Do',
            'album_id' => 18,
            'duration' => 180,
        ]);
        
        Song::create([
            'title' => 'I Want That',
            'album_id' => 18,
            'duration' => 175,
        ]);
        
        Song::create([
            'title' => 'Eyes Roll',
            'album_id' => 18,
            'duration' => 190,
        ]);
        
        Song::create([
            'title' => 'Flip It',
            'album_id' => 18,
            'duration' => 185,
        ]);
        
        Song::create([
            'title' => 'Tall Trees',
            'album_id' => 18,
            'duration' => 200,
        ]);
        
        //HIT ME HARD AND SOFT of Billies Eilish
        Song::create([
            'title' => 'The Diner',
            'album_id' => 19,
            'duration' => 210,
        ]);
        
        Song::create([
            'title' => 'Lunch',
            'album_id' => 19,
            'duration' => 195,
        ]);
        
        Song::create([
            'title' => 'Chihiro',
            'album_id' => 19,
            'duration' => 180,
        ]);
        
        Song::create([
            'title' => 'Wildflower',
            'album_id' => 19,
            'duration' => 220,
        ]);
        
        Song::create([
            'title' => 'L\'Amour de Ma Vie',
            'album_id' => 19,
            'duration' => 200,
        ]);
        
        Song::create([
            'title' => 'Birds of a Feather',
            'album_id' => 19,
            'duration' => 215,
        ]);
        
        Song::create([
            'title' => 'Everything I Wanted',
            'album_id' => 19,
            'duration' => 190,
        ]);
        
        Song::create([
            'title' => 'Bury a Friend',
            'album_id' => 19,
            'duration' => 205,
        ]);
        
        Song::create([
            'title' => 'Oxytocin',
            'album_id' => 19,
            'duration' => 175,
        ]);
        
        Song::create([
            'title' => 'Bad Guy',
            'album_id' => 19,
            'duration' => 190,
        ]);
        
        //happier than ever of Billies Eilish
        Song::create([
            'title' => 'Getting Older',
            'album_id' => 20,
            'duration' => 245,
        ]);

        Song::create([
            'title' => 'I Didn\'t Change My Number',
            'album_id' => 20,
            'duration' => 178,
        ]);

        Song::create([
            'title' => 'Billie Bossa Nova',
            'album_id' => 20,
            'duration' => 196,
        ]);

        Song::create([
            'title' => 'My Future',
            'album_id' => 20,
            'duration' => 210,
        ]);

        Song::create([
            'title' => 'Oxytocin',
            'album_id' => 20,
            'duration' => 210,
        ]);

        Song::create([
            'title' => 'GOLDWING',
            'album_id' => 20,
            'duration' => 154,
        ]);

        Song::create([
            'title' => 'Lost Cause',
            'album_id' => 20,
            'duration' => 198,
        ]);

        Song::create([
            'title' => 'Halley’s Comet',
            'album_id' => 20,
            'duration' => 240,
        ]);

        Song::create([
            'title' => 'Not My Responsibility',
            'album_id' => 20,
            'duration' => 200,
        ]);

        Song::create([
            'title' => 'OverHeated',
            'album_id' => 20,
            'duration' => 205,
        ]);

        Song::create([
            'title' => 'Everybody Dies',
            'album_id' => 20,
            'duration' => 225,
        ]);

        Song::create([
            'title' => 'Your Power',
            'album_id' => 20,
            'duration' => 244,
        ]);

        Song::create([
            'title' => 'NDA',
            'album_id' => 20,
            'duration' => 201,
        ]);

        Song::create([
            'title' => 'Therefore I Am',
            'album_id' => 20,
            'duration' => 174,
        ]);

        Song::create([
            'title' => 'Happier Than Ever',
            'album_id' => 20,
            'duration' => 298,
        ]);

        Song::create([
            'title' => 'Male Fantasy',
            'album_id' => 20,
            'duration' => 211,
        ]);

        //CHARLIE of Charlie Puth
        Song::create([
            'title' => 'That\'s Hilarious',
            'album_id' => 21,
            'duration' => 157,
        ]);
        
        Song::create([
            'title' => 'Charlie Be Quiet!',
            'album_id' => 21,
            'duration' => 161,
        ]);
        
        Song::create([
            'title' => 'Light Switch',
            'album_id' => 21,
            'duration' => 188,
        ]);
        
        Song::create([
            'title' => 'There’s A First Time for Everything',
            'album_id' => 21,
            'duration' => 172,
        ]);
        
        Song::create([
            'title' => 'Smells Like Me',
            'album_id' => 21,
            'duration' => 192,
        ]);
        
        Song::create([
            'title' => 'Left and Right (feat. Jung Kook)',
            'album_id' => 21,
            'duration' => 164,
        ]);
        
        Song::create([
            'title' => 'Loser',
            'album_id' => 21,
            'duration' => 180,
        ]);
        
        Song::create([
            'title' => 'When You’re Sad I’m Sad',
            'album_id' => 21,
            'duration' => 166,
        ]);
        
        Song::create([
            'title' => 'Marks On My Neck',
            'album_id' => 21,
            'duration' => 194,
        ]);
        
        Song::create([
            'title' => 'Tears On My Piano',
            'album_id' => 21,
            'duration' => 198,
        ]);
        
        Song::create([
            'title' => 'I Don’t Think That I Like Her',
            'album_id' => 21,
            'duration' => 175,
        ]);
        
        Song::create([
            'title' => 'No More Drama',
            'album_id' => 21,
            'duration' => 171,
        ]);

        //YUQ1 of YUQI
        Song::create([
            'title' => 'FREAK',
            'album_id' => 22,
            'duration' => 171,
        ]);
        Song::create([
            'title' => 'My Way',
            'album_id' => 22,
            'duration' => 168,
        ]);
        Song::create([
            'title' => 'Drink It Up',
            'album_id' => 22,
            'duration' => 196,
        ]);
        Song::create([
            'title' => 'Red Rover',
            'album_id' => 22,
            'duration' => 123,
        ]);
        Song::create([
            'title' => 'On Clap',
            'album_id' => 22,
            'duration' => 118,
        ]);
        Song::create([
            'title' => 'Everytime',
            'album_id' => 22,
            'duration' => 191,
        ]);
        Song::create([
            'title' => 'Could It Be',
            'album_id' => 22,
            'duration' => 189,
        ]);

        //BATNOLEN of SOOBIN
        Song::create([
            'title' => 'Intro',
            'album_id' => 1,
            'duration' => 59,
        ]);
        Song::create([
            'title' => 'DANCING IN THE DARK',
            'album_id' => 1,
            'duration' => 227,
        ]);
        Song::create([
            'title' => 'Sunset In The City',
            'album_id' => 1,
            'duration' => 225,
        ]);
        Song::create([
            'title' => 'Sẽ Quên Em Nhanh Thôi',
            'album_id' => 1,
            'duration' => 175,
        ]);
        Song::create([
            'title' => 'giá như',
            'album_id' => 1,
            'duration' => 223,
        ]);
        Song::create([
            'title' => 'IAi Mà Biết Được',
            'album_id' => 1,
            'duration' => 240,
        ]);
        Song::create([
            'title' => 'Bật Nó Lên',
            'album_id' => 1,
            'duration' => 233,
        ]);
        Song::create([
            'title' => 'Heyyy',
            'album_id' => 1,
            'duration' => 197,
        ]);
        Song::create([
            'title' => 'Luật Anh',
            'album_id' => 1,
            'duration' => 199,
        ]);
        Song::create([
            'title' => 'Lu Mờ',
            'album_id' => 1,
            'duration' => 225,
        ]);

        //the playah - soobin
        Song::create([
            'title' => 'Trò Chơi',
            'album_id' => 2,
            'duration' => 196,
        ]);
        
        Song::create([
            'title' => 'BlackJack',
            'album_id' => 2,
            'duration' => 196,
        ]);
        
        Song::create([
            'title' => 'Tháng Năm',
            'album_id' => 2,
            'duration' => 225,
        ]);

        //Keep Cầm Ca - Binz
        Song::create([
            'title' => 'Hồn Lỡ Sa Vào',
            'album_id' => 3,
            'duration' => 225,
        ]);
        
        Song::create([
            'title' => 'Chưa Yêu Lần Nào',
            'album_id' => 3,
            'duration' => 210,
        ]);
        
        Song::create([
            'title' => 'Đêm Vũ Trường',
            'album_id' => 3,
            'duration' => 240,
        ]);
        
        Song::create([
            'title' => 'Duyên Kiếp Cầm Ca',
            'album_id' => 3,
            'duration' => 270,
        ]);
        
        Song::create([
            'title' => 'Rượu Độc',
            'album_id' => 3,
            'duration' => 180,
        ]);
        
        //LOV6 - Rhymastic
        Song::create([
            'title' => 'Y6u (Yêu 6)',
            'album_id' => 4,
            'duration' => 232,
        ]);
        
        Song::create([
            'title' => 'Líu La Líu Lo',
            'album_id' => 4,
            'duration' => 185,
        ]);
        
        Song::create([
            'title' => 'Side Effects',
            'album_id' => 4,
            'duration' => 273,
        ]);
        
        Song::create([
            'title' => 'Ngổn Ngang',
            'album_id' => 4,
            'duration' => 194,
        ]);
        
        Song::create([
            'title' => 'Vẫn Yêu',
            'album_id' => 4,
            'duration' => 182,
        ]);
        
        Song::create([
            'title' => 'Thêm Đứa Nữa',
            'album_id' => 4,
            'duration' => 207,
        ]);
        
        //Bảo Tàng Của Nuối Tiếc - Vũ.
        Song::create([
            'title' => 'Nếu Những Tiếc Nuối',
            'album_id' => 5,
            'duration' => 284,
        ]);
        
        Song::create([
            'title' => 'Mùa Mưa Ấy',
            'album_id' => 5,
            'duration' => 251,
        ]);
        
        Song::create([
            'title' => 'Ngồi Chờ Trong Vấn Vương',
            'album_id' => 5,
            'duration' => 312,
        ]);
        
        Song::create([
            'title' => 'Dành Hết Xuân Thì Để Chờ Nhau',
            'album_id' => 5,
            'duration' => 298,
        ]);
        
        Song::create([
            'title' => 'Và Em Sẽ Luôn Là Người Tôi Yêu Nhất',
            'album_id' => 5,
            'duration' => 276,
        ]);
        
        Song::create([
            'title' => 'Những Chuyến Bay',
            'album_id' => 5,
            'duration' => 243,
        ]);
        
        Song::create([
            'title' => 'Mây Khóc Vì Điều Gì',
            'album_id' => 5,
            'duration' => 267,
        ]);
        
        Song::create([
            'title' => 'Những Lời Hứa Bỏ Quên',
            'album_id' => 5,
            'duration' => 289,
        ]);
        
        Song::create([
            'title' => 'Không Yêu Em Thì Yêu Ai?',
            'album_id' => 5,
            'duration' => 261,
        ]);
        
        Song::create([
            'title' => 'bình yên',
            'album_id' => 5,
            'duration' => 305,
        ]);

        //Một Vạn Năm - Vũ.
        Song::create([
            'title' => 'Cuộc Đối Thoại Không Hồi Kết',
            'album_id' => 6,
            'duration' => 276,
        ]);
        
        Song::create([
            'title' => 'Bước Qua Nhau',
            'album_id' => 6,
            'duration' => 257,
        ]);
        
        Song::create([
            'title' => 'Chậm Lại',
            'album_id' => 6,
            'duration' => 253,
        ]);
        
        Song::create([
            'title' => 'Nhường Lại Em',
            'album_id' => 6,
            'duration' => 215,
        ]);
        
        Song::create([
            'title' => 'Sau Chia Tay Ta Còn Gì?',
            'album_id' => 6,
            'duration' => 282,
        ]);
        
        Song::create([
            'title' => 'Chợt Nhìn Nhau',
            'album_id' => 6,
            'duration' => 181,
        ]);
        
        Song::create([
            'title' => 'Như Một Lời Hứa',
            'album_id' => 6,
            'duration' => 264,
        ]);
        
        //25 - Hoàng Dũng
        Song::create([
            'title' => 'Nàng Thơ',
            'album_id' => 7,
            'duration' => 245,
        ]);
        
        Song::create([
            'title' => 'Thói Quen',
            'album_id' => 7,
            'duration' => 210,
        ]);
        
        Song::create([
            'title' => 'Chia Tay',
            'album_id' => 7,
            'duration' => 198,
        ]);
        
        Song::create([
            'title' => 'Vì Một Câu Nói',
            'album_id' => 7,
            'duration' => 230,
        ]);
        
        Song::create([
            'title' => 'Ngủ Đi Để Thấy Nhau Còn Hồn Nhiên',
            'album_id' => 7,
            'duration' => 260,
        ]);
        
        Song::create([
            'title' => 'Bụi',
            'album_id' => 7,
            'duration' => 215,
        ]);
        
        Song::create([
            'title' => 'Nửa Thập Kỷ',
            'album_id' => 7,
            'duration' => 240,
        ]);
        
        Song::create([
            'title' => 'Bữa Tiệc Của Những Giác Quan',
            'album_id' => 7,
            'duration' => 275,
        ]);
        
        Song::create([
            'title' => 'Về Nhà',
            'album_id' => 7,
            'duration' => 225,
        ]);
        
        //Yên - Hoàng Dũng
        Song::create([
            'title' => 'Yên - Intro',
            'album_id' => 8,
            'duration' => 84,
        ]);
        Song::create([
            'title' => 'Ném Câu Yêu Vào Trong Không Trung',
            'album_id' => 8,
            'duration' => 236,
        ]);
        Song::create([
            'title' => 'Đôi Mươi',
            'album_id' => 8,
            'duration' => 260,
        ]);
        Song::create([
            'title' => 'Đoạn Kết Mới',
            'album_id' => 8,
            'duration' => 294,
        ]);
        
        //LOI CHOI - Wren Evans
        Song::create([
            'title' => 'Phóng Đổ Tim Em',
            'album_id' => 9,
            'duration' => 134,
        ]);
        
        Song::create([
            'title' => 'Call Me',
            'album_id' => 9,
            'duration' => 214,
        ]);
        
        Song::create([
            'title' => 'Cầu Vĩnh Tuy',
            'album_id' => 9,
            'duration' => 151,
        ]);
        
        Song::create([
            'title' => 'Từng Quen',
            'album_id' => 9,
            'duration' => 174,
        ]);
        
        Song::create([
            'title' => 'Bé Ơi Từ Từ',
            'album_id' => 9,
            'duration' => 200,
        ]);
        
        Song::create([
            'title' => 'Lối Chơi (Interlude)',
            'album_id' => 9,
            'duration' => 142,
        ]);
        
        Song::create([
            'title' => 'Tình Yêu Vĩ Mô',
            'album_id' => 9,
            'duration' => 183,
        ]);
        
        Song::create([
            'title' => 'Việt Kiều',
            'album_id' => 9,
            'duration' => 170,
        ]);
        
        Song::create([
            'title' => 'ĐĐĐ',
            'album_id' => 9,
            'duration' => 217,
        ]);
        
        Song::create([
            'title' => 'Quyền Anh',
            'album_id' => 9,
            'duration' => 179,
        ]);
        
        Song::create([
            'title' => 'Tò Te Tí',
            'album_id' => 9,
            'duration' => 195,
        ]);
        
        //Yêu Rồi Yêu Rồi Yêu - Tóc Tiên
        Song::create([
            'title' => 'Trên Chuyến Xe Lên Đà Lạt Chiều Nay',
            'album_id' => 10,
            'duration' => 233,
        ]);
        Song::create([
            'title' => 'Từ Những Thói Quen',
            'album_id' => 10,
            'duration' => 254,
        ]);
        Song::create([
            'title' => 'Mình Yêu Đến Đây Thôi',
            'album_id' => 10,
            'duration' => 285,
        ]);
        Song::create([
            'title' => 'Em Đã Có Người Mới',
            'album_id' => 10,
            'duration' => 200,
        ]);
    }
}
