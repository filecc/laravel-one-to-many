<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $status = ['on going', 'completed'];

        for ($i=0; $i < 10; $i++) {
            $newProject = new Project;
            $newProject->title = $faker->text(50);
            $newProject->image = ' https://picsum.photos/'.rand(450,500).'/'.rand(250,350);
            $newProject->content = $faker->text(500);
            $newProject->status = $status[rand(0,1)];
            $newProject->save();
        }

    }
}
