<?php include './common/header.php'; ?>




<?php $eventId = $_GET['id']; ?>

    <style>
        .row {
            margin-top: 5%;
        }
        .btn {
            margin-top: 10px;

        }
    </style>

    <div class="container">
        <div class="row m3">
            <div class="col s6">
                <div class="card">
                    <div class="card-content">
                        <img width="100%" src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card">
                    <div class="card-content">
                        <h4 class="h4">
                            Title
                        </h4>
                        <p>Lorem ipsum dolor sit.</p>
                        <h6>Oraganized by: <strong>Munda</strong> </h6>
                        <h6>Type: <strong>Birthday</strong> </h6>
                        <h6>Price: <strong>330</strong> </h6>
                        <h6>Available seats: <strong>330</strong> </h6>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Book Now
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include './common/footer.php';
