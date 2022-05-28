 <div class="navbar navbar-inverse navbar-fixed-top" style="font-size: 16px; ">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><b></b></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a href="sign_up.php"><i class="icon-user icon-large"></i> Sign Up <strong> </strong></a></li>
              <!-- <li>
                <div class="hero-unit-clock">

                <form name="clock">
                <font color="white"><br></font>&nbsp;<input style="width:100px;" type="submit" class="trans" name="face" value="">
                </form>
                </div>
              </li> -->
			 <li><a> <i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d',time());
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>

				</a></li>
              <!-- <li><a type="button" style="font-size: 12px; margin-top: -1px;" class="btn btn-sm btn-danger" href="../index.php"><font color="#ffff"><i class="icon-off icon-large"></i></font> Log Out</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
</div>