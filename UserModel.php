<?php

namespace app\app;

use app\app\db\DbModel;

/**
 * Class UserModel
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package app\app
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
