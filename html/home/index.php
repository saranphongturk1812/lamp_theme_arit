<?php
    include './themearit.php';
    $loadweb = new theme;
    $loadweb->get_head("flatlty"); //ใส่ชื่อ theme bootswatch
?>
<div class="container-fluid" style="padding-top: 70px; padding-bottom: 1%;">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style="padding-left: 1%;">
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">5</span> Menu 1
                </li>
                <li class="list-group-item">
                    <span class="badge">10</span> Menu 2
                </li>
                <li class="list-group-item">
                    <span class="badge">15</span> Menu 3
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">          
          <div class="jumbotron">
              <div class="container">
                  <h1>Hello, world!</h1>
                  <p>Contents ...</p>
                  <p>
                      <a class="btn btn-primary btn-lg">Learn more</a>
                  </p>
              </div>
          </div>   
          <?php for ($i=0; $i <3 ; $i++) { ?>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="thumbnail">
                  <img data-src="#" alt="">
                  <div class="caption">
                      <h3>Title</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem dolor, aliquam necessitatibus neque harum impedit, placeat ratione! Impedit corporis at, quia aperiam, iusto et quasi ipsum? Beatae eligendi voluptas vel.
                      </p>
                      <p>
                          <a href="#" class="btn btn-success">Action</a>
                          <a href="#" class="btn btn-danger">Action</a>
                      </p>
                  </div>
              </div>
          </div>
          <?php } ?>
                          
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="well text-center">
                <p><a href="#">My Profile</a></p>
                <img src="../img/bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="well">
                <p>ADS</p>
            </div>
            <div class="well">
                <p>ADS</p>
            </div>
        </div>
    </div>
</div>
<?php
    $loadweb->get_footer();
?>