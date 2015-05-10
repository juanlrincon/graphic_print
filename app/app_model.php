<?php
class AppModel extends Model
{

    /**
     * Get Enum Values
     * Snippet v0.1.3
     * http://cakeforge.org/snippet/detail.php?type=snippet&id=112
     *
     * Gets the enum values for MySQL 4 and 5 to use in selectTag()
     * Tested with PHP 4/5 and CakePHP 1.1.8
     */ 
    function getEnumValues($columnName=null)
    {
        if ($columnName==null) { return array(); } //no field specified

        //Get the name of the table
        $db =& ConnectionManager::getDataSource($this->useDbConfig);
        $tableName = $db->fullTableName($this, false);


        //Get the values for the specified column (database and version specific, needs testing)
        $result = $this->query("SHOW COLUMNS FROM {$tableName} LIKE '{$columnName}'");

        //figure out where in the result our Types are (this varies between mysql versions)
        $types = null;
        if     ( isset( $result[0]['COLUMNS']['Type'] ) ) { $types = $result[0]['COLUMNS']['Type']; } //MySQL 5
        elseif ( isset( $result[0][0]['Type'] ) )         { $types = $result[0][0]['Type'];         } //MySQL 4
        else   { return array(); } //types return not accounted for

        //Get the values
        $values = explode("','", preg_replace("/(enum)\('(.+?)'\)/","\\2", $types) );

        //explode doesn't do assoc arrays, but cake needs an assoc to assign values
        $assoc_values = array();
        foreach ( $values as $value ) {
            //leave the call to humanize if you want it to look pretty
            $assoc_values[$value] = Inflector::humanize($value);
        }

        return $assoc_values;

    } //end getEnumValues

}
?>
