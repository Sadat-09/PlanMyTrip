<?php 
   require_once('../controller/sessioncheck.php');
   
?>


<!DOCTYPE html>
<html>
<head>
    <title>Flight Booking </title>
    <link rel="stylesheet"  href="../asset/CSS/Room_Book.css">
</head>
<body>
    
    <fieldset>
    <legend>Add Flights</legend>
   
      

        form:
            <select id="from"  name="from" >
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Comilla">Comilla</option>
            
        </select>
      To:
        <select id="to" name="to" >
            <option value="Barisal">Barisal</option>
            <option value="Coxbazar">Coxbazar</option>
            <option value="Feni">Feni</option>
           
        </select><br><br>
        Date:
        <input type="date" id="date" name=date><br><br>

        time:
        <input type="time" id="time" name="time"><br><br>


        price:
        <input type="text" id="price" name=price ><br><br>
        
       

        <input type="submit" name="submit" value="ADD" onclick="Flight()"><br>
        <span id="Add"></span><br>
   
    <a href="adminHome.php">Home</a>

        </fieldset>
        <script src="../asset/JS/Addflight.js"></script>

        </body>