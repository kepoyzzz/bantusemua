<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
class DonateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donations')->insert([
            'donatePicture' => 'img1.jpg',
            'donateTitle' => 'Peduli Banjir Bima',
            'requesterDonation' => 'Aksi Cepat Tanggap',
            'totalDonation' => 5000000,
            'targetDonation' => 100000000,
            'donateTime' => '2018/12/31',
            'descriptionDonation' => 'Donasi untuk bantuan evakuasi warga, bahan pangan, serta pelayanan kesehatan',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('donations')->insert([
            'donatePicture' => 'img2.jpg',
            'donateTitle' => 'Pembangunan Masjid Nurul Iman',
            'requesterDonation' => 'Yayasan Masjid Nurul Iman',
            'totalDonation' => 50000000,
            'targetDonation' => 350000000,
            'donateTime' => '2019/02/15',
            'descriptionDonation' => 'Pengembangan dan Pembangunan Masjid Nurul Iman',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('donations')->insert([
            'donatePicture' => 'img3.jpg',
            'donateTitle' => 'Peduli Banjir Garut',
            'requesterDonation' => 'Aksi Cepat Tanggap',
            'totalDonation' => 60000000,
            'targetDonation' => 1000000000,
            'donateTime' => '2019/05/21',
            'descriptionDonation' => 'Donasi untuk memenuhi kebutuhan korban bencana banjir garut',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('donations')->insert([
            'donatePicture' => 'img4.jpeg',
            'donateTitle' => 'Pray For Banten & Lampung',
            'requesterDonation' => 'CT ARSA FOUNDATION',
            'totalDonation' => 567000000,
            'targetDonation' => 2000000000,
            'donateTime' => '2019/03/21',
            'descriptionDonation' => 'Donasi untuk korban bencana Tsunami Selat Sunda dan sekitarnya',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('donations')->insert([
            'donatePicture' => 'img5.jpg',
            'donateTitle' => 'Donasi Untuk Lombok',
            'requesterDonation' => 'WingkorollsPeduli',
            'totalDonation' => 234000000,
            'targetDonation' => 1200000000,
            'donateTime' => '2019/02/10',
            'descriptionDonation' => 'Donasi untuk lombok berupa selimut,pakaian,dan sembako',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('donations')->insert([
            'donatePicture' => 'img6.jpg',
            'donateTitle' => 'Peduli Korban Bencana Palu & Donggala',
            'requesterDonation' => 'OKP GANESPA',
            'totalDonation' => 400000000,
            'targetDonation' => 800000000,
            'donateTime' => '2019/06/23',
            'descriptionDonation' => 'Donasi untuk korban bencana Palu & Donggala',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('donations')->insert([
            'donatePicture' => 'img7.jpg',
            'donateTitle' => 'Donasi Musibah Bencana Alam Gempa & Tsunami di Palu & Donggala Sulawesi Tengah',
            'requesterDonation' => 'Tarbiyah Sunnah Peduli',
            'totalDonation' => 340000000,
            'targetDonation' => 1200000000,
            'donateTime' => '2019/01/01',
            'descriptionDonation' => 'Donasi untuk memenuhi kebutuhan korban bencana',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('donations')->insert([
            'donatePicture' => 'img8.jpg',
            'donateTitle' => 'Peduli Tsunami Selat Sunda',
            'requesterDonation' => 'Yayasan Praktek Psikolog Indonesia',
            'totalDonation' => 270000000,
            'targetDonation' => 500000000,
            'donateTime' => '2019/07/14',
            'descriptionDonation' => 'YPPI dan IMHA berkerja sama dengan PFA untuk membantu saudara kita yg sedang tertimpa bencana alam',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('donations')->insert([
            'donatePicture' => 'img9.jpg',
            'donateTitle' => 'Peduli Gempa Aceh',
            'requesterDonation' => 'ACT Indonesia',
            'totalDonation' => 350000000,
            'targetDonation' => 1000000000,
            'donateTime' => '2019/01/19',
            'descriptionDonation' => 'Donasi untuk Gempa Tektonik yang mengguncang aceh',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('donations')->insert([
            'donatePicture' => 'img10.jpg',
            'donateTitle' => 'Save Muslim Rohingya & Bangladesh',
            'requesterDonation' => 'Peduli Muslim',
            'totalDonation' => 350000000,
            'targetDonation' => 500000000,
            'donateTime' => '2019/02/08',
            'descriptionDonation' => 'Salurkan donasi untuk muslim yg tinggal di Rohingya',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);


    }
}
