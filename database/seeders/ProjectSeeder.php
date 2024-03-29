<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Project::truncate();

        for( $i = 0; $i < 10; $i++ ) {
            $new_project = new Project();
            $new_project->title = $faker->sentence();
            $new_project->description = $faker->text(300);
            $new_project->customer = $faker->firstNameMale();
            $new_project->slug = Str::slug($new_project->title, '-');
            $new_project->save();
        }
    }
}
