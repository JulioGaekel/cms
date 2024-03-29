<?php include "includes/database.php"?>
<?php global $connection?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                $query = "SELECT * FROM categories";
                $selectAllCategoryQuery = mysqli_query($connection, $query);

                /*Display database categories on website with a while-loop. Modifications in db will be displayed
                automatically because of the loop.*/
                while($row = mysqli_fetch_assoc($selectAllCategoryQuery)) {
                    $catTitle = $row['cat_title'];

                    echo "<li><a href='#'>{$catTitle}</a></li>";
                }
                ?>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
