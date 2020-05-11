<?php include './common/header.php';
    include '../controllers/eventController.php';

    if(!isset($_GET['id'])) {
        header("Location ./404.php");
        return;
    }



    $event = getSingleEvent($_GET['id']);
    if($event){
        while ($result = $event->fetch_assoc()) {
            $title = $result['title'];
            $description = $result['description'];
            $img = "../uploads/" . $result['image'];
            $category = $result['category'];



        }
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
        .Imgcard {
            text-align: center;
        }
    </style>

    <div class="container">
        <div class="row m3">
            <div class="col s6">
                <div class="card Imgcard">
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
                        <h6>Organized by: <strong>Munna Tech</strong></h6>
                        <h6>Type: <strong><?php echo $category ?></strong></h6>
                        <h6>Price: <strong>330</strong></h6>
                        <h6>Available seats: <strong>330</strong></h6>
                        <form action="">
                            <div class="row">
                                <div class="col s-6">
                                    <label for=""></label><input placeholder="No. of seats" type="number" name="" id="">
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
