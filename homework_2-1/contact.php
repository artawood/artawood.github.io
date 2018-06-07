<!DOCTYPE html>

<html>
    <head>
        <title>Basic Portfolio | Home</title>
        <!-- Part 1 of 2 of Second Homework -->
        <meta charset="UTF-8">
        <meta name="viewport"       content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" 	content="Art's portfolio page">
        <meta name="keywords"		content="Artawood Chitamitara">
        <meta name="author" 		content="Artawood Chitamitara">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- My Custom Style -->
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
        
        <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee|Russo+One" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light navbar-shadow">
                <a class="navbar-brand" href="index.html">ARTAWOOD</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="nav justify-content-end">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
            
        <div class="container">
            <div class="container content glide-up">
                <div class="page-header">
                    <h1>Contact Me!</h1>
                </div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="contact">What are you contacting about?</label>
                        <select class="form-control" id="subject">
                            <option>I want to hire you!</option>
                            <option>Let's collaborate</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- PHP Mailer -->
                <?php
                    if (isset($_POST["email"])) {
                        //email message to webmaster
                        $subject = $_POST['subject'];
                        $email   = $_POST['email'];
                        $message .= 'From: '.$_POST['name']."\n\n";
                        $message .= 'Email: '.$_POST['email']."\n\n";
                        $message .= 'Message: '."\n\n".$_POST['message']."\n\n";
                        $subject2 = 'Confirmation Email from Art Chitamitara';
                        $message2 = 'Hi ' .$_POST['name']."\n\n";
                        $message2 .= 'This is to confirm that I have received you message.'."\n\n";
                        $message2 .='If this email was sent to you incorrectly, my apologies!'."\n\n";
                        $message2 .='Sincerely,';
                        $message2 .='Art Chitamitara';
                        $headers = "From: artawood@gmail.com";
                        //declare my email
                        $email2 = 'artawood@gmail.com'; 
                        //send mail to webmaster
                        mail($email2, $subject, $message, $headers);
                        //send confirmation mail to sender
                        mail($email, $subject2, $message2, $headers);
                        echo '<script> window.location = "confirmation.html"</script>';
                    }
                    ?>
                </div> <!-- Form -- >            
            </div> <!-- Content -->
        </div><!-- Container -->

        <footer>
            <div class="footer-wrapper fixed-bottom text-center">
                <p>&copy; 2018 Artawood</p>
            </div>
        </footer> <!-- footer -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    
</html>