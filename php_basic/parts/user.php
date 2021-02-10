<?php

echo $_COOKIE['color'] . '<br/>' . $_COOKIE['layout'] . '<br/>';

session_start();

echo $_SESSION['username'];
