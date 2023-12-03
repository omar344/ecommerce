<?php
session_start();
session_unset();
session_regenerate_id();// to protect your script form session fixation attacks
session_destroy();
header('Location: index.php');