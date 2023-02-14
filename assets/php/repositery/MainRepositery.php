<?php


namespace App\repositery;

use MongoDB\Driver\Query;
use PDO;
use App\models\User;

abstract class MainRepositery
{
    protected PDO $pdo;

    private string $url = 'mysql:host=127.0.0.1:3306;dbname=projet_fmf';
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
     * @param $requestCondition : array["column name"=>"the value you search for in the column "]
     * @param array $logicalOperator is an Array of logical operator
     */
    public function omniFilter(string $table ,array $requestCondition ,array $logicalOperator=[],string $joinOn="", string $orderBy="")
    {
        $strQuery="SELECT * FROM ".$table;
        $iterator=0;
        $addingToQuery="";
        //traitement du join
        if ($joinOn!=""){
            $addingToQuery.=" JOIN ".$joinOn." ON ".$table.".".$joinOn."_id = ".$joinOn.".id"      ;
        }
        //traitement du where
        $addingToQuery.=" WHERE";
        foreach ($requestCondition as $column => $entry) {
            $addingToQuery.= " ".$column." = '".$entry."' " ;
            if (count($requestCondition)>1 and $iterator<count($requestCondition)-1 and $logicalOperator!=[]){
                $addingToQuery.= $logicalOperator[$iterator];
            }
            $iterator++;
            $strQuery=$strQuery.$addingToQuery;
            $addingToQuery="";
        }
        $query= $this->pdo
            ->prepare($strQuery);
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_CLASS,$this->className);
    }
    }

