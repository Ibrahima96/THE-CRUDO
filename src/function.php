<?php
include './config/mysql.php';
function getUsers()
{
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function getUserById($id)
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_id = :user_id");
    $stmt->execute(['user_id' => $id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function createUser($nom, $prenom, $email, $telephone)
{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, telephone) VALUES (:nom,
 :prenom, :email, :telephone)");
    return $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'telephone' => $telephone
    ]);
}


function updateUser($id, $nom, $prenom, $email, $telephone)
{
    global $pdo;
    $stmt = $pdo->prepare("
        UPDATE users
        SET nom = :nom,
            prenom = :prenom,
            email = :email,
            telephone = :telephone
        WHERE user_id = :id
    ");
    return $stmt->execute([
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'telephone' => $telephone
    ]);
}


function deleteUser($id)
{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM users WHERE user_id = :user_id");
    return $stmt->execute(['user_id' => $id]);
}
