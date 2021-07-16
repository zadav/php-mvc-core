<?php


namespace zadav\framework;


use zadav\framework\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}