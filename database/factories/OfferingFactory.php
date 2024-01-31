
<?php
// database/factories/OfferingFactory.php

namespace Database\Factories;

use App\Models\Offering;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferingFactory extends Factory
{
    protected $model = Offering::class;

    public function definition()
    {
        return [
            'offering_name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'scheduled' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'duration' => $this->faker->randomNumber(2),
        ];
    }
}
?>