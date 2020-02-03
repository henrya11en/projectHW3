<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php require_once('nav.php');?>


    <div class="container-fluid">
        <div class="row m-2">
            <div class="col">
                <h4>Billing</h4>
                <form method="post" action="dhp.php">
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" name="fname">
                        </div>
                        <div class="form-group col-sm">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" name="lname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="ccard">Credit Card</label>
                            <input type="text" class="form-control" name="ccard">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="expdate">Expiration Date</label>
                            <input type="date" class="form-control" name="expdate">
                        </div>

                        <div class="form-group col-sm-2">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" name="cvv">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" name="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" name="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select name="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" name="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="hidden" name="car" value="<?php echo $_SESSION["car"]?>">
                    <input type="hidden" name="price" value="<?php echo $_SESSION["price"]?>">
                    <input type="hidden" name="time" value="<?php echo $_SESSION["time"]?>">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col">
                <div class="card container-fluid" style="width: 25rem;">

                    <img src="<?php echo $_SESSION["img"]?>" class="img-fluid">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $_SESSION["car"]?></li>
                        <li class="list-group-item">Duration <?php echo $_SESSION["time"]?></li>
                        <li class="list-group-item">Total: $<?php echo $_SESSION["price"]?></li>
                    </ul>

                </div>
            </div>
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>