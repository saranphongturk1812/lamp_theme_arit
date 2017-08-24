<?php
    include 'config.php';
    class theme{
    function get_head($nametheme) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?= base_url(); ?>/asset/<?=$nametheme;?>/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/asset/<?=$nametheme;?>/bootstrap.min.css">
        <script src="<?= base_url(); ?>/asset/js/jquery-2.1.3.min.js"></script>
        <script src="<?= base_url(); ?>/asset/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= base_url(); ?>/asset/fonts/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/asset/style.css">
        <title>Hello-Arit</title>
        <script>
            $('.dropdown-toggle').dropdown();                            
            // dropdown
            $(document).ready(function () {
                // Initialize Tooltip
                $('[data-toggle="tooltip"]').tooltip();     
                $("#login").click(function(){
                    $("#modalLogin").modal({show : true});
                });                               
            });                       
        </script>
    </head>
    <body>
<?php
     include 'inc_top_page.php';
     } function get_footer() {
     include './footer.php';
?>    
        </body>
    </html>
<?php
     } 
    }  //class
?>