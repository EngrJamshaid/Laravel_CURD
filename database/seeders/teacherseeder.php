<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class teacherseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

          // Load the JSON file
          $json = File::get(database_path('seeders/data/teacher.json'));

          // Convert JSON to collection and insert into the database
        collect(json_decode($json, true))->each(function ($student) {
            DB::table('teachers')->insert([
                'id' => $student['id'],
                'name' => $student['name'],
                'email' => $student['email'],
                'age' => $student['age'],
                'city' => $student['city'],
            ]);
        });
    }
    }

