<?php include './common/header.php'; ?>
<?php include '../controllers/categoryController.php'; ?>
<?php $categories = getAllCategories(); ?>


<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;

    }
</style>

<div class="valign-wrapper row login-box">
    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
        <form method='POST' action='../controllers/eventController.php' enctype="multipart/form-data">
            <div class="card-content">
                <span class="card-title">Enter credentials</span>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="title">Title</label>
                        <input type="text" class="validate" name="title" id="title"/>
                    </div>

                    <div class="input-field col s12">
                        <select name='category'>
                            <option value="" disabled selected>Select Category</option>
                            <?php foreach ($categories as $category) {
                                echo "<option value='" . $category["id"] . "'>" . $category["name"] . "</option>";
                            } ?>
                        </select>
                    </div>

                    <div class="input-field col s12">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Choose Image</span>
                                <input name='image' type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <label for="title">Description</label>
                        <input type="text" class="validate" name="description" id="description"/>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            <label for="price">Ticket Price</label>
                            <input type="number" class="validate" name="price" id="price"/>
                        </div>
                        <div class="col s6">
                            <label for="seats">Total Seats</label>
                            <input type="number" class="validate" name="total" id="seats"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            <label for="from">From</label>
                            <input type="date"  name="from" id="from"/>
                        </div>
                        <div class="col s6">
                            <label for="to">To</label>
                            <input type="date"  name="to" id="to"/>
                        </div>
                    </div>


                    <div class="row text-center">
                        <div style="text-align: center;">
                            <div class="alert red-text">

                                <?php if (isset($_GET['error'])) {
                                    echo $_GET['error'];
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light col s12" type="submit" name="createEvent">Create
                            Event
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>

<?php include './common/footer.php'; ?>>