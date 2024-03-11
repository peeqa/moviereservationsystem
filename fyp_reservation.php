<?php
error_reporting(E_ALL);
print_r($_POST);

$conn = mysqli_connect("localhost", "root", "", "fyp_movie") or die("Connection failed: " . $conn->connect_error);

// Check if the POST data is received and process it
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set
    if (isset($_POST['movie_title'], $_POST['movie_date'], $_POST['movie_time'], $_POST['movie_food'], $_POST['movie_drink'], $_POST['ticket_num'], $_POST['cust_name'], $_POST['cust_no'])) {
        
        // Retrieve POST data
        $movie_title = $_POST['movie_title'];
        $movie_date = $_POST['movie_date'];
        $movie_time = $_POST['movie_time'];
        $movie_food = $_POST['movie_food'];
        $movie_drink = $_POST['movie_drink'];
        $ticket_num = $_POST['ticket_num'];
        $cust_name = $_POST['cust_name'];
        $cust_no = $_POST['cust_no'];

        // Check if selectedSeats is set and not empty
        if (isset($_POST['selectedSeats']) && !empty($_POST['selectedSeats'])) {
            $selectedSeats = json_decode($_POST['selectedSeats'], true);

            // Loop through the selected seats and insert into the database
            foreach ($selectedSeats as $seat) {
                $sqlInsertSeats = "INSERT INTO fyp_reservation (seat_number) VALUES ('$seat')";
                if (!mysqli_query($conn, $sqlInsertSeats)) {
                    echo "Error inserting selected seats: " . mysqli_error($conn);
                    mysqli_close($conn);
                    exit; // Exit the script if an error occurs
                }
            }
        } else {
            // Handle case where selectedSeats is empty or not set
            echo "No selected seats data received.";
        }

        // Insert reservation details into the 'fyp_reservation' table
        $sqlInsertReservation = "INSERT INTO fyp_reservation (movie_title, movie_date, movie_time, movie_food, movie_drink, ticket_num, cust_name, cust_no) VALUES ('$movie_title', '$movie_date', '$movie_time', '$movie_food', '$movie_drink', '$ticket_num', '$cust_name', '$cust_no')";
        if (mysqli_query($conn, $sqlInsertReservation)) {
            //echo "Reservation Successful! Thank You for your patronage.";
            header("Location: reservation_successful.php");
        } else {
            echo "Error inserting reservation: " . mysqli_error($conn);
        }
    } else {
        // Handle case where required fields are not set
        echo "Incomplete POST data received.";
    }
} else {
    // Handle case where request method is not POST
    echo "Invalid request method.";
}

// Close database connection
mysqli_close($conn);
?>
