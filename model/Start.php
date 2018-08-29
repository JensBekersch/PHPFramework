<?php
namespace model;
use base\db\DatabaseModelOperations;
/**
 * Class Start
 * @package model
 * @table=[Datenbankname]
 * @values=[z.B.: id,owner,text,done...]
 */

class Start extends DatabaseModelOperations {

    /*
     * Hier werden die Getter und Setter für das Datenmodell erstellt...
     *private $id, $owner, $text, $done;
     */

    public function __construct() {
        parent::__construct();
    }

}