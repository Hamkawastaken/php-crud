
<?php

require 'function.php';

if ( isset($_POST["submit"]) ) {
    insertDataEvent($_POST);
    echo "<script>
    document.location.href = 'index.php';
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="text-center text-2xl font-bold mb-5">Tambah Data Students</div>
        <form action="" method="post" class="flex flex-col">
            <label for="name">Nama Lengkap</label>
            <input required type="text" name="name" class="bg-slate-200 p-2 rounded-lg border" id="name">
            <label for="gender">Jenis Kelamin</label>
            <select name="gender" id="gender" class="bg-slate-200 p-2 rounded-lg border">
                <option value="Pria" id="gender">Pria</option>
                <option value="Wanita" id="gender">Wanita</option>
            </select>
            <label for="age">Umur</label>
            <input required type="text" name="age" class="bg-slate-200 p-2 rounded-lg border" id="age">
            <label for="image">Gambar</label>
            <input required type="text" name="image" class="bg-slate-200 p-2 rounded-lg border" id="image">
            <label for="nis">Nis</label>
            <input required type="text" name="nis" class="bg-slate-200 p-2 rounded-lg border" id="nis">
            <label for="nik">Nik</label>
            <input required type="text" name="nik" class="bg-slate-200 p-2 rounded-lg border" id="nik">
            <label for="class">Kelas</label>
            <input required type="text" name="class" class="bg-slate-200 p-2 rounded-lg border" id="class">
            <label for="address">Alamat</label>
            <textarea required name="address" id="address" class="border p-2 bg-slate-200 rounded-lg mb-3"></textarea>
            <button type="submit" name="submit" class="px-3 py-2 bg-sky-500 hover:bg-sky-600 active:bg-sky-700 text-white rounded-lg">Submit</button>
        </form>
    </div>
</body>
</html>