<?php 
include "https_redirect.php";

$page_name = 'home';

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <?php include "sections/html_head.php";?>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">

        <!-- Header -->
        <header id="header" data-fullwidth="true">
            <?php include "sections/header.php";?>
        </header>

        <!-- Content -->
        <?php include "content/home_content.php";?>


        <!-- Footer -->
        <?php include "sections/footer.php";?>


    </div>
    <?php include "content/madden_modal.php";?>
    <!-- Plugins -->
    <?php include "sections/js_end_scripts.php";?>
    <?php include "sections/js/about_js.php";?>

</body>


</html>