<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "event_organizer";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    echo "Gagal Terhubung!" . mysqli_connect_error();
}

// Query Data
function getTable($table) {
    global $conn;
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Create
function insertData($data, $table) {
    global $conn;

    // Table 1
    if ($table === "events") {
    $event_name = $data["event_name"];
    $date = $data["date"];
    $location = $data["location"];
    $duration = $data["duration"];
    $organizer = $data["organizer"];
    $ticket_price = $data["ticket_price"];

    $query = "INSERT INTO events (event_name, date, location, duration, organizer, ticket_price) 
        VALUES ('$event_name', '$date', '$location', '$duration', '$organizer', '$ticket_price')";

    mysqli_query($conn, $query);
    }
    
    // Table 2
    else if ($table === "participants") {
    $name = $data["name"];
    $event = $data["event"];
    $age = $data["age"];
    $address = $data["address"];
    $job = $data["job"];

    $query = "INSERT INTO participants (name, event, age, address, job) 
        VALUES ('$name', '$event', '$age', '$address', '$job')";

    mysqli_query($conn, $query);
    } 
    
    // Table 3
    else if ($table === "seminars") {
    $name = $data["name"];
    $speaker = $data["speaker"];
    $date = $data["date"];

    $query = "INSERT INTO seminars (name, speaker, date) 
        VALUES ('$name', '$speaker', '$date')";

    mysqli_query($conn, $query);
    }
    

    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('data berhasil ditambahkan')</script>";
    } else {
        echo "<script>alert('data gagal ditambahkan')</script>";
    };
}



// Read
function showData($id, $table){
    global $conn;
    $query = "SELECT * FROM $table WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// Update
function updateData($data, $id, $table){
    global $conn;

    // Table 1
    if ($table === "events") {
    $event_name = $data["event_name"];
    $date = $data["date"];
    $location = $data["location"];
    $duration = $data["duration"];
    $organizer = $data["organizer"];
    $ticket_price = $data["ticket_price"];

    $query = "UPDATE events SET
    event_name = '$event_name',
    date = '$date',
    location = '$location',
    duration = '$duration',
    organizer = '$organizer',
    ticket_price = '$ticket_price'
    WHERE id = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    }

    // Table 2
    if ($table === "participants") {
    $name = $data["name"];
    $event = $data["event"];
    $age = $data["age"];
    $address = $data["address"];
    $job = $data["job"];

    $query = "UPDATE participants SET
    name = '$name',
    event = '$event',
    age = '$age',
    address = '$address',
    job = '$job'
    WHERE id = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    }

    // Table 3
    if ($table === "seminars") {
    $name = $data["name"];
    $speaker = $data["speaker"];
    $date = $data["date"];

    $query = "UPDATE seminars SET
    name = '$name',
    speaker = '$speaker',
    date = '$date'
    WHERE id = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    }
}

//Delete
function deleteTable($id, $table){
    global $conn;
    $query = "DELETE FROM $table WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>