<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'");

echo "<p>This page has a Content Security Policy that only allows resourses from the same origin.</p>"

// Rest of your code
?>