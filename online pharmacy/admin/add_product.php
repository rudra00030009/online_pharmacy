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
                <title>Document</title>
                <link rel="stylesheet" href="./add_product_style.css">
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script type="text/javascript">
                $(document).ready(function() {
                $(".submit").on("click", function(e) {
                    e.preventDefault();

                    var name = $("input[name='pname']").val();
                    var description = $("textarea[name='Description']").val();
                    var price = $("input[name='pprice']").val();
                    var stock_quantity = $("input[name='stockquantity']").val();
                    var category = $("select[name='category']").val();
                    var dosage = $("input[name='pdosage']").val();
                    var side_effect = $("textarea[name='side_effect']").val();
                    var manufacturer = $("input[name='pmanufacturer']").val();
                    var imagelink = $("input[name='pimagelink']").val();

                    // Validate form data (client-side validation)
                    console.log({ name: name,
                        description: description,
                        price: price,
                        stock_quantity: stock_quantity,
                        category: category,
                        dosage: dosage,
                        side_effect: side_effect,
                        manufacturer: manufacturer,
                        imagelink: imagelink
                    })/*
                    if (!name || !description || !price || !stock_quantity || !category || !dosage || !side_effect || !manufacturer || !imagelink) {
                        alert("All fields are required");
                        return;
                    }*/

                    // Prepare JSON object
                    var jsonobj = {
                        pname: name,
                        Description: description,
                        pprice: price,
                        stockquantity: stock_quantity,
                        category: category,
                        pdosage: dosage,
                        side_effect: side_effect,
                        pmanufacturer: manufacturer,
                        pimagelink: imagelink
                    };

                    $.ajax({
                        url: "http://localhost/online%20pharmacy/api/api-insert.php", // Adjust URL as needed
                        type: "POST",
                        data: JSON.stringify(jsonobj),
                        contentType: "application/json",
                        success: function(data) {
                            if (data.status === true) {
                                alert(data.message);
                            } else {
                                alert(data.message);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log('Error:', textStatus, errorThrown);
                            alert('Failed to insert data');
                        }
                    });
                });
            }); 
                </script>

            </head>
            <body>
                <div class="background">
                    
                    <div class="container">
                        <form action="">
                            <div class="name">
                                Enter Product Name <br>
                                <input type="text" class="inp" name="pname">
                            </div>            
                            <div class="input">
                                Enter Description <br>
                                <textarea name="Description" id="Description" class="Description"></textarea>
                            </div>
                            <div class="input">
                                Enter Price <br>
                                <input type="number" name="pprice" class="inp">
                            </div>
                            <div class="input">
                                Enter Stock Quantity <br>
                                <input type="number" name="stockquantity" class="inp">
                            </div>
                            <div class="input">
                                Select category<br>
                                <select name="category" id="category">
                                <?php
                                require 'dbconfig.php';
                                $query = "SELECT * FROM categories";
                                $result = $con->query($query);
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['category_id'] . "'>" . $row['name'] . "</option>";
                                }
                                ?>
                                </select>
                            </div>
                            <div class="input">
                                Enter Dosage <br>
                                <input type="text" class="inp" name="pdosage">
                            </div>
                            <div class="input">
                                Enter Side Effect <br>
                                <textarea name="side_effect" id="side_effect" class="Description"></textarea>
                            </div>
                            <div class="input">
                                Enter Manufacturer <br>
                                <input type="text" class="inp" name="pmanufacturer">
                            </div>
                            <div class="input">
                                Enter Image Link <br>
                                <input type="text" class="inp" name="pimagelink">
                            </div>
                            <br>  
                            <input type="submit" name="submit" class="submit">
                        </form>
                    </div>
                </div>
            </body>
            </html>

                    </div>
                </div>
            </body>
            </html>
