<?php

namespace Database\Factories;
use Illuminate\support\Str;
use \App\Models\Motivation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonne>
 */
class AbonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sexe=['M','F'];
        $codePostal=['+237','+211','+223','+1','220'];
        $ville=['Douala','Baffoussam','Other','Paris','Cotonou','Portonovo','Parakou','Lome'];
        $motivation=count(Motivation::all());
        return [
            "prenom"=> $this -> faker->firstName(),
            "nom"=> fake()->name(),
            "telephone"=> $this -> faker ->phoneNumber(),
            "age"=> rand(18,100),
            "sexe"=>$sexe[rand(0,1)],
            "pays"=> fake()->state(),
            "profession"=> Str::upper(Str::random(7)),
            "ville"=> $ville[rand(0,7)],
            "codePostal"=> $codePostal[rand(0,4)],
            "rue"=> Str::upper(Str::random(5)),
            'email' => fake()->unique()->safeEmail(),
            "idmotivation"=> rand(1,$motivation)
        ];
    }
}
