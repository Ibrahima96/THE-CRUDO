# Programmation Orientée Objet - Guide Simple
## Qu'est-ce que la POO ?
La POO (Programmation Orientée Objet) est une façon d'organiser le code en créant des "objets" qui représentent des choses du monde réel.

## Les 4 Concepts de Base

### 1. CLASSE
Une classe = un modèle/plan pour créer des objets

```php
<?php
class Voiture {
    // Propriétés (caractéristiques)
    public $marque;
    public $couleur;
    public $vitesse = 0;
    
    // Méthodes (actions)
    public function demarrer() {
        echo "La voiture démarre !";
    }
    
    public function accelerer() {
        $this->vitesse += 10;
        echo "Vitesse : " . $this->vitesse . " km/h";
    }
}
?>
```

### 2. OBJET
Un objet = une instance d'une classe

```php
// Créer des objets
$voiture1 = new Voiture();
$voiture1->marque = "Toyota";
$voiture1->couleur = "Rouge";

$voiture2 = new Voiture();
$voiture2->marque = "BMW";
$voiture2->couleur = "Noir";

// Utiliser les objets
$voiture1->demarrer();
$voiture1->accelerer();
```

### 3. ENCAPSULATION
Protéger les données avec `private`, `protected`, `public`

```php
class CompteBancaire {
    private $solde = 0; // Protégé, accessible seulement dans la classe
    
    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }
    
    public function getSolde() {
        return $this->solde;
    }
}

$compte = new CompteBancaire();
$compte->deposer(100);
echo $compte->getSolde(); // 100
// $compte->solde = 1000; // ERREUR ! solde est privé
```

### 4. HÉRITAGE
Une classe peut hériter d'une autre classe

```php
// Classe parent
class Animal {
    public $nom;
    
    public function dormir() {
        echo $this->nom . " dort";
    }
}

// Classe enfant
class Chien extends Animal {
    public function aboyer() {
        echo $this->nom . " aboie : Woof !";
    }
}

$chien = new Chien();
$chien->nom = "Rex";
$chien->dormir(); // Hérité de Animal
$chien->aboyer(); // Propre à Chien
```

## Constructeur
Méthode spéciale qui s'exécute à la création de l'objet

```php
class Personne {
    public $nom;
    public $age;
    
    // Constructeur
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }
    
    public function sePresenter() {
        echo "Je suis " . $this->nom . ", j'ai " . $this->age . " ans";
    }
}

$personne = new Personne("Alice", 25);
$personne->sePresenter(); // "Je suis Alice, j'ai 25 ans"
```

## Exemple Pratique Complet

```php
<?php
class Produit {
    private $nom;
    private $prix;
    private $stock;
    
    public function __construct($nom, $prix, $stock) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
    }
    
    public function acheter($quantite) {
        if ($quantite <= $this->stock) {
            $this->stock -= $quantite;
            $total = $quantite * $this->prix;
            echo "Achat réussi ! Total : " . $total . "€";
            return true;
        } else {
            echo "Stock insuffisant !";
            return false;
        }
    }
    
    public function getInfos() {
        return [
            'nom' => $this->nom,
            'prix' => $this->prix,
            'stock' => $this->stock
        ];
    }
}

// Utilisation
$produit = new Produit("Ordinateur", 800, 5);
$produit->acheter(2); // Achat réussi ! Total : 1600€

$infos = $produit->getInfos();
echo $infos['nom'] . " - Stock restant : " . $infos['stock'];
?>
```

## Les 3 Niveaux de Visibilité

```php
class Exemple {
    public $public = "Accessible partout";
    protected $protected = "Accessible dans la classe et ses enfants";
    private $private = "Accessible seulement dans cette classe";
    
    public function test() {
        echo $this->public;    // OK
        echo $this->protected; // OK
        echo $this->private;   // OK
    }
}

class Enfant extends Exemple {
    public function testEnfant() {
        echo $this->public;    // OK
        echo $this->protected; // OK
        // echo $this->private; // ERREUR !
    }
}
```

## Polymorphisme Simple

```php
class Forme {
    public function calculerAire() {
        return 0;
    }
}

class Rectangle extends Forme {
    private $largeur, $hauteur;
    
    public function __construct($largeur, $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }
    
    public function calculerAire() {
        return $this->largeur * $this->hauteur;
    }
}

class Cercle extends Forme {
    private $rayon;
    
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }
    
    public function calculerAire() {
        return 3.14 * $this->rayon * $this->rayon;
    }
}

// Même méthode, résultats différents
$rectangle = new Rectangle(5, 3);
$cercle = new Cercle(4);

echo $rectangle->calculerAire(); // 15
echo $cercle->calculerAire();    // 50.24
```

## Avantages de la POO

1. **Organisation** : Code mieux structuré
2. **Réutilisation** : Une classe peut être utilisée plusieurs fois
3. **Maintenance** : Plus facile à modifier et déboguer
4. **Sécurité** : Encapsulation protège les données
5. **Évolutivité** : Facile d'ajouter de nouvelles fonctionnalités

## Points Clés à Retenir

- **Classe** = Modèle, **Objet** = Instance du modèle
- **`$this`** = Référence à l'objet actuel
- **`public`** = Accessible partout
- **`private`** = Accessible seulement dans la classe
- **`protected`** = Accessible dans la classe et ses enfants
- **Constructeur** = `__construct()` s'exécute automatiquement
- **Héritage** = `extends` pour réutiliser du code

La POO rend le code plus propre, plus sûr et plus facile à maintenir !
