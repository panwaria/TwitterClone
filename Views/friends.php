<div id="createTweet" class="panel left"><!--KEVIN I changed this to pannel left-->
    <h1>Let's Tweet</h1>
    <p>
        <form action="/tweet" method="post">
            <textarea name="text" class="tweetText"></textarea>
	    <br>
            <input type="submit" value="Tweet!">
        </form>
    </p>
</div>
	<div id="tweets" class="panel right"><!--KEVIN changed to pannel right -JC-->
				<h1>Tweeter Profile</h1>
				<div class="tweetWrapper">
					<img class="avatar" src="/Resource/gfx/user.jpg">
					<span class="name"><?php echo"<b>"; echo $User->name; ?></span> @<?php echo $User->username; echo "</b>" ?>
					<p>
						<?php echo $userData->tweet_count . " "; echo ($userData->tweet_count != 1) ? "Tweets" : "Tweet"; ?>
<?php echo "<br>"; ?>

                        <span class="spacing"><?php echo $userData->followers . " "; echo ($userData->followers != 1) ? "Followers" : "Follower"; ?></span>
<?php echo "<br>"; ?>     
                   <span class="spacing"><?php echo $userData->following . " Following"; ?></span><br>
						<!--?php echo $userData->tweet; ?-->
					</p>
				</div>
			</div>
			<div class="panel left">
				<h1>Tweets from your Friends</h1>
                <?php foreach($ftweets as $tweet){ ?>
		                <div class="tweetWrapper">
		                    <img class="avatar" src="/Resource/gfx/user.jpg">
		                    <span class="name"><?php echo $tweet->name; ?></span> @<?php echo $tweet->username; ?> 
	                        <span class="time">
	                        <?php 
                                $timeSince = time() - strtotime($tweet->created_at); 
                                if($timeSince < 60)
                                {
                                    echo $timeSince . "s";
                                }
                                else if($timeSince < 3600)
                                {
                                    echo floor($timeSince / 60) . "m";
                                }
                                else if($timeSince < 86400)
                                {
                                    echo floor($timeSince / 3600) . "h";
                                }
                                else{
                                    echo floor($timeSince / 86400) . "d";
                                }
                            ?>
	                        </span>
	                        <p><?php echo $tweet->tweet; ?></p>
		                </div>
		      <?php } ?>			
			</div>
