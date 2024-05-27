<?php
require("model/annonce.php");
use PHPUnit\Framework\TestCase;

$config = parse_ini_file("./config.ini");
try {
    $pdo = new \PDO("mysql:host=".$config["host"].";dbname=".$config["database"].";charset=utf8", $config["user"], $config["password"]);
} catch (Exception $e) {
    echo "<h1>Erreur de connexion à la base de données :</h1>";
    echo $e->getMessage();
    exit;
}

class AnnonceTest extends TestCase
{
    protected $annonce;

    protected function setUp(): void
    {
        $this->annonce = new Annonce();
    }

    public function testRecupererAnnonces(): void
    {
        try {
            $result = $this->annonce->recupererAnnonces();
            $this->assertIsArray($result, "La méthode devrait retourner un tableau");
            $this->assertNotEmpty($result, "Le tableau ne doit pas être vide");
        } catch (Exception $e) {
            $this->fail("Erreur lors de l'exécution de recupererAnnonces() sans paramètres : " . $e->getMessage());
        }
        
        try {
            $result = $this->annonce->recupererAnnonces(0, 5);
            $this->assertIsArray($result, "La méthode devrait retourner un tableau");
            $this->assertCount(10, $result, "Le tableau devrait contenir 10 éléments");
        } catch (Exception $e) {
            $this->fail("Erreur lors de l'exécution de recupererAnnonces() avec les paramètres (0, 10) : " . $e->getMessage());
        }
    }

    public function testRecupererUneAnnonce(): void
    {
        $annonceId = 1;
        
        try {
            $result = $this->annonce->recupererUneAnnonce($annonceId);
            $this->assertIsArray($result, "La méthode devrait retourner un tableau");
            $this->assertArrayHasKey('id', $result, "Le tableau devrait contenir une clé 'id'");
            $this->assertEquals($annonceId, $result['id'], "L'ID de l'annonce devrait correspondre à l'ID demandé");
        } catch (Exception $e) {
            $this->fail("Erreur lors de l'exécution de recupererUneAnnonce($annonceId) : " . $e->getMessage());
        }
    }
}
?>
