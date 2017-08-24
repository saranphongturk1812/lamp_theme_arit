<?php
switch ($p) {
    case 'home' : $status = "active";
        break;
    case 'actshow' : $status1 = "active";
        break;
    case 'report' : $status2 = "active";
        break;
    case 'gallery' : $status3 = "active";
        break;
    case 'stdadmin' : $status4 = "active";
        break;
    case 'contact' : $status5 = "active";
        break;
    default: break;
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="fa fa-battery-full  fa-lg"></span> Project-Name</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?= $status; ?>"><a href="index.php"> <span class="fa fa-home fa-lg"></span> Home</a></li>
                <li class="<?= $status1; ?>"><a href=""><span class="fa fa-pie-chart fa-lg"></span> Menu1</a></li>
                <li class="<?= $status2; ?>"><a href=""><span class="fa fa-book fa-lg"></span> Menu2</a></li>
                <li class="<?= $status3; ?>"><a href=""><span class="fa fa-photo fa-lg"></span> Menu3</a></li>
                <li class="<?= $status4; ?>"><a href="#"><span class="fa fa-bullhorn"></span> Menu4</a></li>
                <li class="<?= $status5; ?>"><a href=""><span class="fa fa-address-card-o fa-lg"></span> Menu5</a></li>
                <!--<li class="<?= $status6; ?>"><a href="../admin/main_event.php"><span class="fa fa-sign-in fa-lg"></span> เข้าสู่ระบบ</a></li>-->
                <li id="login">                  
                    <a><span class="fa fa-sign-in fa-lg"></span> เข้าสู่ระบบ</a> 
                </li>
            </ul>      
        </div>
    </div>
</nav>