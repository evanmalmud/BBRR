<?php
/**
 * Class sqliteDB
 *
 * Our class that we can use to talk to sqlite database files
 *
 */
class sqliteDB {

    protected $dbh;

    function __construct($file)
    {
        $dir = 'sqlite:' . $file;
        $this->dbh  = new PDO($dir) or die("cannot open the database");
    }

    function q($query) {
        return $this->dbh->query($query);
    }
}