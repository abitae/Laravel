<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
  

    public function definition()
    {
        return [
            //crea la imagen y guarda el patch como imge.jpg - luego lo concatena
            'url' => 'posts/'. $this->faker->image('public/storage/posts',750,450,null,false),
            
        ];
    }
}
