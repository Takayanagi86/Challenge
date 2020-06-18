<div class="form-container">
    <div class="card-title">CONTACT US</div>
        <div class="form">
            <form method="POST"  id="contact-form"> 
                <div class="row">
                    <div class="input-container">
                        <label class="label l-name" for="name">Name </label>
                        <input class="input <?php echo $nameStatus; ?>" name="name" autocomplete="on" type="text" id="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>">
                    </div><!-- name container -->
                    <div class="input-container">
                        <label class="label l-email" for="email">Email </label>
                        <input class="input <?php echo $emailStatus; ?>" name="email" autocomplete="on" type="text" id="email" value="<?php if (isset($_POST["email"])) echo $_POST["email"]; ?>">
                    </div><!-- email container -->
                </div><!-- row -->
                <div class="row">
                    <div class="input-container">
                        <label class="label number" for="number">Telephone Number </label>
                        <input class="input <?php echo $numberStatus; ?>" name="number" autocomplete="on" type="text" id="number" value="<?php if (isset($_POST["number"])) echo $_POST["number"]; ?>">
                    </div><!-- number container -->
                    <div class="input-container">
                        <label class="label subject" for="subject">Subject </label>
                        <input class="input <?php echo $subjectStatus; ?>" name="subject" autocomplete="on" type="text" id="subject" value="<?php if (isset($_POST["subject"])) echo $_POST["subject"]; ?>">
                    </div><!-- subject container -->
                </div><!-- row container -->
                <div class="message-container">
                    <label class="label message" for="message">Message </label>
                    <textarea class="input <?php echo $messageStatus; ?>" name="message" id="message" class="message" cols="50" rows="10"><?php if (isset($_POST["message"])) echo $_POST["message"]; ?></textarea>
                </div><!-- message container -->
                
                <div class="submit-btn-container">   
                    <button type="submit" id="submit" class="card-button submit-btn" name="submit"><a href="#">SUBMIT<img src="img/arrow.PNG" alt="arrow"></a></a></button>
                    <!-- <div class="status <?php echo $statusSuccess; ?>"><?php echo $status; ?></div> -->
                </div><!--submit btn container -->
            </form>
        </div><!-- form -->
    </div><!-- form container -->
</div> <!-- contact form container -->
