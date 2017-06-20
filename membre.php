<?php
	//include('inc/model.php');
	include('inc/MembreDAO.php');
	$membreDAO = new MembreDAO();
	$membre = $membreDAO->getMembre("3<6");
?>

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
                <h4 class="header-line">Acc&egrave;s membres</h4>
                
            </div>

        </div> 
			<div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Membres
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>pseudo/th>
                                            <th>email</th>
                                            <th>mot de passe</th>
                                            <th>pouvoir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php foreach($membre as $client1){ ?>
                                        <tr>
                                            <td><?php echo $client1->id; ?></td>
                                            <td><?php echo $client1->pseudo; ?></td>
                                            <td><?php echo $client1->email; ?></td>
                                            <td><?php echo $client1->password; ?></td>
                                            <td><?php echo $client1->pouvoir; ?></td>
                                           
                                        </tr>
                                     <?php } ?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
				<div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="panel panel-primary ">
                        <div class="panel-heading">
                            Recent Chat History
                        </div>
                        <div class="panel-body chat-widget-main">
                            <div class="chat-widget-left">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor.
                            </div>
                            <div class="chat-widget-name-left">
                                <img class="media-object img-circle img-left-chat" src="assets/img/user2.png" />
                                <h4>  Amanna Seiar</h4>
                                <h5>Time 2:00 pm at 25th july</h5>
                            </div>
                            <hr />
                            <div class="chat-widget-right">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor sit amet.
                            </div>
                            <div class="chat-widget-name-right">
                                 <img class="media-object img-circle img-right-chat" src="assets/img/user2.png" />
                                <h4>  Amanna Seiar</h4>
                                <h5>Time 2:00 pm at 25th july</h5>
                            </div>
                            <hr />
                            <div class="chat-widget-left">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor sit amet.
                            </div>
                            <div class="chat-widget-name-left">
                                 <img class="media-object img-circle img-left-chat" src="assets/img/user2.png" />
                                <h4>  Amanna Seiar</h4>
                                <h5>Time 2:00 pm at 25th july</h5>
                            </div>
                            <hr />
                            <div class="chat-widget-right">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor sit amet.
                            </div>
                            <div class="chat-widget-name-right">
                               <img class="media-object img-circle img-right-chat" src="assets/img/user2.png" />
                                <h4>  Amanna Seiar</h4>
                                <h5>Time 2:00 pm at 25th july</h5>
                            </div>
                            <hr />
                        </div>

                    </div>
                </div>
				
				
				
			<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="panel panel-default">
                        <div class="panel-heading">
                           Recent Users
                        </div>
                        <div class="panel-body text-center recent-users-sec">
					<img class="img-thumbnail" src="assets/img/user.gif" />
                            <img class="img-thumbnail" src="assets/img/user2.png" />
                            <img class="img-thumbnail" src="assets/img/user.gif" />
                            <img class="img-thumbnail" src="assets/img/user2.png" />
                            <img class="img-thumbnail" src="assets/img/user.gif" />
                               <img class="img-thumbnail" src="assets/img/user2.png" />
                            <img class="img-thumbnail" src="assets/img/user.gif" />
                            <img class="img-thumbnail" src="assets/img/user2.png" />
                            <img class="img-thumbnail" src="assets/img/user.gif" />
                        </div>
				</div>
             </div>
            </div>
        </div>
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
     <?php include('inc/Footer.php');?>
</body>
</html>
