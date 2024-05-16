<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Poli;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();
        Poli::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Umum'],
            ['name' => 'Gigi'],
        ];

        foreach ($data as $value) {
            Poli::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
