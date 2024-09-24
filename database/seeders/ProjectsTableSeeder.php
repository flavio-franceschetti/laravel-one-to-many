<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\functions\Helper;


class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 5; $i++){
            $newProject = new Project();
            $newProject->name = $faker->sentence();
            $newProject->description = $faker->paragraph();
            $newProject->status = $faker->boolean();
            $newProject->github = $faker->url();
            $newProject->slug = Helper::generateSlug($newProject->name, Project::class);
            $newProject->save();
        }
    }
}
