<?php

// namespace

require_once 'App/init.php';

new App\Admin\User();
new App\Member\User();

use App\Admin\User as AdminUser;
new AdminUser();

use App\Member\User as MemberUser;
new MemberUser();