<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Thank you, soon I'll be replying to you... </title>
    </head>
    <body>
       <?php 
            $to = "erickrivera1995@gmail.com";
            $message = $_POST['message'];
            $from = $_POST['email'];
            $name = $_POST['name'];
            $subject = " Contacting from my webpage by: $name";
            $headers = "From: $from";
            header("Refresh: 0; url=index.html#contact");
            if( mail($to, $subject, $message,$headers) ) {
                // 	echo "<p>Your message have been sent...</p>";
                echo '<script language= "javascript">';
                echo 'alert("Your message have been sent...")';
                echo'</script>';
            }
            else {
                // 	echo "<p>There was an error. Please, try again later... </p>";
                echo '<script language= "javascript">';
                echo 'alert("There was an error. Please, try again later...")';
                echo'</script>';
            }
        ?>
    </body>
</html>