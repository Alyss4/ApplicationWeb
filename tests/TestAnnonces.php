<?php

use PHPUnit\Framework\TestCase;

class TestAnnonces extends TestCase
{

    // Initialise les objets necessaires a mon Test
    protected $annonce;

    protected function setUp(): void {
        $this->annonce = new Annonce();
    }

    public function testRecupererAnnonces():void{
        $result = $this->annonce->recupererAnnonces();
        $this->assertIsArray($result, "La méthode devrait retourner un tableau");
        $this->assertNotEmpty($result, "Le tableau ne doit pas être vide");
        
        $result = $this->annonce->recupererAnnonces(0, 5);
        $this->assertIsArray($result, "La méthode devrait retourner un tableau");
        $this->assertCount(5, $result, "Le tableau devrait contenir 5 éléments");
    }

    public function testRecupererUneAnnonce()
    {

        $annonceId = 1; 
        $result = $this->annonce->recupererUneAnnonce($annonceId);
        $this->assertIsArray($result, "La méthode devrait retourner un tableau");
        $this->assertArrayHasKey('id', $result, "Le tableau devrait contenir une clé 'id'");
        $this->assertEquals($annonceId, $result['id'], "L'ID de l'annonce devrait correspondre à l'ID demandé");
    }

}

?>