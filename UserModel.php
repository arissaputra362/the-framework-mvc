<?php

namespace ti2018b\phpmvc;

use ti2018b\phpmvc\db\DbModel;

/**
 * Class UserModel
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
