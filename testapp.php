<?php

error_reporting(0);

header("Access-Control-Allow-Origin: *"); // allow gamebanana to request the URL via AJAX
 
if (isset($_GET["nav"])) // requesting the navigator tab:
{
	?>
		<dl>
			<dt>Today's date</dt>
			<dd><?= date('l \t\h\e jS \o\f F, Y') ?></dd>
			<dt>Your userID</dt>
			<dd><?= $_GET["_idMember"] ?></dd>
			<dt>Your IP</dt>
			<dd><?= $_GET["_sIpAddress"] ?></dd>
			<dt>Your current location</dt>
			<dd><?= $_GET["_sUrl"] ?></dd>
		</dl>
	<?
	
	die();
}

// otherwise we are requesting the profile module:

?>

<div class="Module">
	<h3>Test Module</h3>
	<div class="Content">
		<p>
			Today's date is:
		</p>
		<p>
			<strong style="font-size:2em"><?= date('l \t\h\e jS \o\f F, Y') ?></strong>
		</p>
		<p>
			This is a <b>Third Party Module</b>. You can have it on your profile by adding the following code in your
			<a href="http://gamebanana.com/members/settings/appearance/template/profile/<?= $_GET["_idMember"] ?>">Profile Template Editor</a>:
		</p>
		<p>
			<code><?= htmlspecialchars('<?= $d["_aThirdPartyModules"]["_sTestModule"] ?>') ?></code>
		</p>
		<h2>Are you a coder?</h2>
		<p>
			These apps can be created by anyone! Want to
			create your own? You just need your own webserver. <a href="http://gamebanana.com/apps/add">Add an App</a>
		</p>
		<p>
			Variables that are sent to your webserver when GameBanana requests your App:
		</p>
		<dl>
			<dt>Your MemberID</dt>
			<dd><?= $_GET["_idMember"] ?> (<code><?= htmlspecialchars('$_GET["_idMember"]') ?></code>)</dd>
			<dt>This Profile Owner's MemberID</dt>
			<dd><?= $_GET["_idProfile"] ?> (<code><?= htmlspecialchars('$_GET["_idProfile"]') ?>)</code></dd>
		</dl>
		<p>
			How does this App work? See it on <a href="https://github.com/banana-org/testapp">Github</a>.
		</p>
		<p>
			Here's the PHP code executed when GameBanana accesses this App's
			response URLs (<code>http://banana.org/testapp.php</code>):
		</p>
		<p>
			<textarea><?= htmlspecialchars(file_get_contents(__FILE__)) ?></textarea>
		</p>
	</div>
</div>