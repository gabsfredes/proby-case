<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Project $project): void
    {
        $project->create([
            'name' => 'Proby',
            'start_date' => '2025-02-01',
            'status' => 'Pendente',
            'description' => 'Proby is a project management tool for developers.',
            'created_by' => 5,
        ]);

        $project->create([
            'name' => 'Proby Case',
            'start_date' => '2025-02-01',
            'status' => 'Pendente',
            'description' => 'Proby Case is a project management tool for developers.',
            'created_by' => 5,
        ]);

        $project->create([
            'name' => 'Proby Case 2',
            'start_date' => '2025-02-01',
            'status' => 'Pendente',
            'created_by' => 5,
        ]);

        $project->create([
            'name' => 'Proby Case 3',
            'start_date' => '2025-02-01',
            'status' => 'Pendente',
            'description' => 'Proby Case is a project management tool for developers.',
            'created_by' => 5,
        ]);

        $project->create([
            'name' => 'Proby Case 4',
            'start_date' => '2025-02-01',
            'status' => 'Pendente',
            'description' => 'Proby Case is a project management tool for developers.',
            'created_by' => 5,
        ]);
    }
}
