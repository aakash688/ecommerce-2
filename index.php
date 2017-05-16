<!DOCTYPE>
<html>
<head>
	<title>My Online Shop</title>
	<link rel="stylesheet" href="styles/styles.css" media="all"/>
</head>
<body>
	<div class="main_wrapper">
		<div class="header_wrapper">
			<img id="logo" src="#"/>
			<img id="banner" src="#"/>	
		</div>
		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search Products"/>
					<input type="submit" name="search" value="Search"/>
				</form>
			</div>
		</div>
		<div class="content-wrapper">
		
			<div id="sidebar">
				<div id="sidebar_title">Catagories</div>
				
				<ul id="cats">
					<li><a href="#">Laptops</a></li>
					<li><a href="#">Computers</a></li>
					<li><a href="#">Mobiles</a></li>
					<li><a href="#">Cameras</a></li>
					<li><a href="#">iPads</a></li>
					<li><a href="#">Tablets</a></li>
					<li><a href="#">iPods</a></li>
				</ul>
				
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					<li><a href="#">HP</a></li>
					<li><a href="#">DELL</a></li>
					<li><a href="#">Motorola</a></li>
					<li><a href="#">Sony</a></li>
					<li><a href="#">LG</a></li>
					<li><a href="#">Apple</a></li>
					<li><a href="#">Samsung</a></li>
				</ul>
				
			</div>
		
			<div id="content_area">This is content</div>
		</div>
		
		<div id="footer">This is footer</div>
	</div>
</body>
