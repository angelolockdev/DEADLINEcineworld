<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
     <?php include('inc/link.php');?>
</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">
                <a href="deco.php" class="btn btn-danger pull-right">SE DECONNECTER</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="menu-top-active">DASHBOARD</a></li>       
                            <li><a href="membre.php">ACCES MEMBRES</a></li>
                            <li><a href="programme.php">PROGRAMMES</a></li>
                            <li><a href="tables.php">TOUS LES FILMS</a></li>
                            <li><a href="reservation.php">RESERVATIONS</a></li>
                            <li><a href="billet.php">BILLETS</a></li>
                            <li><a href="blank.php">ABOUT</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Billets</h4>
                
            </div>

        </div>
            
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('inc/Footer.php');?>
</body>
</html>
