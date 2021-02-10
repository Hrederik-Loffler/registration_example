<?php
namespace Core\Database;

use \PDO;
use \Exception;

class QueryBuilder
{
    protected $pdo;
    protected $parameters;

    public function __construct(PDO $pdo, $parameters = null)
    {
        $this->pdo = $pdo;
        $this->parameters = $parameters;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectEmail($table)
    {
        $statement = $this->pdo->prepare("SELECT email FROM {$table}");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function lastId()
    {
        return $this->pdo->lastInsertId();
    }

    // public function updateMember($id_member, $path, $parameters = [])
    // {
    //     $this->id_member = $id_member;
    //     $this->path = $path;
    //     $sql = "UPDATE main_form SET company = :company, position = :position, aboutMember = :aboutMember, photo = :photo WHERE id_member = :id_member";
    //     $statement = $this->pdo->prepare($sql);
    //     $statement->bindParam(':company', $parameters['company']);
    //     $statement->bindParam(':position', $parameters['position']);
    //     $statement->bindParam(':aboutMember', $parameters['aboutMember']);
    //     $statement->bindParam(':photo', $this->path);
    //     $statement->bindParam(':id_member', $this->id_member);
    //     $statement->execute();
    // }

    public function updateMember($id_member, $path, $parameters = [])
    {
        $this->id_member = $id_member;
        $this->path = $path;
        $sql = "UPDATE `main_form` SET company=?, position=?, aboutMember=?, photo=? WHERE id_member =?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(
            [
                $parameters['company'] ?? '',
                $parameters['position'] ?? '',
                $parameters['aboutMember'] ?? '',
                $this->path,
                $this->id_member
            ]
        );
    }

    public function insert(string $table, array $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
