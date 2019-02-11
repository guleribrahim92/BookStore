<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								
								<br>		
								
								
								<br><br>
								
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
                    
                    <br class="clear" />
                </div>
                <div id="latestnews">
                    <ul>
                        <li>
                            <div class="imgholder"><img src="images/demo/imgl.gif" alt="" /></div>
                            <div class="latestnews">
                                <h2>Your source of knowledge !</h2>
                                
                               
                            </div>
                            <br class="clear" />
                        </li>
                        <li class="last">
                            <div class="imgholder"><img src="images/demo/imgl.gif" alt="" /></div>
                            <div class="latestnews">
                                <h2>Buy now</h2>
                                <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis. Maecenaset adipiscinia tellentum nullam velit et a convallis curabitae vitae laoreet niseros ligula sem sed susp en at.</p>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </div>
                            <br class="clear" />
                        </li>
                    </ul>
                </div>
            </div>
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
