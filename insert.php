<?php 

require 'function.php';

if ( isset($_POST["submit"]) ) {
    insertData($_POST, "events");
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
        <div class="text-center text-2xl font-bold mb-5">Add Events</div>
        <form action="" method="post" class="flex flex-col">
            <label for="event_name">Event Name</label>
            <input required type="text" name="event_name" class="bg-slate-200 p-2 rounded-lg border" id="event_name">
            <label for="date">Date</label>
            <input required type="date" name="date" class="bg-slate-200 p-2 rounded-lg border" id="date">
            <label for="location">Location</label>
            <input required type="text" name="location" class="bg-slate-200 p-2 rounded-lg border" id="location">
            <label for="duration">Duration</label>
            <input required type="text" name="duration" class="bg-slate-200 p-2 rounded-lg border" id="duration">
            <label for="organizer">Organizer</label>
            <input required type="text" name="organizer" class="bg-slate-200 p-2 rounded-lg border" id="organizer">
            <label for="ticket_price">Ticket Price</label>
            <input required type="text" name="ticket_price" class="bg-slate-200 p-2 rounded-lg border mb-4" id="ticket_price">
            <button type="submit" name="submit" class="px-3 py-2 bg-sky-500 hover:bg-sky-600 active:bg-sky-700 text-white rounded-lg">Submit</button>
        </form>
    </div>

</body>
</html>