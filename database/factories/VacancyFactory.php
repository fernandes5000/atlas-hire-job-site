<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake()->unique()->slug(3),
            'company_name' => fake()->company(),
            'team' => fake()->randomElement(['engineering', 'product', 'design', 'growth']),
            'employment_type' => fake()->randomElement(['full_time', 'contract']),
            'work_model' => fake()->randomElement(['remote', 'hybrid', 'onsite']),
            'experience_level' => fake()->randomElement(['mid', 'senior', 'lead']),
            'title' => [
                'en_US' => fake()->jobTitle(),
                'pt_BR' => fake('pt_BR')->jobTitle(),
                'es' => fake('es_ES')->jobTitle(),
            ],
            'excerpt' => [
                'en_US' => fake()->sentence(),
                'pt_BR' => fake('pt_BR')->sentence(),
                'es' => fake('es_ES')->sentence(),
            ],
            'description' => [
                'en_US' => fake()->paragraph(),
                'pt_BR' => fake('pt_BR')->paragraph(),
                'es' => fake('es_ES')->paragraph(),
            ],
            'location' => [
                'en_US' => fake()->city().', '.fake()->state(),
                'pt_BR' => fake('pt_BR')->city().', Brasil',
                'es' => fake('es_ES')->city().', España',
            ],
            'highlights' => [
                'en_US' => fake()->words(3),
                'pt_BR' => fake('pt_BR')->words(3),
                'es' => fake('es_ES')->words(3),
            ],
            'responsibilities' => [
                'en_US' => fake()->sentences(3),
                'pt_BR' => fake('pt_BR')->sentences(3),
                'es' => fake('es_ES')->sentences(3),
            ],
            'requirements' => [
                'en_US' => fake()->sentences(3),
                'pt_BR' => fake('pt_BR')->sentences(3),
                'es' => fake('es_ES')->sentences(3),
            ],
            'benefits' => [
                'en_US' => fake()->sentences(3),
                'pt_BR' => fake('pt_BR')->sentences(3),
                'es' => fake('es_ES')->sentences(3),
            ],
            'currency' => fake()->randomElement(['USD', 'EUR', 'BRL']),
            'salary_min' => fake()->numberBetween(60000, 120000),
            'salary_max' => fake()->numberBetween(121000, 180000),
            'salary_period' => 'yearly',
            'application_url' => 'mailto:careers@atlashire.test',
            'is_featured' => fake()->boolean(35),
            'is_published' => true,
            'posted_at' => now()->subDays(fake()->numberBetween(1, 20)),
        ];
    }
}
