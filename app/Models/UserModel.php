<?php

namespace App\Models;

class UserModel
{
    protected $db;

    public function __construct()
    {
        $dbConfig =  require_once dirname(__DIR__)
            . DIRECTORY_SEPARATOR . 'config'
            . DIRECTORY_SEPARATOR . 'database.php';

        $var_dump('asd');
        die();

        // Configurações de conexão com o banco de dados
        $dsn = 'pgsql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['database'];

        try {
            // Conecte ao banco de dados usando PDO
            $this->db = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['options']);
        } catch (PDOException $e) {
            // Tratamento de erro
            // Você pode registrar o erro, lançar uma exceção ou lidar de outra forma
            echo "Erro de conexão com o banco de dados: " . $e->getMessage();
            exit;
        }
    }

    public function getUsers()
    {
        try {
            // Preparar a consulta SQL
            $query = "SELECT * FROM users";

            // Executar a consulta
            $statement = $this->db->query($query);

            // Obter os resultados
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $users;
        } catch (PDOException $e) {
            // Tratamento de erro
            // Você pode registrar o erro, lançar uma exceção ou lidar de outra forma
            echo "Erro ao obter usuários: " . $e->getMessage();
            return false;
        }
    }

    public function getUserById($userId)
    {
        try {
            // Preparar a consulta SQL
            $query = "SELECT * FROM users WHERE id = :id";

            // Preparar a instrução
            $statement = $this->db->prepare($query);

            // Vincular parâmetros
            $statement->bindParam(':id', $userId);

            // Executar a consulta
            $statement->execute();

            // Obter o usuário
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            return $user;
        } catch (PDOException $e) {
            // Tratamento de erro
            // Você pode registrar o erro, lançar uma exceção ou lidar de outra forma
            echo "Erro ao obter usuário: " . $e->getMessage();
            return false;
        }
    }
}
