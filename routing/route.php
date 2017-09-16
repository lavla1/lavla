<?php
# This is where you can add services for your website. This is a little bit
# harder to use then the web.php file.  Use that for web pages.  Don't get
# fooled by the file name!

users = Route::get("/users",function() {
include $_SERVER["DOCUMENT_ROOT"]."users.php"
})
?>
