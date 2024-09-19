<?php 

require 'function.php';
$id = $_GET['id'];
$participant = showDataParticipant($id);

if ( isset($_POST["submit"])) {
    if(updateDataParticipant($_POST, $id) > 0) {
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
        <div class="text-center text-2xl font-bold mb-5">Edit Participant</div>
        <form action="" method="post" class="flex flex-col">
            <label for="name">Participant Name</label>
            <input required type="text" name="name" class="bg-slate-200 p-2 rounded-lg border" id="name" value="<?= $participant[0]['name']?>">
            <label for="event">Event</label>
            <input required type="text" name="event" class="bg-slate-200 p-2 rounded-lg border" id="event" value="<?= $participant[0]['event']?>">
            <label for="age">Age</label>
            <input required type="number" name="age" class="bg-slate-200 p-2 rounded-lg border" id="age" value="<?= $participant[0]['age']?>">
            <label for="address">Address</label>
            <input required type="text" name="address" class="bg-slate-200 p-2 rounded-lg border" id="address" value="<?= $participant[0]['address']?>">
            <label for="job">Job</label>
            <input required type="text" name="job" class="bg-slate-200 p-2 rounded-lg border" id="job" value="<?= $participant[0]['job']?>">
            <button type="submit" name="submit" class="px-3 py-2 bg-sky-500 hover:bg-sky-600 active:bg-sky-700 text-white rounded-lg mt-3">Submit</button>
        </form>
    </div>
</body>
</html>