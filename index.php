<?php 

require 'function.php';
$events = getData("SELECT * FROM events");  // Table 1 
$participants = getData("SELECT * FROM participants");// Table 2
$seminars = getData("SELECT * FROM seminars"); // Table 3

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
    


<div class="container mx-auto mt-24 px-24">


    <!-- Table 1 -->
    <div class="tittle flex justify-between">
        <h2 class="font-bold text-black text-2xl">Tech Event List</h2>
        <button class="bg-sky-500 hover:bg-sky-600 text-white rounded-lg px-3 py-2"><a href="insert.php">Add Event</a></button>
    </div>

    <table border="1" cellpadding="10" cellspacing="0" class="table-auto w-full border mx-auto mt-5">
    <tr class="border bg-sky-500 text-white text-center">
        <th class="border">No</th>
        <th class="border">Event Name</th>
        <th class="border">Date</th>
        <th class="border">Location</th>
        <th class="border">Duration</th>
        <th class="border">Organizer</th>
        <th class="border">Ticket Price</th>
        <th class="border">Action</th>
    </tr>
    <?php $no = 1?>
    <?php foreach($events as $event) :?>
    <tr class="border text-center">
        <td class="bg-slate-100 border"><?= $no?></td>
        <td class="bg-slate-100 border"><?= $event['event_name']?></td>
        <td class="bg-slate-100 border"><?= $event['date']?></td>
        <td class="bg-slate-100 border"><?= $event['location']?></td>
        <td class="bg-slate-100 border"><?= $event['duration']?></td>
        <td class="bg-slate-100 border"><?= $event['organizer']?></td>
        <td class="bg-slate-100 border"><?= $event['ticket_price']?></td>
        <td class="bg-slate-100 border">
            <div class="flex items-center justify-center gap-2">
            <a href="delete.php?id=<?= $event['id']?>" onclick="return confirm('Are you sure want to delete this student?')" ><svg xmlns="http://www.w3.org/2000/svg" class="hover:-mt-2 hover:shadow-xl transition-all ease-in-out duration-200 w-8 h-8 bg-red-600 p-1 rounded-lg" fill="#FFFFFF" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg></a>
        <a href="update.php?id=<?= $event['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="hover:-mt-2 hover:shadow-xl transition-all duration-200 w-8 h-8 bg-green-400 p-1 rounded-lg" fill="#FFFFFF" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path></svg>
      </a>
      </div>
        </td>
    </tr>
    <?php $no++?>
    <?php endforeach?>
    </table>

    <!-- Table 2 -->
    <div class="tittle flex justify-between mt-10">
        <h2 class="font-bold text-black text-2xl">Participants List</h2>
        <button class="bg-sky-500 hover:bg-sky-600 text-white rounded-lg px-3 py-2"><a href="insert-participant.php">Add Participant</a></button>
        </div>

        <table border="1" cellpadding="10" cellspacing="0" class="table-auto w-full border mx-auto mt-5 mb-10">
    <tr class="border bg-sky-500 text-white text-center">
        <th class="border">No</th>
        <th class="border">Name</th>
        <th class="border">Event</th>
        <th class="border">Age</th>
        <th class="border">Adress</th>
        <th class="border">Job</th>
        <th class="border">Action</th>
    </tr>
    <?php $no = 1?>
    <?php foreach($participants as $participant) :?>
    <tr class="border text-center">
        <td class="bg-slate-100 border"><?= $no?></td>
        <td class="bg-slate-100 border"><?= $participant['name']?></td>
        <td class="bg-slate-100 border"><?= $participant['event']?></td>
        <td class="bg-slate-100 border"><?= $participant['age']?></td>
        <td class="bg-slate-100 border"><?= $participant['address']?></td>
        <td class="bg-slate-100 border"><?= $participant['job']?></td>
        <td class="bg-slate-100 border">
            <div class="flex items-center justify-center gap-2">
            <a href="delete-participant.php?id=<?= $participant['id']?>" onclick="return confirm('Are you sure want to delete this participant?')" ><svg xmlns="http://www.w3.org/2000/svg" class="hover:-mt-2 hover:shadow-xl transition-all ease-in-out duration-200 w-8 h-8 bg-red-600 p-1 rounded-lg" fill="#FFFFFF" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg></a>
        <a href="update-participant.php?id=<?= $participant['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="hover:-mt-2 hover:shadow-xl transition-all duration-200 w-8 h-8 bg-green-400 p-1 rounded-lg" fill="#FFFFFF" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path></svg>
      </a>
      </div>
        </td>
    </tr>
    <?php $no++?>
    <?php endforeach?>
    </table>

    <!-- Table 3 -->
    <div class="tittle flex justify-between mt-10">
        <h2 class="font-bold text-black text-2xl">Seminar List</h2>
        <button class="bg-sky-500 hover:bg-sky-600 text-white rounded-lg px-3 py-2"><a href="insert-seminar.php">Add Seminar</a></button>
        </div>

        <table border="1" cellpadding="10" cellspacing="0" class="table-auto w-full border mx-auto mt-5 mb-10">
    <tr class="border bg-sky-500 text-white text-center">
        <th class="border">No</th>
        <th class="border">Name</th>
        <th class="border">Speaker</th>
        <th class="border">Date</th>
        <th class="border">Action</th>
    </tr>
    <?php $no = 1?>
    <?php foreach($seminars as $seminar) :?>
    <tr class="border text-center">
        <td class="bg-slate-100 border"><?= $no?></td>
        <td class="bg-slate-100 border"><?= $seminar['name']?></td>
        <td class="bg-slate-100 border"><?= $seminar['speaker']?></td>
        <td class="bg-slate-100 border"><?= $seminar['date']?></td>
        <td class="bg-slate-100 border">
            <div class="flex items-center justify-center gap-2">
            <a href="delete-seminar.php?id=<?= $seminar['id']?>" onclick="return confirm('Are you sure want to delete this seminar?')" ><svg xmlns="http://www.w3.org/2000/svg" class="hover:-mt-2 hover:shadow-xl transition-all ease-in-out duration-200 w-8 h-8 bg-red-600 p-1 rounded-lg" fill="#FFFFFF" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg></a>
        <a href="update-seminar.php?id=<?= $seminar['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="hover:-mt-2 hover:shadow-xl transition-all duration-200 w-8 h-8 bg-green-400 p-1 rounded-lg" fill="#FFFFFF" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path></svg>
      </a>
      </div>
        </td>
    </tr>
    <?php $no++?>
    <?php endforeach?>
    </table>
    

</div>

</body>
</html>