<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <style>
        #col{
            text-align:center;
        }
        #container{
            align-items:center;
            display:flex;
            text-align: center;
             /* background-color:lightblue;  */
            justify-content:center;      
        }
        #total{
            margin: 5% ;
            padding:0% 1%;
            padding-bottom:1%;
            border: 1px solid black;
            background-color:lightgrey;
               
        }
        table{
            border-collapse:seperate;
            border-spacing: 15px;
            border: 1px solid black;
            background-color:lightblue;
        }
        thead tr th{
            border-bottom: 1px solid black;
            border-collapse:seperate;
            border-spacing:5px, 5px;
        }
       #bttn:hover{
            width:80%;
            text-align:center;
            background-color:#FF8BA0;
            border-radius:5px;
       }

    </style>
</head>
<body>
    <a href="index.php">Home</a>  
    <div id="container">
        <div class="row">
            <div id="col">
                <h2>My Cart</h2>
            </div>
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">SI.NO</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php
                    
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $a=$key+1;
                            
                            echo"
                            <tr>
                                <td>$a</td>
                                <td>$value[Item_name]</td>
                                <td>$value[Price]<input type='hidden' class='prc1' value='$value[Price]'></td>
                                <td><input class='text-center quant1' type='number' onchange='subTotal()' value='$value[Quantity]' min='1' max='10'</td>
                                <td class='itotal'></td>
                                <td>
                                    <form action='cart.php' method='post'>
                                    &ensp; <button name ='remove' id='bttn' class='btn btn-outline-danger'>Remove</button>
                                    <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>
                            ";
                        }  
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div id="total">
            <h3>Grand Total:</h3>
                <button id="gtotal"></button>
        </div>
    </div>   
    <script>
        
        var gt=0;
        var prc1=document.getElementsByClassName('prc1');
        var quant1=document.getElementsByClassName('quant1');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        
        function subTotal()
        {
            gt=0;
            for(i=0;i<prc1.length;i++)
            {
                itotal[i].innerText=(prc1[i].value)*(quant1[i].value);
                gt=gt+(prc1[i].value)*(quant1[i].value)*0.05;
            }
            gtotal.innerText=gt;
        }
        subTotal();
    
    </script>

</body>

</html>