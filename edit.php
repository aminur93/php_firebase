<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">

            <h3>Update data FireBase (Database) using php</h3>
            <hr>

            <?php
                $token = $_GET['token'];

                include('includes/dbconfig.php');

                $ref = "contact/";
                $getData = $database->getReference($ref)->getChild($token)->getValue();
            ?>

            <form action="code.php" method="post">

                <input type="hidden" name="token" value="<?= $token ?>">

                <div class="form-group">
                    <label for="username" class="form-label">UserName</label>
                    <input type="text" value="<?= $getData['username']; ?>" name="username" id="username" placeholder="Enter User Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="<?= $getData['email']; ?>" id="email" name="email" placeholder="Enter Email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" value="<?= $getData['phone']; ?>" id="phone" name="phone" placeholder="Enter Phone" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <button type="submit" name="update_data" class="btn btn-primary btn-block">Update Data</button>
                    <a href="index.php" class="btn btn-info btn-block">Back</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
