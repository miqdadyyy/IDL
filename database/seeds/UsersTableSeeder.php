<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'himasif',
            'email' => 'himasif@ilkom.com',
            'id_ormawa' => \App\Ormawa::where('nama_ormawa' ,'Himasif')->first()->id,
            'password' => bcrypt('himasif123'),
        ]);


        DB::table('users')->insert([
            'name' => 'himatif',
            'email' => 'himatif@ilkom.com',
            'id_ormawa' => \App\Ormawa::where('nama_ormawa' ,'Himatif')->first()->id,
            'password' => bcrypt('himatif321'),
        ]);

        DB::table('users')->insert([
            'name' => 'laos',
            'email' => 'laos@ilkom.com',
            'id_ormawa' => \App\Ormawa::where('nama_ormawa' ,'Laos')->first()->id,
            'password' => bcrypt('laos123321'),
        ]);
    }
}
