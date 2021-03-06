<?php
session_name("Phonebook");
session_set_cookie_params(600, '/', 'localhost', false, true);
session_start();
// set time-out period (in seconds)

$inactive = 600;



// check to see if $_SESSION["timeout"] is set

if (isset($_SESSION["timeout"])) {

    // calculate the session's "time to live"

    $sessionTTL = time() - $_SESSION["timeout"];

    if ($sessionTTL > $inactive) {

        session_destroy();

        header("Location: /index.php");

    }

}

$_SESSION["timeout"] = time();

function loggedin(){

	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		$id = $_SESSION['user_id'];
		include ('connect.php');
		$q = <<<SQL
		SELECT * FROM users
		WHERE id = "$id"
SQL;
		$user = $conn ->query($q);
		$user = $user ->fetch_assoc();
		$user = $user['username'];
		$_SESSION['username'] = $user;
		return true;

	}

	else {

		return false;

	}

}
