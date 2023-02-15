<?php


namespace App\repositery;

use MongoDB\Driver\Query;
use PDO;
use App\models\User;

abstract class MainRepositery
{
    protected PDO $pdo;

    private string $url = 'mysql:host=127.0.0.1:3306;dbname=projet_tutore';
    //  private string $url = 'mysql:host=127.0.0.1:3306;dbname=projet';
    private string $user = 'root';
    private string $pwd = '';
    private string $lowerClassName;

    public function __construct(protected string $className)
    {
        $this->pdo = new PDO($this->url, $this->user, $this->pwd);
        $this->lowerClassName = strtolower($this->className);
    }

    public function findAll(): array
    {

        return $this->pdo
            ->query('SELECT * FROM ' . $this->lowerClassName)
            ->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    /**
     * @param $requestConditionColumn : array["column name"=>"the value you search for in the column "]
     * @param array $logicalOperator is an Array of logical operator
     */
    public function omniFilter(string $table, array $requestConditionColumn, array $requestConditionValue, array $logicalOperator = [], array $joinOn = [], string $orderBy = "")
    {
        $strQuery = "SELECT * FROM " . $table;

        $addingToQuery = "";
        //traitement des join
        if ($joinOn != []) {
            foreach ($joinOn as $tableToJoinOn) {
                $addingToQuery .= " JOIN " . $tableToJoinOn . " ON " . $table . "." . $tableToJoinOn . "_id = " . $tableToJoinOn . ".id ";
            }
        }
        //traitement du where
        $addingToQuery .= " WHERE";
        for ($i = 0; $i < count($requestConditionColumn); $i++) {
            $addingToQuery .= " " . $requestConditionColumn[$i] . " = '" . $requestConditionValue[$i] . "' ";
            if (count($requestConditionColumn) > 1 and $i < count($requestConditionColumn) - 1 and $logicalOperator != []) {
                $addingToQuery .= $logicalOperator[$i];
            }

            $strQuery = $strQuery . $addingToQuery;
            $addingToQuery = "";
        }
         $query= $this->pdo
           ->prepare($strQuery);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS,$this->className);


    }
}

