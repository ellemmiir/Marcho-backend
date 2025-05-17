<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Color;
use App\Models\Category;
use App\Models\Size;
use App\Models\Item;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{

    protected $model = Item::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->value('id'), // может быть null, если таблица пуста
            'color_id'    => Color::inRandomOrder()->value('id'),
            'size_id'     => Size::inRandomOrder()->value('id'),
            'name'        => $this->faker->words(3, true), // три случайных слова
            'type'        => $this->faker->numberBetween(1, 3),
            'old_price'   => $this->faker->randomFloat(2, 50, 1000),
            'new_price'   => $this->faker->optional()->randomFloat(2, 10, 700),
            'image'       => $this->faker->imageUrl(640, 480, 'fashion', true), // случайная картинка
            'description' => $this->faker->paragraph(3),
        ];
    }
}
