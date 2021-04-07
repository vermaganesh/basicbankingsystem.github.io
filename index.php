<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Basic Banking System</title>

</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row intro py-1" style="background-image: url(img/bg1.jpg);">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h2>Welcome to</h2>
                    <h1> Bank of TSF</h1>
                </div>
            </div>
            
        </div>

        <div class="card-group">
            <div class="card">
                
                <div class="card-body text-center">
                <img src="img/userimg.png" alt="userimg" class="img-fluid">
                <br>
                <br>
                <a href="createuser.php"><button style="background-color: primary;">Create User</button></a>
                </div>
                
            </div>
            <div class="card ">
                
                <div class="card-body text-center">
                <img src="img/transaction.jpg" alt="transferimg" class="img-fluid">
                <br>
                <br>
                <a href="transfermoney.php"><button style="background-color: success;">Make a Transaction</button></a>
                </div>
                
            </div>
            <div class="card">
                
                <div class="card-body text-center">
                <img src="img/histories.jpg" alt="historyimg" class="img-fluid">
                <br>
                <br>
                <a href="transactionhistory.php"><button style="background-color:warning;">Transaction History</button></a>
                </div>
                
            </div>
        </div>


    </div>

    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Verma Ganesh</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>