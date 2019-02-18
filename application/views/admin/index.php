<!DOCTYPE html>
<html lang="en">

<?php
include_once('head_file.php'); 
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php
            include_once('header.php'); 
            ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php
            include_once('left_menu.php');
            ?>
            <!-- /.navbar-collapse -->
        </nav>

        <?php
            include_once($page_name.'.php'); 
        ?>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
</body>

</html>
