<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('items')->insert([
            'title' => 'Camera',
            'description' => 'High quality camera',
            'rating' => '5',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Sony',
            'price' => 2999,
            'category' => 'photo_audio_video',
            'img' => './img/Featured/lens-3143893_640.jpg',
        ]);

        //2
        DB::table('items')->insert([
            'title' => 'Earphones',
            'description' => 'Earphones with jack connector',
            'rating' => '4',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Samsung',
            'price' => 99,
            'category' => 'photo_audio_video',
            'img' => './img/Featured/earphones-791188_640.jpg',
        ]);

        //3
        DB::table('items')->insert([
            'title' => 'Apple watch',
            'description' => 'Smart watch for Apple users',
            'rating' => '5',
            'specs' => 'good',
            'color' => 'white',
            'brand' => 'Apple',
            'price' => 499,
            'category' => 'smartwatches',
            'img' => './img/Featured/smart-watch-821559_640.jpg',
        ]);

        //4
        DB::table('items')->insert([
            'title' => 'Drone',
            'description' => 'Drone with miniature camera',
            'rating' => '5',
            'specs' => 'good',
            'color' => 'white',
            'brand' => 'Dell',
            'price' => 244,
            'category' => 'photo_audio_video',
            'img' => './img/All/drone.jpg',
        ]);

        //5
        DB::table('items')->insert([
            'title' => 'Electronic tablet',
            'description' => 'Tablet for everyone',
            'rating' => '3',
            'specs' => 'good',
            'color' => 'white',
            'brand' => 'Samsung',
            'price' => 199,
            'category' => 'office',
            'img' => './img/All/electronic_tablet.jpg',
        ]);

        //6
        DB::table('items')->insert([
            'title' => 'Lawn mower',
            'description' => 'Robotic mower',
            'rating' => '5',
            'specs' => 'good',
            'color' => 'green',
            'brand' => 'Dell',
            'price' => 499,
            'category' => 'office',
            'img' => './img/All/robot-mower.jpg',
        ]);

        //7
        DB::table('items')->insert([
            'title' => 'Playstation 5',
            'description' => 'Newest gaming console on the market',
            'rating' => '4',
            'specs' => 'good',
            'color' => 'white',
            'brand' => 'Sony',
            'price' => 549,
            'category' => 'gaming_devices',
            'img' => './img/PS5.jpg',
        ]);


        //8
        DB::table('items')->insert([
            'title' => 'Playstation 4',
            'description' => 'Gaming console from Sony',
            'rating' => '3',
            'specs' => 'good',
            'color' => 'white',
            'brand' => 'Sony',
            'price' => 349,
            'category' => 'gaming_devices',
            'img' => './img/slider-ps4.jpg',
        ]);

        //9
        DB::table('items')->insert([
            'title' => 'RED cinema camera',
            'description' => 'Professionals camera of choice',
            'rating' => '2',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Sony',
            'price' => 13549,
            'category' => 'photo_audio_video',
            'img' => './img/red_cinema.jpg',
        ]);

        //10
        DB::table('items')->insert([
            'title' => 'Blackmagic URSA mini',
            'description' => 'First 12K camera',
            'rating' => '5',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Apple',
            'price' => 8435,
            'category' => 'photo_audio_video',
            'img' => './img/All/blackmagic-ursa-mini-pro-46k-bluetooth-.jpg',
        ]);

        //11
        DB::table('items')->insert([
            'title' => 'GoPro Hero 3',
            'description' => 'Best action camera money can buy',
            'rating' => '1',
            'specs' => 'good',
            'color' => 'gray',
            'brand' => 'Dell',
            'price' => 435,
            'category' => 'photo_audio_video',
            'img' => './img/gopro.jpg',
        ]);

        //12
        DB::table('items')->insert([
            'title' => 'GoPro Max',
            'description' => 'Action camera with 360° view',
            'rating' => '4',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Samsung',
            'price' => 8435,
            'category' => 'photo_audio_video',
            'img' => './img/All/media_4309128.jpg',
        ]);

        //13
        DB::table('items')->insert([
            'title' => 'Nikon Coolpix',
            'description' => 'Digital camera from nikon',
            'rating' => '1',
            'specs' => 'good',
            'color' => 'green',
            'brand' => 'Sony',
            'price' => 8435,
            'category' => 'photo_audio_video',
            'img' => './img/nikon_coolpix.jpg',
        ]);

        //14
        DB::table('items')->insert([
            'title' => 'Nikon Coolpix',
            'description' => 'Digital camera from nikon',
            'rating' => '1',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Sony',
            'price' => 8435,
            'category' => 'photo_audio_video',
            'img' => './img/nikon_coolpix.jpg',
        ]);

        //15
        DB::table('items')->insert([
            'title' => 'Samsung TV',
            'description' => 'New 4K LED TV from Samsung',
            'rating' => '4',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Samsung',
            'price' => 3248,
            'category' => 'tvs',
            'img' => './img/Featured/tv-627876_640.jpg',
        ]);

        //16
        DB::table('items')->insert([
            'title' => 'Iphone 12',
            'description' => 'The latest and best you can get from Apple',
            'rating' => '3',
            'specs' => 'good',
            'color' => 'green',
            'brand' => 'Apple',
            'price' => 1299,
            'category' => 'mobile_phones',
            'img' => './img/All/iphonemini23-1280x720.jpg',
        ]);

        //17
        DB::table('items')->insert([
            'title' => 'Dell XPS 15',
            'description' => 'Sleek design, unlimited performance, this is the new XPS',
            'rating' => '5',
            'specs' => 'good',
            'color' => 'gray',
            'brand' => 'Dell',
            'price' => 2499,
            'category' => 'notebooks',
            'img' => './img/dell_xps.jpg',
        ]);

        //18
        DB::table('items')->insert([
            'title' => 'Macbook Air M1',
            'description' => 'Laptop built on the newest ARM architecture',
            'rating' => '3',
            'specs' => 'good',
            'color' => 'white',
            'brand' => 'Apple',
            'price' => 1399,
            'category' => 'notebooks',
            'img' => './img/macbook.jpg',
        ]);

        //19
        DB::table('items')->insert([
            'title' => 'Xbox Series X',
            'description' => 'Newest gaming console from microsoft',
            'rating' => '4',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Dell',
            'price' => 499,
            'category' => 'gaming_devices',
            'img' => './img/xbox.jpg',
        ]);

        //20
        DB::table('items')->insert([
            'title' => 'Huawei Mate X',
            'description' => 'Concept phone became a reality',
            'rating' => '2',
            'specs' => 'good',
            'color' => 'green',
            'brand' => 'Samsung',
            'price' => 1399,
            'category' => 'mobile_phones',
            'img' => './img/matex.jpg',
        ]);

        //21
        DB::table('items')->insert([
            'title' => 'Asus monitor',
            'description' => 'ASUS ROG ultrawide gaming monitor',
            'rating' => '4',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Sony',
            'price' => 1899,
            'category' => 'monitors',
            'img' => './img/asus.jpg',
        ]);

        //22
        DB::table('items')->insert([
            'title' => 'Setup',
            'description' => 'Comfortable setup',
            'rating' => '4',
            'specs' => 'good',
            'color' => 'black',
            'brand' => 'Sony',
            'price' => 299,
            'category' => 'photo_audio_video',
            'img' => './img/slider-setup.jpg',
        ]);
    }

}
