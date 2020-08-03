<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Kevin's Fine Dining/Reservations</title>
    <style>
        body{
        font-family: Cambria, Arial, sans-serif;
        }
        #title{
        text-align: center;
        margin-top: 40px;
        }
        #main {
        margin-left: auto;
        margin-right: auto;
        width: 1200px;
        padding: 10px;
        border-style : groove;
        border-width: 3px;
        }
        #Navigation{
        background-color: black;
        position: fixed;
        overflow: hidden;
        top: 0;
        width: 100%;
        }
    a{
    color: white;
    text-decoration: none;
    display: block;
    float: left;
    padding: 14px 16px;
    }
    h2, h1,h3{
    margin: 0;
    }
    a:hover {
    color: gold;
    }






    </style>
</head>
<body background="images/EiffelTower.jpg">

<div id="Navigation"><font color="white">
    <a href="index.php" alt="Home">Home</a>
    <a href="Menu.php" alt="Menu">Menu</a>
    <a href="Reservations.php" alt="Reservations" >Reservations</a>
    <a href="Photos.php" alt="Photos">Photos</a>
    <a href="Review.php" alt="Reviews">Reviews</a></font>
</div>

<div id="title"><br> <strong><font color="gold"><h2>Kevin's Fine Dining</h2></font> </strong><br></div>

    <div id="main">
        <font color="white"><h2>Reservations</h2><br>
        </font>

        <font color="gold">
            First name:
            <input type="text" name="firstname"><br><br>
            Last name:
            <input type="text" name="lastname"><br><br>
            Number of Guests:
            <input type="text" name="NumofGuests"> <br><br>
            Arrival Time:
            <input type="time" name="time"> <br><br>
            Date:
            <input type="date" name="date"> <br>
            <br><button>Submit!</button>
            <select id="food" name="Food">
                <option value="none">Select Free Side</option>
                <option value="Grilled Chicken">Grilled Chicken</option>
                <option value="Peanut Butter Cookies">Peanut Butter Cookies</option>
                <option value="Avocado Toast">Avocado Toast</option>
            </select>
        </font>
    </div>




</body>
</html>