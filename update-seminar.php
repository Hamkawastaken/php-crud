<?php 

require 'function.php';
$id = $_GET['id'];
$seminar = showData($id, "seminars");

if ( isset($_POST["submit"])) {
    if(updateData($_POST, $id, "seminars") > 0) {
        echo "<script>alert('data berhasil di update');
        document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('data gagal di update');
        document.location.href = 'index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
    </script>
</head>
<body>
<div class="container mx-auto w-96 bg-slate-100 mt-10 p-10 rounded-xl shadow-2xl">
        <div class="text-center text-2xl font-bold mb-5">Edit Seminar</div>
        <form action="" method="post" class="flex flex-col">
            <label for="name">Seminar Name</label>
            <input required type="text" name="name" class="bg-slate-200 p-2 rounded-lg border" id="name" value="<?= $seminar[0]['name']?>">
            <label for="speaker">Speaker</label>
            <input required type="text" name="speaker" class="bg-slate-200 p-2 rounded-lg border" id="speaker" value="<?= $seminar[0]['speaker']?>">
            <label for="date">Date</label>
            <input required type="date" name="date" class="bg-slate-200 p-2 rounded-lg border" id="date" value="<?= $seminar[0]['date']?>">
            <button type="submit" name="submit" class="px-3 py-2 bg-sky-500 hover:bg-sky-600 active:bg-sky-700 text-white rounded-lg mt-3">Submit</button>
        </form>
    </div>
</body>
</html>