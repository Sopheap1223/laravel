<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity Media</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://kit.fontawesome.com/47c7b2da67.js" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-size: 20px;
            font-family:'Lora', serif;
        }
        .navigation_bar{
            background-color:black;
            height: 80px;
            width: 100%;
            display: flex;
            align-items:center;
            justify-content: space-between;
            padding: 0 5%;
        }
        .logo{
            position: absolute;
            height: 80px;
            left: 0px;
            width: 85px;

        }
        .navigation_bar ul{
            list-style: none;
            display:flex;
        }
        .navigation_bar ul li {
            padding: 10px 80px;
            position: relative;

        }
        .navigation_bar ul li a {
            color:rgb(255, 115, 0);
            text-decoration: none;
            font-size: 20px;
        }
        .navigation_bar ul li a:hover {
            color: orange;
        }
        .navigation_bar ul li:hover .dropdown ul{
            display: block;
        }
        .navigation_bar ul li:hover .dropdown{
            display: block;
            position:absolute;
            left: 0;
            top: 100%;
            background-color: rgb(255, 115, 0);
        }
        .dropdown ul{
            display: none;
            margin: 10px;
        }
        .dropdown ul li {
            width: 150px;
            padding: 10px;
        }
        .body{
            height: 20px;
            height: 120vh;
            background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fnature%2F&psig=AOvVaw1v5sjvUVJ4mNyUjaY1-DcL&ust=1684659711411000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJDH28_Eg_8CFQAAAAAdAAAAABAE);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat    ;
        }

    </style>
</head>
<body>
<div class="navigation_bar">
    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fnature%2F&psig=AOvVaw1v5sjvUVJ4mNyUjaY1-DcL&ust=1684659711411000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJDH28_Eg_8CFQAAAAAdAAAAABAE" class="logo">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Memeber</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>
<div class="body">
    &nbsp;
</div>
</body>
</html>
