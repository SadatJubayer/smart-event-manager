<?php include './common/header.php';?>


<!-- Slider  -->

<section class="slider">
    <ul class="slides">
        <li>
            <img src="https://unsplash.com/photos/czVtGYACOMg/download?force=true&w=640" alt="">
            <div class="caption center-align">
                <h2>Your Wedding Organizer</h2>
                <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Veniam non illo earum cumque id est!</h5>
                <a href="#" class="btn btn-large">Learn More</a>
            </div>
        </li>
        <li>
            <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
            <div class="caption left-align">
                <h2>Your Birthday Organizer</h2>
                <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Veniam non illo earum cumque id est!</h5>
                <a href="#" class="btn btn-large">Learn More</a>
            </div>
        </li>
        <li>
            <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
            <div class="caption right-align">
                <h2>Your Any Event Organizer</h2>
                <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Veniam non illo earum cumque id est!</h5>
                <a href="#" class="btn btn-large">Learn More</a>
            </div>
        </li>
    </ul>
</section>

<!-- Search Panel -->
<section id="search" class="section section-search teal darken-1 white-text center scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3>Search Events</h3>
                <div class="input-field">
                    <input class="white grey-text autocomplete" placeholder="Birthday, Marriage etc..." type="text"
                        id="autocomplete-input">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Popular Events -->
<!-- Section: Popular -->
<section id="popular" class="section section-popular scrollspy">
    <div class="container">
        <div class="row">
            <h4 class="center">
                <span class="teal-text">Popular</span> Events</h4>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                        <span class="card-title">Cancun, Mexico</span>
                    </div>
                    <div class="card-content">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis
                            laudantium, architecto
                            delectus?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                        <span class="card-title">The Bahamas</span>
                    </div>
                    <div class="card-content">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis
                            laudantium, architecto
                            delectus?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                        <span class="card-title">Nova Scotia</span>
                    </div>
                    <div class="card-content">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis
                            laudantium, architecto
                            delectus?
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 center">
                <a href="events.php" class="btn btn-large grey darken-3">
                    <i class="material-icons left">send</i> Explore More
                </a>
            </div>
        </div>
    </div>
</section>



<!-- Contact Us -->
<section id="contact" class="section section-contact scrollspy">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card-panel grey lighten-3">
                <h5>Contact With Us..</h5>
                <div class="input-field">
                    <input type="text" placeholder="Name" id="name">
                    <label for="name">Name</label>
                </div>
                <div class="input-field">
                    <input type="email" placeholder="Email" id="email">
                    <label for="email">Email</label>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Phone" id="phone">
                    <label for="phone">Phone</label>
                </div>
                <div class="input-field">
                    <textarea class="materialize-textarea" placeholder="Enter Message" id="message"></textarea>
                    <label for="message">Message</label>
                </div>
                <input type="submit" value="Submit" class="btn">
            </div>
        </div>
    </div>
</section>




<?php include './common/footer.php';?>