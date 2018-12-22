<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => 'Bambang',
            'position' => 'Staff',
            'location' => 'Pluit',
            'gender' => 'Male',
            'email' => 'bambang@gmail.com',
            'phonenumber' => '012456746',
            'password' => 'bambang123',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('admin')->insert([
            'name' => 'Susanna',
            'position' => 'Manager',
            'location' => 'Surabaya',
            'gender' => 'Female',
            'email' => 'susanna@gmail.com',
            'phonenumber' => '012446746',
            'password' => 'susanna123',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('admin')->insert([
            'name' => 'Joko Triyono',
            'position' => 'Staff',
            'location' => 'Palmerah',
            'gender' => 'Male',
            'email' => 'joko@gmail.com',
            'phonenumber' => '021345687',
            'password' => 'joko123',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('admin')->insert([
            'name' => 'Yesana',
            'position' => 'HRD',
            'location' => 'Kebon Jeruk',
            'gender' => 'Female',
            'email' => 'yesana@gmail.com',
            'phonenumber' => '983746',
            'password' => 'yesana123',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('admin')->insert([
            'name' => 'Harry',
            'position' => 'Staff',
            'location' => 'Bandung',
            'gender' => 'Male',
            'email' => 'harry@gmail.com',
            'phonenumber' => '0218379305',
            'password' => 'harryg123',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
