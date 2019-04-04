<?php
/**
 * Created by PhpStorm.
 * User: fedot
 * Date: 04.04.2019
 * Time: 12:00
 */

class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = DB::connToDb();
    }

}