<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Natalia',
            'dateofbirth' => '19981228',
            'location' => 'Jelambar',
            'gender' => 'Female',
            'email' => 'natalia@gmail.com',
            'phonenumber' => '081254676834',
            'password' => 'hello',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        
        DB::table('users')->insert([
            'name' => 'Ivan',
            'dateofbirth' => '19980307',
            'location' => 'Bekasi',
            'gender' => 'Male',
            'email' => 'ivan@gmail.com',
            'phonenumber' => '08781234567',
            'password' => 'hello',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name' => 'Alexandra',
            'dateofbirth' => '19971228',
            'location' => 'Bogor',
            'gender' => 'Female',
            'email' => 'alexandra@gmail.com',
            'phonenumber' => '081298535620',
            'password' => 'hello',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name' => 'Kevin',
            'dateofbirth' => '19981120',
            'location' => 'Jakarta Pusat',
            'gender' => 'Male',
            'email' => 'kevin@gmail.com',
            'phonenumber' => '0898349586',
            'password' => 'hello',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('users')->insert([
            'name' => 'Yvonne',
            'dateofbirth' => '19980517',
            'location' => 'Pluit',
            'gender' => 'Female',
            'email' => 'yvonne@gmail.com',
            'phonenumber' => '081267883742',
            'password' => 'hello',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
