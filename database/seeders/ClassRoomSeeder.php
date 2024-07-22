<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ClassRoom;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = ['X', 'XI', 'XII'];
        $departments = ['PPLG', 'AKUNTANSI', 'MPLB', 'PEMASARAN'];
        $numbers = range(1, 3);

        foreach ($grades as $grade) {
            foreach ($departments as $department) {
                foreach ($numbers as $number) {
                    ClassRoom::create([
                        'name' => "{$grade} {$department} {$number}"
                    ]);
                }
            }
        }
    }
}
