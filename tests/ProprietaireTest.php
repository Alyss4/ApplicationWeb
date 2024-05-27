<?php
require("model/proprietaire.php");
use PHPUnit\Framework\TestCase;

$config = parse_ini_file("./config.ini");
try {
    $pdo = new \PDO("mysql:host=".$config["host"].";dbname=".$config["database"].";charset=utf8", $config["user"], $config["password"]);
} catch (Exception $e) {
    echo "<h1>Erreur de connexion à la base de données :</h1>";
    echo $e->getMessage();
    exit;
}
class ProprietaireTest extends TestCase
{
    protected $proprietaire;

    protected function setUp(): void
    {
        $this->proprietaire = new Proprietaire();
    }

    public function testLesLogements(): void
    {
        try{
            
        }catch (Exception $e) {
            $this->fail("Erreur lors de l'exécution de testLesLogements() " . $e->getMessage());
        }
    }

}
?>