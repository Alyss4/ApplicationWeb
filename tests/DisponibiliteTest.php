<?php
require("model/disponibilite.php");
use PHPUnit\Framework\TestCase;

    $config = parse_ini_file("./config.ini");
    try {
        $pdo = new \PDO("mysql:host=".$config["host"].";dbname=".$config["database"].";charset=utf8", $config["user"], $config["password"]);
    } catch (Exception $e) {
        echo "<h1>Erreur de connexion à la base de données :</h1>";
        echo $e->getMessage();
        exit;
    }

class DisponibiliteTest extends TestCase
{
    protected $disponibilite;

    protected function setUp(): void
    {
        $this->disponibilite = new Disponibilite();
    }

    public function testLesDisponibilites(): void
    {
        try{
            $idLogement = 1;
            $result = $this -> disponibilite -> lesDisponibilites($idLogement);
            $this->assertIsArray($result);
            $this->assertNotEmpty($result);

        } catch (Exception $e) {
            $this->fail("Erreur lors de l'exécution de la function lesDisponibilites() :". $e->getMessage()); 
        }

    }
    public function testAjouterDisponibilite(): void
{
    try {
        $dateDebut = '2024-05-21';
        $dateFin = '2024-05-28';
        $idLogement = 1; 
        $tarif = 100; 
        $valide = 1; 
        $derive = null; 

        $this->disponibilite->ajouterDisponibilite($dateDebut, $dateFin, $idLogement, $tarif, $valide, $derive);
        $nouvellesDisponibilites = $this->disponibilite->lesDisponibilites($idLogement);
        $this->assertNotEmpty($nouvellesDisponibilites, "La disponibilité n'a pas été ajoutée correctement");

        $derniereDisponibilite = end($nouvellesDisponibilites); // Récupérer la dernière disponibilité ajoutée
        $this->disponibilite->supprimerDisponibilite($derniereDisponibilite['id']);
        
    } catch (Exception $e) {
        $this->fail("Erreur lors de l'ajout de la disponibilité : " . $e->getMessage());
    }
}



}
