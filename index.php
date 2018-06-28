<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Handle Form Assignment </title>

<link href="css/style.css" rel="stylesheet">

<!-- Hosted Google Library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

</head>

<body>

	<header> 
		Handle Form Assignment 
	</header>
	<nav>
		<ul class="showing">
			<!-- NOTE: This is totally unconventional but it's his tutorial... -->
			<a href="#"><li>Home</li></a>
			<a href="#"><li>Contact</li></a>
			<a href="#"><li>Blog</li></a>
		</ul>
		<div class="handle">Menu</div>
	</nav>
	
	<section class="container">
                    <form action="index.php" method="get">
                        <fieldset>
                              <div class="heading"><legend><strong>Form Assignment</strong></legend></div>
                            <br>
                            
                                <div class="form-box">
                                    <label for="fname">Full name</label>
                                    <input type="text" name="fname" id="fname" value= "<?php if(isset($fn) && !$success) {echo $fn; }?>">
                                </div>
                                <div class="form-box">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value= "<?php if(isset($em)  && !$success) {echo $em; }?>" >
                                </div>
                            
                            <br>
                            
                                <div class="form-box">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" value= "<?php if(isset($ms)  && !$success) {echo $ms; }?>"></textarea>
                                </div>
                             
                            <br>
                            
                                <div class="form-box4">
                                    <input type="submit" name="collect" value="Submit">
                                </div>
                               
                        </fieldset>
                    </form>

                        <?php
                        // printing
                        if(isset($feedback)){
                            echo $feedback;
                        }
                        if(isset($err)){
                            echo $err;
                        }
                        ?>
                
	</section>
	
	<footer>
            <div class="footer">
               © <strong>Pratiksha Patel</strong> 2018. Handle Form Assignment  
            </div>
        </footer>
	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
	<script src="./js/index.js"></script>
</body>
</html>
