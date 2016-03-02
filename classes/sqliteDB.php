<?php
/**
 * Class sqliteDB
 *
 * Our class that we can use to talk to sqlite database files
 *
 */
class SQLiteDB {

    protected $dbh;
    public $error;

    function __construct($file)
    {
        $dir = 'sqlite:' . $file;
        try {
            $this->dbh = new PDO($dir);
        } catch (Exception $e) {
            $this->error = 'Cannot open the database';
        }
    }

    function query($query) {
        return $this->dbh->query($query);
    }
}