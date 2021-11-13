<?php

namespace Database\Factories;

use App\Models\Config;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConfigFactory extends Factory
{
    protected $model = Config::class;

    public function definition()
    {
        return [
			'titulo' => 'default',
			'tema' => 'default',
			'empresa' => 'default',
			'autor' => 'default',
			'path_favicon' => 'https://www.cursosdesarrolloweb.es/wp-content/uploads/2016/10/favicon.ico',
			'path_logo' => 'https://www.cursosdesarrolloweb.es/wp-content/uploads/2018/05/logo-cursosdesarrolloweb-2018.png',
			'description_logo' => 'default',
        ];
    }
}
