<?php

require __DIR__ . "/../views/includes/session.php";

session_unset();
session_destroy();

header('Location: /controllers/login.controller.php');