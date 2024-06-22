<?php

namespace Database\Seeders;

use App\Models\Alphabetic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlphabeticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alphabetic = range('A', 'Z');
        for($i = 0; $i < count($alphabetic); ++$i){
            Alphabetic::create([
                'letter' => $alphabetic[$i]
            ]);
        }
    }
}
