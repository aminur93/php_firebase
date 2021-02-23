<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">

            <h3>Insert data FireBase (Database) using php</h3>
            <hr>

            <form action="code.php" method="post">

                <div class="form-group">
                    <label for="username" class="form-label">UserName</label>
                    <input type="text" name="username" id="username" placeholder="Enter User Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" id="phone" name="phone" placeholder="Enter Phone" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <button type="submit" name="save_push_data" class="btn btn-primary">Save Data</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
