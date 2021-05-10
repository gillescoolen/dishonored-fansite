<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link href="styles/main.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,600" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <title>Dishonored Fansite</title>
    </head>
    <body>
        <ul class="navbar">
            <li class="navitem"><a class="navlink" href="index.html">Home</a></li>
            <li class="navitem"><a class="navlink" href="outsider.html">Outsider</a></li>
            <li class="navitem"><a class="navlink" href="characters.html">Characters</a></li>
            <li class="navitem"><a class="navlink" href="world.html">World</a></li>
            <li class="navitem"><a class="navlink" href="comment.php">Comment</a></li>
        </ul>
            <?php

                $result = file_get_contents("comments.txt");

                if(isset($_POST["comment"]))
                {
                    $result .= htmlspecialchars($_POST["name"], ENT_QUOTES) . ": <br/>";
                    $result .= htmlspecialchars($_POST["comment"], ENT_QUOTES) . " <br/> <hr/> <br/>";
                
                file_put_contents("comments.txt", $result);
                }

            ?>
        <div class="d_03">
            <img class="title" src="img/title2.png"/>
                <hr class="hr1"/>

                <div class="commenttitle">
                    Give some feedback!
                </div>

            <div class="comments">
                <form action="?" method="post" id="commentform">

                    <label for="name" class="required">Name: &nbsp</label>
                    <input type="text" name="name" id="name" value="" tabindex="1" required/>
                    <br/><br/>
                    <label for="comment" class="required">Comment</label>
                    <textarea name="comment" id="comment" rows="10" tabindex="4"  required/></textarea>
                    <br/><br/>
                    <input name="submit" type="submit" value="Submit"/>

                </form>
            </div>
            <div class=commentsection>
                <?php
                    echo($result);
                ?>
            </div>
        </div>
    </body>
</html>

