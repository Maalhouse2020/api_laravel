<?php

namespace Database\Factories;
//use App\Author;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'title'=>$this->faker->jobTitle,
            
            'company'=>$this->faker->company,
            'email'=>$this->faker->unique()->companyEmail,
            
        ];
    }
}
