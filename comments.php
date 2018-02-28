<?php
    $title = "Map";
    require_once "includes/header.php";

    function printComments(){
        // variable to connect to the database
        $mysqli = mysqli_connect("localhost", "jas6531", "web2database", "jas6531");

        if(!$mysqli){
    	  echo "Connection failed: " . mysqli_connect_error();
    	  die();
        }

        if(!empty($_POST)){

            // Sanitizes data
            $name = htmlentities( trim( strip_tags( $_POST["name"] ) ) );
            $comment = htmlentities( trim( strip_tags( $_POST["comment"]) ) );

            $name = mysqli_real_escape_string($mysqli, $name);
            $comment = mysqli_real_escape_string($mysqli, $comment);


            $query = "INSERT INTO final_project SET name='$name', comment='$comment'";
            $result = mysqli_query($mysqli, $query);
        }

        $query = "SELECT * FROM final_project";
        $result = mysqli_query($mysqli, $query);

        if($result){
    		while($row = mysqli_fetch_assoc($result)){
    			echo "<div class='feedback-comment'><p><strong>" . $row["name"] . ": </strong><em>" . $row["comment"] . "</em></p>" . "<p class='comment-time'>" . $row["date"] . "</p>" . "</div>";
    		}
    	}
    }
?>
<div class = "main-content-image" id = "main-comments-image">
    <div><h1>Comments</h1></div>
</div>

<div class = "clearfix main-content-wrapper col-sm-12">
    <div class = "main-content">
        <div class="posted-comments-wrapper">
            <div class="posted-comments">
                <?php printComments(); ?>
            </div>
        </div>
        <div id="error-messages"></div>
        <div class="comments-wrapper">
            <form action="comments.php" onsubmit="return validation(this);" method="post">
                <div>
                    <div class="input-field">
                        <label>Name:</label>
                        <input class="comment-input" id="comment-name" maxlength="15" type="text" name="name" placeholder="John"><br/>
                    </div>
                    <div class="input-field">
                        <label style="vertical-align: top">Comment:</label>
                        <textarea class="comment-input comment-textfield" id="comment-body" maxlength="255" name="comment" placeholder="Hello Everyone!"></textarea><br/>
                    </div>
                </div>
                <div>
                    <div id="proved-human-div"><p><i><strong>Prove to me that you are human</strong></i></p></div>
                    <div class="capbox">

                    <div id="CaptchaDiv"></div>

                    <div class="capbox-inner">
                    Type the above number:<br>

                    <input type="hidden" id="txtCaptcha">
                    <input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

                    </div>
                    </div>
                    <br/>
                    <input class="landing-link" id='comment-button' type="submit" name="submit" value="Comment">
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script src="js/validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.3/moment.min.js"></script>
<?php include "includes/footer.shtml";?>
