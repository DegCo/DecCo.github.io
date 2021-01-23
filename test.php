<?php
        if(isset($_POST["name"])){
            header("Location: ./about.html");
            }
             ?>
<?php
    if(isset($_POST['name']))
    {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);
    $answerbox = trim($_POST["answerbox"]);
    if(strlen($name)<2) {
        print "<p>Please type your name.</p>";
    }else if(strlen($subject)<2) {
        print "<p>Please type a subject.</p>";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print  "<p>Please type a valid email address.</p>";
    }else if(strlen($message)<10) {
        print "<p>Please type your message.</p>";
    }else if($answerbox != 15) {
        print "<p>Please answer the math question.</p>";
    }else{
                $headers =  'From: '.$email. "\r\n" .
                            'Reply-To: '.$email . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
        mail('me@mymail.me',$subject,$message,$headers);
        print "mail succesuffully sent";
    }

}
    ?>

        <form name="contact" action="" method="post">
            <input type="hidden" name="submitted" value="true"/>
            <label for="YourName">Your Name:</label>
            <input type="text" name="name" class="required" />

            <label for="YourEmail">Your Email:</label>
            <input type="text" name="email" class="required"/>

            <label for="Subject">Subject:</label>
            <input type="text" name="subject" class="required"  />

            <label for="YourMessage">Your Message:</label>
            <textarea  name="message" class="required"></textarea>
            <p class="c3">10 + 5 =<input type="text" name="answerbox" id="answerbox" /></p>

        <fieldset>
            <input type="submit" name="submit" id="submit" value="Send" class="required"/>
            <input type="reset" id="reset" value="Reset"/>      
        </fieldset>

    </form>