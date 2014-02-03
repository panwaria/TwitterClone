<div class="panel right">
	<h1>Search Tweets</h1>
	<p>
		</p><form action="/public" method="post">
			<input name="query" type="text">
			<input type="submit" value="Search!">
		</form>
	<p></p>
</div> 
<div id="tweets" class="panel left">
	<h1>Public Tweets</h1>
	<?php foreach($tweets as $tweet){ ?>
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