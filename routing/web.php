<?php
# This is where you can add pages to your website!  Go ahead and add them now!
# Make something awesome!

Route::get("/",function() {
include $_SERVER["DOCUMENT_ROOT"]."index.php"
})
  
Route::get("/lavla",function() {
  include $_SERVER["DOCUMENT_ROOT"]."editor.php"
})
?>
