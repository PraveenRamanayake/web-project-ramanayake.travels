<?php
session_start();

?>



<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>User login-Ramanayake travels</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script type="text/javascript" src="javascript/main2.js"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div class="background">
                <h1 id="logo"> <a>ramanayake travels pvt.ltd </a></h1>
				<div id="navigation">
					
				</div>
			</div>
		</div>
		<div id="contents">
			<div id="about">
				<h2>user login</h2>
                    <form action="include/log.inc.php" method="post">
                        <table>
                            <tr>
                                <th><h5>user name:</h5></th>
                                <td>
                                    <input type="text" name="uid" id="uid">
                                </td>
                            </tr>
                            <tr>
                                <td>
                        <h5>password:</h5>
                                </td>
                                <td>
                        <input type="password" name="pwd" id="pwd">
                                </td>
                            <tr>
                            <td colspan="2">
                                <input type="submit" value="LOGIN" onclick="return validatelog()"> </td>
                            </tr>
                        </table>
                        
                    </form>
			
				<div id="main">
					
                    <h2></h2>
					<address>
                    <p>
					
                    </p>
                        
                    </address>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="background">
				<div class="body">
					
					<div class="section">
						<h3>Contact Details</h3>
						<ul>
							<li>
								<span>Location</span><strong>:</strong>
								<p>
									Ramanayake travels(pvt)ltd, Melder place, Nugegoda 
								</p>
							</li>
							<li>
								<span>Phone</span><strong>:</strong>
								<p>
									(+94) 11 2 520  520; (+94) 11 2 521 521;
								</p>
							</li>
							<li>
								<span>Email</span><strong>:</strong>
								<p>
									ramanayakerac@gmail.com
								</p>
							</li>
							<li>
								<span>Social</span><a href="https://twitter.com/?lang=en" target="_blank" class="twitter"></a><a href="https://www.facebook.com/ramanayake.rentacar.3" target="_blank" class="facebook"></a><a href="https://plus.google.com/discover" target="_blank" class="googleplus"></a>
							</li>
						</ul>
					</div>
					<p id="footnote">
						© Copyright 2018. All rights reserved R.M.N.P.B.Ramanayake.
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>