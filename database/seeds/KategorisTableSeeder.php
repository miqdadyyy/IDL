<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris =
            [
                'Himasif' => ['PPL', 'Game', 'Bisnis TIK', 'Smart City'],
                'Himatif' => ['UI/UX', 'IOT'],
                'Laos' => ['CPC', 'CTF']
            ];

        foreach($kategoris as $ormawa => $kategori){
            foreach($kategori as $k){
                DB::table('kategoris')->insert([
                    'id_ormawa' => \App\Ormawa::where('nama_ormawa' , $ormawa)->first()->id,
                    'nama_kategori' => $k
                ]);
            }
        }
    }
}
