<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - Ebukumenu</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <style type="text/css">
        * {
            padding:0;
            margin:0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #B9B7BD
        }
        a {
            color:inherit;
            text-decoration: none;
        }
        /* detail konten */
        .container {
            width: 540px;
            margin-left: auto;
            margin-right: auto;
        }
        .card-menu {
            background-color: #fff;
            position: relative;
            margin-bottom:15px;
        }
        .card-menu .btn-back {
            border:1px solid #ccc;
            padding: 10px 15px;
            display: inline-block;
            border-radius: 50%;
            background-color: #fff;
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .card-menu img {
            width: 100%;
        }
        .card-body {
            padding: 15px;
        }
        .card-body .menu-name {
            font-size: 18px;
        }
        .card-body .menu-description {
            font-size: 14px;
            color: #282828;
            margin-bottom: 15px;
        }
        .card-body .menu-price {
            font-weight: bold;
        }
        .extra-menu {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 25px;
        }
        .extra-menu h3 {
            margin-bottom: 8px;
        }
        .extra-menu ul {
            list-style: none;
        }
        .extra-menu ul li {
            padding: 5px 0;
            display: flex;
            justify-content: space-between;
        }
        .extra-menu ul li:not(:last-child) {
            border-bottom: 1px dashed;
        }
        @media (max-width: 768px){
            .container {
                width: 100%;
            }
        }
    </style>
</head>
<body>

        <!-- detail content -->
         <div class="container">
            <div class="card-menu">

                <a href="index.php" class="btn-back"><i class="fa fa-arrow-left"></i></a>

                <img src="uploads/produks/mie ayam.jpg">

                <div class="card-body">
                    <div class="menu-name">Paket 1</div>
                    <div class="menu-description">Mie ayam + bakso + es teh</div>
                    <div class="menu-price">Rp 15.000</div>
                </div>
            </div>

            <div class="extra-menu">
                <h3>Menu Tambahan</h3>
                <ul>
                    <li><span>Lontong</span><span> Rp 3.000</span></li>
                    <li><span>Gorengan</span><span> Rp 2.000</span></li>
                    <li><span>Kerupuk</span><span> Rp 1.000</span></li>
                </ul>
            </div>
         </div>


</body>
</html>