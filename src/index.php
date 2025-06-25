<?php include_once './function.php';
include_once './header.php';
$showuser = getUsers() ;

?>

<body>

  <div class="h-screen flex items-center justify-center max-w-7xl mx-auto px-8">


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg sm:w-full">
        <a href="createUser.php" class="inline-flex mb-3 py-2 px-10 bg-blue-500 rounded-sm text-white ">Ajouter</a>
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              nom
            </th>
            <th scope="col" class="px-6 py-3">
              prenom
            </th>
            <th scope="col" class="px-6 py-3">
              email
            </th>
            <th scope="col" class="px-6 py-3">
              telephon
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
              <span class="sr-only">Delete</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($showuser as $row) :?>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
             <?= $row->nom;?>
            </th>
            <td class="px-6 py-4">
             <?= $row->prenom;?>
            </td>
            <td class="px-6 py-4">
              <?= $row->email;?>
            </td>
            <td class="px-6 py-4">
              <?= $row->telephone;?>
            </td>
            <td class="px-6 py-4 text-right flex flex-col gap-2">
              <a href="editUser.php?id=<?= $row->user_id;?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ">Edit</a>
              <a href="delete.php?id=<?= $row->user_id;?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
            </td>
          </tr>
          <?php endforeach?>
        </tbody>
      </table>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  </div>
</body>

</html>