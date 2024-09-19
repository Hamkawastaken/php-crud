<?php 

require 'function.php';

$id = $_GET["id"];

if(deleteSeminar($id) > 0){
    echo "<script>
    alert('succesfullly deleted');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('data gagal dihapus');
    document.location.href = 'index.php';
    </script>";
}

?>