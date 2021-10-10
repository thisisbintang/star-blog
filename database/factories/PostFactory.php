<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(5, 9)),
            'slug' => $this->faker->unique()->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(20, 30)),
            'body' => collect($this->faker->paragraphs(mt_rand(6, 12)))
                ->map(
                    fn ($p) => "<p>$p</p>"
                )->implode(''),
            'author_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 10)
        ];
    }
}
