<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class abonneTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_save()
    {
        $abonne=[
            "prenom"=> "Israel",
            "nom"=> "Tientcheu",
            "telephone"=> "698524956",
            "age"=>"18",
            "sexe"=>"M",
            "pays"=> "Benin",
            "profession"=> "Developpeur",
            "ville"=> "Cotonou",
            "codePostal"=>"229",
            "rue"=> "230",
            'email' => "tientcheuisrael@gmail.com",
            "idmotivation"=> "1",
        ];       
        $response = $this-> withHeaders([
            'X-Header'=> 'Value'
        ])->POST('api/abonne',$abonne);
        $response->assertStatus(200);
    }
    public function test_update()
    {
        $abonne=[
            "prenom"=> "Israel",
            "nom"=> "Tientcheu",
            "telephone"=> "698524956",
            "age"=>"18",
            "sexe"=>"M",
            "pays"=> "Benin",
            "profession"=> "Developpeur",
            "ville"=> "Cotonou",
            "codePostal"=>"229",
            "rue"=> "230",
            'email' => "tientcheuisrael@gmail.com",
            "idmotivation"=> "1",
        ];       
        $response = $this->PATCH('api/abonne/{5}',$abonne);
        $response->assertStatus(200);
    }
    public function test_delete()
    {
        $response = $this->DELETE('api/abonne/101');
        $response->assertStatus(200);
    }
    public function test_getall()
    {
        $response = $this->get('api/abonne');
        $response->assertStatus(200);
    }
}
