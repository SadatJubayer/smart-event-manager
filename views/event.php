<?php include './common/header.php';
    include '../controllers/eventController.php';
    include '../controllers/categoryController.php';
    include '../controllers/userController.php';

    if(isset($_POST['bookEvent'])) {
        echo 'click';
        bookEvent($_GET['id'], $_COOKIE['userId'], $_POST['seats']);
    }

    if(!isset($_GET['id'])) {
        header("Location: ./404.php");
        return;
    }
    $event = getSingleEvent($_GET['id']);
    if($event){
        while ($result = $event->fetch_assoc()) {
            $title = $result['title'];
            $description = $result['description'];
            $img = "../uploads/" . $result['image'];

            $categoryId = $result['category'];
            $category =  getCategoryName($categoryId);

            $organizerId = $result['creator'];
            $organizer = getOrganizerName($organizerId);

            $price = getPrice($_GET['id']);
            $total = getTotal($_GET['id']);
            $booked = getBooked($_GET['id']);

        }
    } else {
        header("Location: ./404.php");
        return;
    }


?>


    <style>
        .row {
            margin-top: 5%;
        }

        .btn {
            margin-top: 10px;

        }
        .mainImage {
            max-width: 300px;
            margin: 0 auto;
        }
        .ImageCard {
            text-align: center;
        }
    </style>

    <div class="container">
        <div class="row m3">
            <div class="col s6">
                <div class="card ImageCard">
                    <div class="card-content">
                        <img width="100%" class="mainImage"  src="<?php echo $img ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card">
                    <div class="card-content">
                        <h4 class="h4 ">
                            <?php echo $title ?>

                        </h4>
                        <p><?php echo $description ?></p>
                        <h6>Organized by: <strong><?php echo $organizer ?> </strong></h6>
                        <h6>Type: <strong><?php echo $category ?></strong></h6>
                        <h6>Price: <strong><?php echo $price ?></strong></h6>
                        <h6>Available seats: <strong><?php echo ($total - $booked) . ' / ' . $total ?></strong></h6>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col s-6">
                                    <label for=""></label><input min="1" max="<?php echo ($total - $booked) ?>" required placeholder="No. of seats" type="number" name="seats" id="">
                                </div>
                                <div class="col s-6">

                                    <button class="btn waves-effect blue darken-3" type="submit" name="bookEvent">Book Now
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include './common/footer.php';
