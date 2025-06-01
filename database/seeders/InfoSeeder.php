<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\information;
use Illuminate\Support\Facades\File;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/information.json');
        $info =  collect(json_decode($json));

        $info->each(function($data)
        {
            information::create([
                's_id' => $data->s_id,
                'info' => $data->info
            ]);
        });
    }
}
