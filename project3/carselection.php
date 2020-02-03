<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>



<body>

    <?php require_once('nav.php');?>

    <div class="card-deck m-3 text-center">
        <div class="card">
            <img src="images/blacksuv.jpg" class="card-img-top" alt="car image">
            <div class="card-body">
                <h5 class="card-title">Black SUV</h5>
                <p class="card-text">Price $100.00</p>
                <form method="post" action="dhc.php">
                    <select class="custom-select" size="3" name="time">
                        <option selected>Select Time</option>
                        <option value="00:00am-1:00am">00:00am-1:00am</option>
                        <option value="2:00am-3:00am">2:00am-3:00am</option>
                        <option value="3:ooam-4:00am">3:ooam-4:00am</option>
                    </select>
                    <br>
                    <br>
                    <div class="row container-fluid mr-4 ml-5">
                        <!--                <a href="payment.php" class="btn btn-primary">Select</a>-->
                        <input type="hidden" name="car" value="Black SUV">
                        <input type="hidden" name="price" value="100.00">
                        <input type="hidden" name="img" value="images/blacksuv.jpg">
                        <input class="btn btn-primary btn-lg" type="submit" value="submit">

                    </div>
                </form>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
        <div class="card text-center">
            <img src="images/blkcar.jpg" class="card-img-top" alt="car image">
            <div class="card-body">
                <h5 class="card-title">Grey Sedan</h5>
                <p class="card-text">Price $200.00</p>

                <form method="post" action="dhc.php">
                    <select class="custom-select" size="3" name="time">
                        <option selected>Select Time</option>
                        <option value="00:00am-1:00am">00:00am-1:00am</option>
                        <option value="2:00am-3:00am">2:00am-3:00am</option>
                        <option value="3:ooam-4:00am">3:ooam-4:00am</option>
                    </select>
                    <br>
                    <br>
                    <div class="row container-fluid mr-4 ml-5">
                        <!--                <a href="payment.php" class="btn btn-primary">Select</a>-->
                        <input type="hidden" name="car" value="Grey Sedan">
                        <input type="hidden" name="price" value="200.00">
                        <input type="hidden" name="img" value="images/blkcar.jpg">
                        <input class="btn btn-primary btn-lg" type="submit" value="submit">

                    </div>
                </form>

            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
        <div class="card text-center">
            <img src="images/bluesuv.jpg" class="card-img-top" alt="car image">
            <div class="card-body">
                <h5 class="card-title">Blue Truck</h5>
                <p class="card-text">Price $300.00</p>

                <form method="post" action="dhc.php">
                    <select class="custom-select" size="3" name="time">
                        <option selected>Select Time</option>
                        <option value="00:00am-1:00am">00:00am-1:00am</option>
                        <option value="2:00am-3:00am">2:00am-3:00am</option>
                        <option value="3:ooam-4:00am">3:ooam-4:00am</option>
                    </select>
                    <br>
                    <br>
                    <div class="row container-fluid mr-4 ml-5">
                        <!--                <a href="payment.php" class="btn btn-primary">Select</a>-->
                        <input type="hidden" name="car" value="Blue Truck">
                        <input type="hidden" name="price" value="300.00">
                        <input type="hidden" name="img" value="images/bluesuv.jpg">
                        <input class="btn btn-primary btn-lg" type="submit" value="submit">

                    </div>
                </form>

            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
        </div>
    </div>

    <?php require_once('footer.php');?>










    <!-- Optional JavaScript 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>