<?php

use App\Classes\FrontUser;

$user = new FrontUser('nusret@gmail.com', '123123', 'Nusret', 'Sobir');

$user -> setImage('avatar.png');

echo $user -> getImage();   