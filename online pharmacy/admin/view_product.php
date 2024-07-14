<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <ul class="menu">
                <li>
                    <a href="#" class="active">
                    <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-user"></i>
                    <span>profile</span>
                    </a>    
                </li>
                <li>
                    <a href="./add_product.php">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add Product</span>
                    </a>    
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-eye"></i>
                    <span>View Product</span>
                    </a>    
                </li>
                <li>
                    <a href="#" class="logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                    </a>
                    
                </li>
            </ul>
        </div>
    </div>


    <div class="main-contact">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Primary</span>
                <h2>Dashboard</h2>
                </div>
                <div class="userinfo">
                <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search">

                
                 
                </div>
                <img src="https://thebenclark.files.wordpress.com/2014/03/facebook-default-no-profile-pic.jpg?w=1200" alt="image" id="img">   
                </div>
        </div>
        <div class="body">
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script type="text/javascript">

                $(document).ready(function() {
                    
                    
                    //Fetch All Records
                    function loadtable(){
                        $.ajax({
                            url:"",
                            
                        });
                    }
                    loadtable();
                
                });

                </script>
                <title>Document</title>
            </head>
            <body>
                
            </body>
            </html>
        </div>
    </body>
</html>
