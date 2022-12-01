<?php

declare(strict_types=1);

include dirname(__DIR__).'/vendor/autoload.php';
include 'database.php';

use App\Repository\UserRepository;
use App\Model\User;

$admin = new User();
$admin->name = 'Adminstrador Padrão';
$admin->email = 'admin@admin.com';
$admin->profile = 'admin';
$admin->password = password_hash('123456', PASSWORD_ARGON2I);

(new UserRepository())->insert($admin);

