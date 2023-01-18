<?php

namespace Database\Seeders;

use App\Models\ProjectMonitoring;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectMonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectMonitoring::create([
            'id_leader' => 1,
            'name' => 'Pembuatan SI Keuangan',
            'client' => 'Bakeuda Prov. Kalsel',
            'start_date' => '01/14/2022',
            'end_date' => '07/14/2022',
            'progress' => 30,
        ]);
    }
}
