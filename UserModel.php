<?php


namespace zadav\framework\core;


use zadav\framework\core\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}