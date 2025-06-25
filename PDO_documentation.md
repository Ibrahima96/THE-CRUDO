# PDO - Guide Simple

## Qu'est-ce que PDO ?
PDO = PHP Data Objects. C'est pour se connecter aux bases de données en PHP de manière sécurisée.

## Connexion de Base

```php
<?php
$host = 'localhost';
$dbname = 'ma_base';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
```

## Les 4 Opérations de Base

### 1. AJOUTER des données
```php
$sql = "INSERT INTO users (nom, email) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['Jean', 'jean@email.com']);
```

### 2. LIRE des données
```php
// Tout lire
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();

// Lire avec condition
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([1]);
$user = $stmt->fetch();
```

### 3. MODIFIER des données
```php
$sql = "UPDATE users SET nom = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute(['Nouveau nom', 1]);
```

### 4. SUPPRIMER des données
```php
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([1]);
```

## Exemple Complet Simple

```php
<?php
// Connexion
$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Ajouter un utilisateur
$sql = "INSERT INTO users (nom, email) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['Alice', 'alice@test.com']);

// Afficher tous les utilisateurs
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch()) {
    echo $row['nom'] . " - " . $row['email'] . "<br>";
}
?>
```

## Règles de Sécurité

1. **Toujours utiliser `prepare()` et `execute()`** pour éviter les piratages
2. **Jamais** mettre les variables directement dans le SQL
3. **Toujours** gérer les erreurs avec try/catch

### ❌ Dangereux
```php
$sql = "SELECT * FROM users WHERE nom = '$nom'"; // DANGER !
```

### ✅ Sécurisé
```php
$sql = "SELECT * FROM users WHERE nom = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nom]);
```

## Configuration Minimum Requise

```php
$pdo = new PDO("mysql:host=localhost;dbname=votre_base", "user", "password");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
```

C'est tout ! Avec ces bases, vous pouvez faire 90% des opérations de base de données.