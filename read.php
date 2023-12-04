<?php
session_start();
include('configure.php');
include('global.php');

$message = isset($_SESSION['message']) ? $_SESSION['message'] : "";

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>read</title>
</head>

<body>

  <div class="bg-blue-500 py-5 px-20 text-white flex items-center justify-between">
    <span class="font-bold text-2xl">LAB ACTIVITY</span>
    <div class="flex items-center font-semibold gap-5">
      <a href="read.php">Home</a>
      <a href="read.php">Contacts</a>
    </div>
  </div>

  <div class="p-10">
    <a href="create.php">
      <button class="bg-blue-500 py-2 px-5 text-white rounded-md">Add Contacts</button>
    </a>
    <div class="mt-10">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">
                ID
              </th>
              <th scope="col" class="px-6 py-3">
                Name
              </th>
              <th scope="col" class="px-6 py-3">
                Email
              </th>
              <th scope="col" class="px-6 py-3">
                Phone
              </th>
              <th scope="col" class="px-6 py-3">
                Title
              </th>
              <th scope="col" class="px-6 py-3">
                Created
              </th>
              <th scope="col" class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
            ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                  <td class="px-6 py-4">
                    <?php echo $row['id']; ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $row['name']; ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $row['email']; ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $row['phone']; ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $row['title']; ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $row['created']; ?>
                  </td>
                  <td class="px-6 py-4 space-x-5">
                    <a href="update.php?id=<?= $row['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                  </td>
                </tr>
            <?php }
            } else {
              echo '<tr><td colspan="6">No contacts found.</td></tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


</body>
<script src="node_modules/flowbite/dist/flowbite.min.js"></script>

</html>