<?php
/**
 * Created by PhpStorm.
 * User: fedot
 * Date: 04.04.2019
 * Time: 12:06
 */

class View
{
    public function render ($tpl,$pageData){
        include ROOT.$tpl;
    }

}