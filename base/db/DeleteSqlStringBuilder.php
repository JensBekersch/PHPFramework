<?php
namespace base\db;
/**
 * DeleteSqlStringBuilder
 *
 * @author Jens Bekersch <bekersch@th-brandenburg.de>
 * @version 1.0 05/2018
 */
class DeleteSqlStringBuilder {

    private $tableName;


    public function buildSqlString() {
        return "DELETE FROM {$this->getTableName()} WHERE id=:value";
    }

    public function setTableName($tableName) {
        if(is_string($tableName) && isset($tableName)) {
            $this->tableName = $tableName;
        }
    }

    private function getTableName() {
        return $this->tableName;
    }


}