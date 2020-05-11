<?php include './common/header.php';
include '../controllers/eventController.php';
$events = getAllEvents();

?>

<!-- Events Gallery -->

<section id="events">

    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">textsms</i>
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Search Events</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="row">
            <h4 class="center">
                <span class="teal-text">Popular</span> Events</h4>

            <?php

foreach ($events as $product) {

    echo '<a href=./event.php?id='. $product["id"].'>';
    echo '<div class="col s12 m3">';
    echo '<div class="card">';
    echo '<div class="card-image">';
    echo '<img src="../uploads/' . $product["image"] . '" alt="' . $product["title"] . '">';
    echo ' <span class="card-title red-text">' . $product["title"] . '</span>';
    echo ' </div>';
    echo ' <div class="card-content">';
    echo ' <p> ' . $product["description"] . '.';
    echo ' </div>';
    echo ' </div>';
    echo ' </div>';
    echo '</a>';

}
?>

        </div>

        <div class="row center">
            <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
</section>


<?php include './common/footer.php';?>