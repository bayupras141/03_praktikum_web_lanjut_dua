<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $title = $this->faker->sentence;
        $image_path = '/var/www/03_praktikum_web_lanjut_dua/public/images/produk';
        $image_fullpath = $this->faker->image( $image_path, 343, 274, 'animals', true, true, 'animals');
        $image = str_replace($image_path . '/' , '', $image_fullpath);
        return [
            'title' => $title,
            'image' => $image,
        ];
    }
}
