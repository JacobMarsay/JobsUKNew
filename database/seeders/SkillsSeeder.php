<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skills;


class SkillsSeeder extends Seeder
{

    public function run()
    {
        Skills::create([
            'skill_name' => 'Laravel',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'JQuery',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'PHP',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'JAVA',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'ASP.NET',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'JavaScript',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'MVC',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'Wordpress',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'DNS Configurations',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'MYSQL',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'NOSQL',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'Python',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'C#',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'SaaS',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'Cloud Computing',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'Azure',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'React',
            'Skill_type' => 'Technical',
        ]);

        Skills::create([
            'skill_name' => 'Communication',
            'Skill_type' => 'Soft Skill',
        ]);

        Skills::create([
            'skill_name' => 'Time Management',
            'Skill_type' => 'Soft Skill',
        ]);

        Skills::create([
            'skill_name' => 'Problem Solving',
            'Skill_type' => 'Soft Skill',
        ]);
        
        Skills::create([
            'skill_name' => 'Adaptability',
            'Skill_type' => 'Soft Skill',
        ]);

        Skills::create([
            'skill_name' => 'Flexability',
            'Skill_type' => 'Soft Skill',
        ]);

        Skills::create([
            'skill_name' => 'Creative',
            'Skill_type' => 'Soft Skill',
        ]);

        Skills::create([
            'skill_name' => 'Leadership',
            'Skill_type' => 'Soft Skill',
        ]);

        Skills::create([
            'skill_name' => 'Work Ethic',
            'Skill_type' => 'Soft Skill',
        ]);

        Skills::create([
            'skill_name' => 'Attention to detail',
            'Skill_type' => 'Soft Skill',
        ]);

        Skills::create([
            'skill_name' => 'Interpersonal Skills',
            'Skill_type' => 'Soft Skill',
        ]);
    }

}