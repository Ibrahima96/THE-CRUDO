<?php
include_once 'function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Adresse email invalide.");
    }

    createUser($nom, $prenom, $email, $telephone);
    header("Location: index.php");
    exit();
}
?>

<?php include_once  'header.php';?>

<section class="max-w-xl mx-auto px-4 pt-10 pb-32">
    <h2 class="mb-8 text-4xl font-thin text-center">Ajouter des Utilisateurs</h2>
    <a href="./index.php" class="btn inline-flex font-thin underline hover:bg-gray-100 mb-3 btn-ghost">Annuler</a>
    <form action="" method="POST" class=" w-full space-y-3 flex flex-col">
        <label class="mb-3 block">
            <input
                type="text"
                placeholder="nom"
                class="input w-full" name="nom"">
        </label>
         <label class="mb-3 block">
            <input
                type="text"
                placeholder="prenom"
                class="input w-full" name="prenom"">
        </label>
        <label class="mb-3 block">
            <input
                type="email"
                placeholder="email"
                class="input w-full" name="email" >
        </label>
        <label class="mb-3 block">
            <input
                type="text"
                placeholder="telephone"
                class="input w-full" name="telephone" >
        </label>
       <button class="bg-blue-500 rounded-sm p-2 text-white">Cree</button>
    </form>
</section

