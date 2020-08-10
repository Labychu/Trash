<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Trash</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="body-wrapper parallax">
        <header>
            <div class="nav-bar-wrapper">
                <input type="checkbox" id="check">
                <label for="check" class="check-button hvr-grow">
                    <i class="fa fa-bars"></i>
                </label>
                <img src="knowbeforethrow.png" alt="logo" class="logo">
                <!--<a href="#" class="logo">Trash</a>-->
                <ul>
                    <li><a href="#" class="hvr-grow">Home</a></li>
                    <li><a href="#" class="hvr-grow">About</a></li>
                    <li><a href="#" class="hvr-grow">Blog</a></li>
                    <li><a href="#" class="hvr-grow">Events</a></li>
                    <li><a href="#" class="hvr-grow">Contact</a></li>
                    <li> 

                    </li>
                </ul>
                <!--<div class="article-search-bar">
                    <input type="text" placeholder="Search...">
                </div> -->
            </div>
        </header>
        <div class="site-content">
            <div class="main-banner">still thinking...</div>
            <div class="recycle-search-bar">
		<form action="" method="POST">
                            <input class="article-search-bar" type="text"  name="search_entered" placeholder="what ya looking for?"><br><br>
                            <input class="submit-button" type="submit" name="submit" value="Search">
			    <?php 
  
				if (isset($_POST['submit'])) { 
					include 'search.php';
				} 
				?>  
                        </form>
	    </div>;
        </div>
        <footer>
            <div class="footer"></div>
        </footer>
    </div>
</body>
</html>

