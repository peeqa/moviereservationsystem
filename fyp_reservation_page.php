<?php
$conn = mysqli_connect("localhost","root","","fyp_movie") or die
("Connection failed: " . $conn->connect_error);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="fyp_reservation_page_css.css">
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
                </ul>
            </div>
        </nav>

        <h1>Reservation Page</h1>

        <div id="reserve">
            <div class="container">
                <form name="form 1" method="post" action="fyp_reservation.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="movie_title"><b>1) Movie Title :</b></label>
                        </div>
                        <div class="col-75">
                            <select id="movie_title" name="movie_title">
                                <option value="movie1">Pearl</option>
                                <option value="movie2">Five Nights at Freddy's</option>
                                <option value="movie3">Amelie</option>
                                <option value="movie4">Edward Scissorhands</option>
                                <option value="movie5">American Psycho</option>
                                <option value="movie6">Fight Club</option>
                                <option value="movie7">The Silence of The Lambs</option>
                                <option value="movie8">Carrie</option>
                                <option value="movie9">Tokyo Godfathers</option>
                            </select><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="movie_date"><b>2) Movie Date :</b></label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="movie_date" name="movie_date"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="movie_time"><b>3) Screening Time :</b></label>
                        </div>
                        <div class="col-75">
                            <select id="movie_time" name="movie_time">
                                <option value="time1">8:30am</option>
                                <option value="time2">10:00am</option>
                                <option value="time3">12:00pm</option>
                                <option value="time4">2:30pm</option>
                                <option value="time5">4:00pm</option>
                                <option value="time6">6:30pm</option>
                                <option value="time7">8:00pm</option>
                                <option value="time8">10:00pm</option>
                                <option value="time9">12:00am</option>
                            </select><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="movie_food"><b>4) Food/Set :</b></label>
                        </div>
                        <div class="col-75">
                            <select id="movie_food" name="movie_food">
                                <option value="setA">Popcorn (Small)</option>
                                <option value="setB">Popcorn (Regular)</option>
                                <option value="setC">Popcorn (Large)</option>
                                <option value="setD">Cheesy Popcorn (Small)</option>
                                <option value="setD">Cheesy Popcorn (Regular)</option>
                                <option value="setD">Cotton Popcorn (Small)</option>
                                <option value="setD">Cotton Popcorn (Regular)</option>
                                <option value="setD">Royale Popcorn </option>
                                <option value="setD">Mini Sausages</option>
                                <option value="setD">Nuggets</option>
                                <option value="setD">Nachos</option>
                                <option value="setD">Dried Fish Snack</option>
                                <option value="setD">Family Set</option>
                                <option value="setD">Couple Set</option>
                                <option value="setD">Cheesy Set</option>
                                <option value="setD">Movie Set</option>
                                <option value="noOrder">N/A</option>  
                            </select><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="movie_drink"><b>5) Drink of Choice :</b></label>
                        </div>
                        <div class="col-75">
                            <select id="movie_drink" name="movie_drink">
                                <option value="pepsi">PEPSI</option>
                                <option value="cola">COKE</option>
                                <option value="mineralwater">MINERAL WATER</option>
                                <option value="icelemontea">ICE LEMON TEA</option>
                                <option value="fantagrape">FANTA GRAPE</option>
                                <option value="fantagrape">FROZEN STRAWBERRY FANTA</option>
                                <option value="noDrink">N/A</option>
                            </select><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="ticket_num"><b>6) No. of Tickets :</b></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="ticket_num" name="ticket_num"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="cust_name"><b>7) Name :</b></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="cust_name" name="cust_name"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="cust_no"><b>8) Phone Number :</b></label>
                        </div>
                        <div class="col-75">
                            <input type="tel" id="cust_no" name="cust_no"><br><br>
                        </div>
                    </div>
                    <br><div class="rectangle"></div><br>
                    <div class="seats"></div><br>
                    <p style="color:#fff;text-align:center;">Selected Seats: <span id="selected-seats">0</span></p><br>
                    <input type="hidden" name="selectedSeats" id="selectedSeats">
                    <button type="reset">RESET</button>
                    <button type="submit">RESERVE</button>


                </form>
            </div>
        </div>

        <script src="navindex.js"></script>

    </body>
    <br><br>
    <footer>
        <div class="icons">
            <br>
            <table>
                <tr>
                    <td style="font-size:15px;background-color:transparent;"><p>Miru Cinemas Sdn Bhd</p><br></td>
                    <td colspan=4 style="font-size:15px;background-color:transparent;"><p>CONTACT US</p><br></td>
                </tr>
                <tr>
                    <td style="font-size:15px;background-color:transparent;"><p>No. 1, Jalan 31/10A, Taman Batu Muda, <br>68100 Kuala Lumpur, Malaysia.</p></td>
                    <td style="font-size:15px;background-color:transparent;"><a href="mailto:mirucinemas@gmail.com" target="blank"><i class="fa-solid fa-envelope"></i></a></td>
                    <td style="font-size:15px;background-color:transparent;"><a href="tel:0164309768" target="blank"><i class="fa-solid fa-phone"></i></a></td>
                    <td style="font-size:15px;background-color:transparent;"><a href="https://www.instagram.com/mirucinemas/" target="blank"><i class="fa-brands fa-square-instagram"></i></a></td>
                </tr>
                <tr>
                    <td style="font-size:15px;background-color:transparent;"><p>Reach out to us at : mirucinemas@gmail.com</p><br></td>
                </tr>
            </table>
        </div>
        <br>
    </footer>
</html>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const seatsContainer = document.querySelector('.seats');
    const selectedSeatsCount = document.getElementById('selected-seats');
    const checkoutButton = document.querySelector('.checkout-btn');

    let selectedSeats = 0;

    // Create seats
    const seatsCount = 70;
    for (let i = 1; i <= seatsCount; i++) {
        const seat = document.createElement('div');
        seat.classList.add('seat');
        seat.innerText = i;
        seat.addEventListener('click', function () {
            if (!this.classList.contains('selected')) {
                this.classList.add('selected');
                selectedSeats++;
            } else {
                this.classList.remove('selected');
                selectedSeats--;
            }
            updateSelectedSeatsCount();
        });
        seatsContainer.appendChild(seat);
    }

    // Update selected seats count
    function updateSelectedSeatsCount() {
        selectedSeatsCount.innerText = selectedSeats;
    }

    // Checkout button click event
    checkoutButton.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the form from submitting

        // Extract selected seat numbers
        const selectedSeatNumbers = [];
        const selectedSeats = document.querySelectorAll('.seat.selected');
        selectedSeats.forEach(seat => {
            selectedSeatNumbers.push(seat.innerText);
        });

        // Send selected seat numbers to PHP script using AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'fyp_reservation.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Handle response from PHP script if needed
                alert(xhr.responseText);
            }
        };
        xhr.send('selectedSeats=' + JSON.stringify(selectedSeatNumbers));
    });

});
</script>