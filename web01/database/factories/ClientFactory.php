<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
			'plantilla' => $this->faker->name,
			'path_image1' => $this->faker->name,
			'path_image2' => $this->faker->name,
			'path_image3' => $this->faker->name,
			'path_image4' => $this->faker->name,
			'layer1' => $this->faker->name,
			'layer2' => $this->faker->name,
			'layer3' => $this->faker->name,
			'layer4' => $this->faker->name,
			'btn1' => $this->faker->name,
			'btn2' => $this->faker->name,
			'btn3' => $this->faker->name,
			'btn4' => $this->faker->name,
			'state' => $this->faker->name,
        ];
    }
}
