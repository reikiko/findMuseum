<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\Museum;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        //Museums Data
        Museum::create([
            'name'=>'Museum Pos Indonesia',
            'city_id' => '1',
            'slug'=>'museum-posid',
            'excerpt'=> 'Museum Pos Indonesia merupakan museum khusus yang dibangun pada masa Hindia-Belanda pada 27 Juli 1920 dengan nama..',
            'desc'=>'Museum Pos Indonesia merupakan museum khusus yang dibangun pada masa Hindia-Belanda pada 27 Juli 1920 dengan nama Museum Pos, Telegraph, dan Telepon (PTT), dibuka tahun 1931. Bangunan museum didesain oleh arsitek bernama Ir. J. Berger dan Leutdsgebouwdienst dengan mengambil corak renaisans. Pada 19 Juni 1995 museum berganti nama menjadi Museum Pos dan Giro disesuaikan dengan perusahaan yang ',
        ]);
        Museum::create([
            'name'=>'Museum Fatahillah',
            'city_id' => '2',
            'slug'=>'museum-fatahillah',
            'excerpt'=> 'Museum Fatahillah yang memiliki nama resmi Museum Sejarah Jakarta terletak di kawasan Kota Tua..',
            'desc'=>'Museum Fatahillah yang memiliki nama resmi Museum Sejarah Jakarta terletak di kawasan Kota Tua, tepatnya di Jalan Taman Fatahillah, Jakarta Barat. Bangunan ini dahulu kala merupakan balai kota Batavia.',
        ]);
        Museum::create([
            'name'=>'Museum Batik',
            'city_id' => '3',
            'slug'=>'museum-Batik',
            'excerpt'=> 'Museum Batik Yogyakarta pertama kali didirikan pada tahun 1960-an atas prakarsa Hadi Nugroho..',
            'desc'=>'Museum Batik Yogyakarta pertama kali didirikan pada tahun 1960-an atas prakarsa Hadi Nugroho si pemilik museum. Pada awalnya, belum ada campur tangan dari pemerintah daerah Yogyakarta atas pengelolaan museum.',
        ]);
        Museum::create([
            'name'=>'Museum Sonobudoyo',
            'city_id' => '3',
            'slug'=>'museum-sonobudoyo',
            'excerpt'=> 'Realisasi pendirian museum Sonobudoyo tidak lepas dari keputusan Kongres Kebudayaan Java-Instituut tahun 1924 di..',
            'desc'=>'Realisasi pendirian museum Sonobudoyo tidak lepas dari keputusan Kongres Kebudayaan Java-Instituut tahun 1924 di Yogyakarta. Kongres Kebudayaan tersebut menghasilkan keputusan salah satunya adalah mendirikan sebuah museum di Yogyakarta.',
        ]);
        Museum::create([
            'name'=>'Museum Wayang',
            'city_id' => '2',
            'slug'=>'museum-wayang',
            'excerpt'=> 'Ketika Gubenur DKI Jakarta H.Ali Sadikin Menghadiri Pekan Wayang II Tahun 1974 dengan dukungan panitia tersebut..',
            'desc'=>'Ketika Gubenur DKI Jakarta H.Ali Sadikin Menghadiri Pekan Wayang II Tahun 1974 dengan dukungan panitia tersebut ,dan dukungan para pecinta wayang Akhirnya Menunjuk Gedung yg Terletak Di jl.pintu besar no 27 sebagai Museum Wayang.',
        ]);
        Museum::create([
            'name'=>'Museum Pendidikan Indonesia',
            'city_id' => '1',
            'slug'=>'museum-pendidikan',
            'excerpt'=> 'Museum Pendidikan merupakan perpaduan antara museum sejarah (history museums) dan museum ilmu dan teknologi..',
            'desc'=>'Museum Pendidikan merupakan perpaduan antara museum sejarah (history museums) dan museum ilmu dan teknologi yang khusus didirikan dan didedikasikan untuk upaya penyelamatan dan pelestarian peninggalan-peninggalan sejarah pendidikan.',
        ]);
        
        //Cities
        City::create([
            'name'=>'Yogyakarta',
            'slug'=>'diy',
        ]);
        City::create([
            'name'=>'Jakarta',
            'slug'=>'jkt',
        ]);
        City::create([
            'name'=>'Bandung',
            'slug'=>'bdg',
        ]);
        City::create([
            'name'=>'Makassar',
            'slug'=>'mks',
        ]);
    }
}
