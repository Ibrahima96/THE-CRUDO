<?php
ob_start();
include_once 'header.php';
include_once 'function.php';
$id = $_GET['id'];
$user = getUserById($id);
if ($_SERVER["REQUEST_METHOD"] ==="POST") {
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'])) {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $email = trim($_POST['email']);
        $telephone = trim($_POST['telephone']);

        updateUser($id, $nom, $prenom, $email, $telephone);
        header("Location:index.php");
        exit();
    }
}
?>
<?php //ob_end_flush(); ?>

<section class="max-w-xl mx-auto px-4 pt-10 pb-32">
    <h2 class="mb-8 text-4xl font-thin text-center">Mises a Jours des utilisateurs</h2>
    <a href="./index.php" class="btn inline-flex font-thin underline hover:bg-gray-100 mb-3 btn-ghost">Annuler</a>
    <form action="" method="POST" class=" w-full space-y-3 flex flex-col">

        <label class="mb-3 block">
            <input
                type="text"
                placeholder="nom"
                class="input w-full" name="nom" value="<?php echo $user->nom;?>">
        </label>
         <label class="mb-3 block">
            <input
                type="text"
                placeholder="prenom"
                class="input w-full" name="prenom" value="<?php echo $user->prenom;?>">
        </label>
        <label class="mb-3 block">
            <input
                type="email"
                placeholder="email"
                class="input w-full" name="email"  value="<?php echo $user->email;?>">
        </label>
        <label class="mb-3 block">
            <input
                type="text"
                placeholder="telephone"
                class="input w-full" name="telephone"  value="<?php echo $user->telephone;?>">
        </label>
       <button class="bg-blue-500 rounded-sm p-2 text-white">modifier</button>
    </form>
</section