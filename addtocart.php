<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addtocart.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="header">
        <p class="logo"> 
            <img src="logoforbuy-removebg-preview.png">
        </p>
            <t> Best Purchase this summer </t>    
            <div class="image">
                <img src="sun.gif">
            </div>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i>
        <p id="count">0</p></div>

    </div>
    
    <div class="container">
        <div id="root"></div>
        <div class="sidebar">
            <div class="head"><p>My Cart</p></div>
            <div id="cartItem">Your cart is empty</div>
            <div class="foot">
                <h3> Total</h3>
                <h2 id="total"> $0.00</h2>
            </div>
        </div>
    </div>
   
    <script src="script/addtocart.js"></script>
    
</body>
</html>