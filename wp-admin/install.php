<?php // install.php replacement page: https://perishablepress.com/press/2009/05/05/important-security-fix-for-wordpress/ ?>
<?php
    header("Status 503 Service Temporarily Unavailable");
    header("Retry-After 3600"); // 60 minutes
?>
<?php mail("jaruble@ncsu.edu", "Database Error", "The database could not be accessed."); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Error Establishing Database Connection</title>
    </head>
    <body>
        <img src="images/wordpress-logo.png" />
        <h1>Error Establishing Database Connection</h1>
        <p>We are currently experiencing database issues. Please check back shortly. Thank you.</p>
    </body>
</html>
