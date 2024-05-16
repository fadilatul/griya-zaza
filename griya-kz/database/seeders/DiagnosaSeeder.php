<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Diagnosa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //
        Schema::disableForeignKeyConstraints();
        Diagnosa::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Pilek'],
            ['name' => 'Batuk'],
        ];

        foreach ($data as $value) {
            Diagnosa::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
