<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'JobName' => 'Serambi Inspirasi',
            'JobLocation' => 'Bekasi',
            'JobSpecification' => 'Mengajar dan bermain bersama anak-anak',
            'JobGiver' => 'Budi',
            'JobPicture' => '1.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('jobs')->insert([
            'JobName' => 'Turun Tangan',
            'JobLocation' => 'YOGYAKARTA',
            'JobSpecification' => 'Inkubator gerakan sosial di bidang Politik, Sosial, Pendidikan, Kesehatan, dan Lingkungan.',
            'JobGiver' => 'Santi',
            'JobPicture' => '2.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('jobs')->insert([
            'JobName' => 'Komisi Nasional Anti Kekerasan Terhadap Perempuan',
            'JobLocation' => 'Jl. Latuharhari 4B Menteng, Jakarta 10310',
            'JobSpecification' => 'Menerima, merujuk, dan mendokumentasikan kasus-kasus individu yang dilaporkan ke Komnas Perempuan.',
            'JobGiver' => 'Lisa',
            'JobPicture' => '3.png',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('jobs')->insert([
            'JobName' => 'KOMPAK (Komunitas Orang Muda Anti Perdagangan Orang dan Eksploitasi Seksual Anak )',
            'JobLocation' => 'Tanggerang',
            'JobSpecification' => 'Menangani perdagangan orang dan eksploitasi seksual anak',
            'JobGiver' => 'Rudi',
            'JobPicture' => '4.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('jobs')->insert([
            'JobName' => 'Indonesia Student & Youth Forum',
            'JobLocation' => 'Blok M Plaza, Jakarta',
            'JobSpecification' => 'Permberdayaan dan pengembangan pemuda di berbagai bidang',
            'JobGiver' => 'Tantri',
            'JobPicture' => '5.png',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('jobs')->insert([
            'JobName' => 'Yayasan AIDS Indonesia',
            'JobLocation' => 'Jabodetabek',
            'JobSpecification' => 'Penyebarluasan informasi tentang bahaya HIV & Aids',
            'JobGiver' => 'Sita',
            'JobPicture' => '6.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('jobs')->insert([
            'JobName' => 'Indonesia Community Network',
            'JobLocation' => 'JCC Senayan',
            'JobSpecification' => 'mendukung berbagai aktivitas lintas komunitas yang dinamis di berbagai bidang misalnya hobi, visi, bahkan profesi.',
            'JobGiver' => 'Anto',
            'JobPicture' => '7.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('jobs')->insert([
            'JobName' => 'ProFauna',
            'JobLocation' => 'Sulawesi',
            'JobSpecification' => 'Menjaga Penyu Laut',
            'JobGiver' => 'Tony',
            'JobPicture' => '8.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('jobs')->insert([
            'JobName' => 'Alam Sehat Lestari',
            'JobLocation' => 'Kalimantan',
            'JobSpecification' => 'Menjaga kalimantan rainforest',
            'JobGiver' => 'Siska',
            'JobPicture' => '9.png',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('jobs')->insert([
            'JobName' => 'IDEP',
            'JobLocation' => 'Depends on Location',
            'JobSpecification' => 'Disaster planning and community improvement',
            'JobGiver' => 'Robert',
            'JobPicture' => '10.png',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
