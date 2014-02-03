<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet/less" href="/Resource/style.less">
	<script src="/Resource/less.js"></script>
</head>
<body>
	<header>
		<div class="wrapper">
			<a href="/home">
				<img src="/Resource/gfx/logo.png">
			</a>
			<?php if($User !== false){ ?>
                <nav>
                    <a href="/friends">Home</a>
                    <a href="/public">Tweets</a>
                    <a href="/profiles">Profiles</a>
                </nav>
                <form action="/logout" method="get">
                    <input type="submit" id="btnLogOut" value="Sign Out">
                </form>
            <?php }else{ ?>
                <form method="post" action="/login">
                    <input name="username" type="text" placeholder="username">
                    <input name="password" type="password" placeholder="password">
                    <input type="submit" id="btnLogIn" value="Sign In">
                </form>
            <?php } ?>
		</div>
	</header>
    <div id="content">
		<div class="wrapper">
