<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\table;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Province = [
            ["name"=> 'Kabul'], 
            ["name"=> 'Kandahar'], 
            ["name"=> 'Ghazni'], 
            ["name"=> 'Herat'], 
            ["name"=> 'Bamiyan'], 
            ["name"=> 'Balkh'], 
            ["name"=> 'Pansher'], 
            ["name"=> 'Jawzjan'], 
            ["name"=> 'Helmand'], 
            ["name"=> 'Parwan'], 
            ["name"=> 'Takhar'], 
            ["name"=> 'Khost'], 
            ["name"=> 'Jawzjan'], 
            ["name"=> 'Nankarhar'], 
        ];
         DB::table("provinces")->insert($Province);
    }
}
