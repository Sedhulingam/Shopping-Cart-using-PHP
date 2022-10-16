<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        #parent{
            display:flex;
            text-align:center;
            justify-content:center;
            padding:5% 0% ;
        }
        fieldset{
            background-color:lightblue;
        }   
        #cart:hover{
            width: 50px;
            background-color:lightblue;
            border-radius:5px; 
            
        }
    </style>
</head>
<body>
    
    <fieldset> 
            <form action="mycart.php">
            <button id="cart" type="submit" >
            <img src="cart.png" height="30px" width="30px"; class="btn btn-outline-success">
            </button>
            </form>
        <div id="parent" >

            <div id="c1">
                <form action="cart.php" method="post">
                <img src="poco.jpg" height="200px" width="100px">&nbsp;<br>
                <h3 id="h3">Poco X2<h3>
                <h3 style="color:red"; id="h2">&nbsp;Rs:17,500/-</h3>
                <button type="submit" name="submit">Add to Cart</button>
                <input type="hidden" name="Item_name" value="POCO X2">
                <input type="hidden" name="Price" value="17500">
                </form>
            </div>
            <div id="c2">
                <form  action="cart.php" method="post">
                <img src="redmi.jpg" height="200px" width="100px"><br>
                <h3 id="h3">&emsp; Redmi Note 10 Pro</h3>
                <h3 style="color:red"; id="h3">&ensp;Rs:40,000/-</h3>
                <button type="submit" name="submit">Add to Cart</button>
                <input type="hidden" name="Item_name" value="Redmi Note 10 Pro">
                <input type="hidden" name="Price" value="40000">
                </form>   
            </div>
            <div id="c3">
                <form  action="cart.php" method="post">
                <img src="oneplus.jpg" height="200px" width="100px">&nbsp;<br>
                <h3 id="h3">&emsp; Oneplus 10 Pro</h3>
                <h3 style="color:red"; id="h2">&emsp;Rs:60,000/-</h3>
                <button type="submit" name="submit">Add to Cart</button>
                <input type="hidden" name="Item_name" value="Oneplus 10 Pro">
                <input type="hidden" name="Price" value="60000">
                </form>
            </div>
        </div>

    </fieldset>
</body>
</html>