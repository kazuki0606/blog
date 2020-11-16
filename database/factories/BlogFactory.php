<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;


class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

 /*    
 保留
 protected $model = Blog::class; */
    protected $model = \App\Models\Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
/* 
保留
'title'=>$faker->word,
'content'=>$faker->realText */

'title' => $this->faker->word,//titleというカラムにword型のデータを入れる
'content' => $this->faker->realText//contentにrealText型のデータを入れる


        ];
    }
}
