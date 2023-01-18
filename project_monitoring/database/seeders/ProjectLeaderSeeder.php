<?php

namespace Database\Seeders;

use App\Models\ProjectLeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectLeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectLeader::create([
            'name' => 'Indra Setiawan',
            'email' => 'indra.setiawan@gmail.com',
            'image' => 'indra.jpg'
        ]);
        ProjectLeader::create([
            'name' => 'Hilman Syaputera',
            'email' => 'hilman.syah@gmail.com',
            'image' => 'hilman.jpg'
        ]);
        ProjectLeader::create([
            'name' => 'Febri Gunawan',
            'email' => 'febri.gunawan@gmail.com',
            'image' => 'febri.jpg'
        ]);
        ProjectLeader::create([
            'name' => 'Handoko Aji',
            'email' => 'handoko.aji@gmail.com',
            'image' => 'handoko.jpg'
        ]);
    }
}
