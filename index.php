<?php
/**
 * Created by PhpStorm.
 * User: aminur
 * Date: 2/23/21
 * Time: 9:49 PM
 */
include('includes/header.php');
?>

<?php session_start(); ?>

<div class="container">
    <div class="row">

        <div class="col-md-12 mt-4">
            <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] != ""){
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['status']; ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                }
            ?>
        </div>

        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body">

                    <h4>Data Fetching From FireBase (DataBase)
                        <a href="insert.php" class="btn btn-success float-right">Add</a>
                    </h4>

                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>UserName</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    include('includes/dbconfig.php');
                                    $ref = "contact/";
                                    $fetchData = $database->getReference($ref)->getValue();
                                    $i = 0;
                                    if ($fetchData > 0) {


                                        foreach ($fetchData as $key => $row) {
                                            $i++;
                                            ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row['username']; ?></td>
                                                <td><?= $row['email']; ?></td>
                                                <td><?= $row['phone']; ?></td>
                                                <td>
                                                    <a href="edit.php?token=<?= $key ?>" class="btn btn-warning">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="post">
                                                        <input type="hidden" name="ref_delete_token" value="<?= $key ?>">
                                                        <button type="submit" name="delete_data" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        ?>
                                            <tr>
                                                <td colspan="6">Data is not available in FireBase Database Store</td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>


