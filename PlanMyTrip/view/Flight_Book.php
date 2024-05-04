<?php 
    require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Flight Booking</title>
    <link rel="stylesheet"  href="../asset/CSS/flight_book.css">
</head>
<body>

    <header>
        <div class="header-container">
            <h2>Flight Booking Form</h2>
        </div>
    </header>

    <fieldset>
        <legend>Flight Book</legend>
        <form action="../controller/Flight_validation.php" method="post" onsubmit="return Flight()">
            Name:
            <input type="text" id="name" name="name" ><br><br>
            Email:
            <input type="text" id="email" name="email" ><br><br>
            From:
            <select id="from" name="from">
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Comilla">Comilla</option>
            </select>
           To:
            <select id="to" name="to">
                <option value="Barisal">Barisal</option>
                <option value="Coxbazar">Coxbazar</option>
                <option value="Feni">Feni</option>
            </select><br>
            <input type="submit" name="submit" value="Find">
        </form> 

      

        <form action="../controller/ShowFaq.php" method="post">
            <input type="submit" name="submit3" value=" FAQ">
        </form>

        <form action="home.php" method="post">
            <input type="submit" name="submit4" value=" Back Home">
        </form>
    </fieldset>

    <script src="../asset/JS/Flight_validation.js"></script>
</body>
</html>
