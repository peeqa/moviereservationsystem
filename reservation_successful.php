<?php
$conn = mysqli_connect("localhost","root","","fyp_movie") or die
("Connection failed: " . $conn->connect_error);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="ressuccess.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Miru Cinemas - Reservation</title>
    </head>
    <body>
        <div class="header">
            <br>
         </div>
         <nav class="navbar">
             <div class="navbar-brand">
                 <img src="images/miruicon2.png">
             </div>
             <div class="navbar-list">
                 <ul>
                     <li><a href="fyp_movie_home_1.html">HOME</a></li>
                     <li><a href="fyp_movie_movielist.html">MOVIES</a></li>
                     <li><a href="fyp_movie_promo.html">PROMO</a></li>
                     <li><a href="fyp_movie_fnb.html">F&B</a></li>
                     <li><a href="cardgame.html">GAME</a></li>
                     <li><a href="fyp_movie_about.html">ABOUT</a></li>
                     <li><a href="fyp_reservation_page.php"><button>RESERVE</button></a></li>
                 </ul>
             </div>
         </nav>
        <div class="successoutput"><h1>Reservation Successful!<br>Thank You for Your Patronage.</h1></div>
        <div class="resit">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Movie Title</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Food</th>
                    <th>Drink</th>
                    <th>No. of Ticket(s)</th>
                    <th>Name</th>
                    <th>Phone Num</th>
                </tr><br>
                <?php 
                $cust = mysqli_query($conn, "SELECT * FROM fyp_reservation ORDER BY ticket_id DESC");
                $cnt=0;
                while($row = mysqli_fetch_assoc($cust)){
                ?>
                <tr>
                    <td><?php print $row['ticket_id'];?></td>
                    <td><?php print $row['movie_title'];?></td>
                    <td><?php print $row['movie_date'];?></td>
                    <td><?php print $row['movie_time'];?></td>
                    <td><?php print $row['movie_food'];?></td>
                    <td><?php print $row['movie_drink'];?></td>
                    <td><?php print $row['ticket_num'];?></td>
                    <td><?php print $row['cust_name'];?></td>
                    <td><?php print $row['cust_no'];?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        </div>
        <script src="navindex.js"></script>
    </body>
    <br><br><br><br><br>
    <footer>
        <div class="icons">
            <br>
            <table>
                <tr>
                    <td><p>Miru Cinemas Sdn Bhd</p><br></td>
                    <td colspan=4><p>CONTACT US</p><br></td>
                </tr>
                <tr>
                    <td><p>No. 1, Jalan 31/10A, Taman Batu Muda, <br>68100 Kuala Lumpur, Malaysia.</p></td>
                    <td><a href="https://www.gmail.com" target="blank"><i class="fa-solid fa-envelope"></i></a></td>
                    <td><a href="tel:0164309768" target="blank"><i class="fa-solid fa-phone"></i></a></td>
                    <td><a href="https://www.instagram.com" target="blank"><i class="fa-brands fa-square-instagram"></i></a></td>
                    <td><a href="https://twitter.com" target="blank"><i class="fa-brands fa-twitter"></i></a></td>
                </tr>
                <tr>
                    <td><p>Reach out to us at : mirucinemas@gmail.com</p><br></td>
                </tr>
            </table>
        </div>
        <br>
    </footer>
</html>