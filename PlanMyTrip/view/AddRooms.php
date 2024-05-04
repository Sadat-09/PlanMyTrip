<?php 
   require_once('../controller/sessioncheck.php');
   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Room Booking </title>
    <link rel="stylesheet"  href="../asset/CSS/Room_Book.css">
</head>
<body>
    <fieldset>
        <legend>Add Rooms</legend>

       
        Room Type:
        
        <select id="roomtype" name="roomtype">
        <option value="single">single</option>
        <option value="double">double</option>
        </select><br>
        

            
        location:
        <select id="location" name="location">
        <option value="Dhaka">Dhaka</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Comilla">Comilla</option>
        
    </select><br><br>
    Date:
    <input type="date" id="date" name="date"><br><br>
    Price:
    <input type="text" id="price" name="price"><br><br>

    Hotel Name:
    <input type="text" id="hotelname" name="hotelName"><br> <br>
    <input type="button" name="submit" value="Add Room" onclick="Add()"><br>
    <span  id="Add"></span><br><br>
  
    <a href="adminHome.php">Home</a>
</fieldset>
<script src="../asset/JS/Addroom.js"></script>
</body>
</html>
