<div class="panel right">
	<h1>Search for Profiles</h1>
	<p>
		</p><form action="/profiles" method="post">
			<input name="query" type="text">
			<input type="submit" value="Search!">
		</form>
	<p></p>
</div>
<div id="tweets" class="panel left">
    <h1>Public Profiles</h1>
    <?php foreach($profiles as $user){ ?>
    <div class="tweetWrapper">
        <img class="avatar" src="http://www.gravatar.com/avatar/<?php echo $user->gravatar_hash; ?>">
        <span class="name"><?php echo $user->name; ?></span> @<?php echo $user->username; ?> 
        <span class="time"><?php echo $user->followers; echo ($user->followers > 1) ? " followers " : " follower "; ?>
            <a href="<?php echo ($user->followed) ? "unfollow" : "follow"; ?>/<?php echo $user->id; ?>"><?php echo ($user->followed) ? "unfollow" : "follow"; ?></a></span>
        <p>
            <?php echo $user->tweet; ?>
        </p>
    </div>
    <?php } ?>
</div>
