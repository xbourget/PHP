class Personne {
    public $nom;

    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    public function afficherNom() {
        echo "Le nom de la personne est : " . $this->nom;
    }
}

// Créez un objet de la classe Personne
$personne1 = new Personne();

// Utilisez $this pour accéder aux propriétés et aux méthodes de l'objet
$personne1->setNom("Alice");
$personne1->afficherNom(); // Cela affichera "Le nom de la personne est : Alice"