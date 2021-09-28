<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Program::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $konten = $this->faker->text(100);
        $image_path = '/var/www/03_praktikum_web_lanjut_dua/public/images/program';
        $image_fullpath = $this->faker->image( $image_path, 343, 274, 'abstract', true, true, 'abstract');
        $image = str_replace($image_path . '/' , '', $image_fullpath);
        return [
            'title' => $title,
            'image' => $image,
            'konten' => $konten,
        ];
    }
}
