<?php
session_start();
include('functions.php');
connect();
$session = $_SESSION["gatekeeper"];
// Test that the authentication session variable exists
if (isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == 1 )
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged IN Home</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="grid">

        <header>
            <img class="logo" src="img/logo.png" alt="Logo">
            
            <a class="button2 ghost-button-full-color" href="index.php">Go Back</a>
        </header>

        <?php include 'header.php';?>

       <section>

       <div class="form-style-6">
            <h1>Add a product</h1>
            <form method="post" action="add.php">


                <input  type="text"   name="name" placeholder="Enter Name" required />
                <input  type="text"   name="manufacturer" placeholder="Enter Manufacturer" required />
                <textarea type="text" name="description" required > Enter a product description </textarea>
                <input  type="number" name="price" placeholder="Enter Price" required />
                <input  type="number" name="stocklevel" placeholder="Enter Stock Level" required />
                <input  type="number" name="agelimit" placeholder="Enter Age Limit" required />

                <input type="Submit" value="Add" />

            </form>

            <p>
            <a class="linking" href="remove.php"> Remove a product</a>
        </p>


          
        </div>



       </section>


        <?php include 'footer.php';?>

</div>
    
</body>
</html>

<?php
}

else
{    
echo "Sign in as an admin to continue <a href='login.php'> here  </a> ";
}
?>