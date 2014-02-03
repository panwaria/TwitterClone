<div id="createTweet" class="panel right">
    <h1>Create a Tweet</h1>
    <p>
        <form action="/tweet" method="post">
            <textarea name="text" class="tweetText"></textarea>
            <input type="submit" value="Tweet!">
        </form>
    </p>
</div>
        <div id="tweets" class="panel left">
				<h1>Your Tweet Profile</h1>
				<div class="tweetWrapper">
					<img class="avatar" src="http://www.gravatar.com/avatar/<?php echo $User->gravatar_hash; ?>">
					<span class="name"><?php echo $User->name; ?></span> @<?php echo $User->username; ?>
					<p>
						<?php echo $userData->tweet_count . " "; echo ($userData->tweet_count != 1) ? "Tweets" : "Tweet"; ?>
                        <span class="spacing"><?php echo $userData->followers . " "; echo ($userData->followers != 1) ? "Followers" : "Follower"; ?></span>
                        <span class="spacing"><?php echo $userData->following . " Following"; ?></span><br>
						<?php echo $userData->tweet; ?>
					</p>
				</div>
			</div>
			<div class="panel left">
				<h1>Your Tweet Friends</h1>
                <?php foreach($ftweets as $tweet){ ?>
		                <div class="tweetWrapper">
		                    <img class="avatar" src="http://www.gravatar.com/avatar/<?php echo $tweet->gravatar_hash; ?>">
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