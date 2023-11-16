<?php

namespace MoneyProject\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use MoneyProject\Models\UserModel;

class UserController
{
    public function getAllUsers(Request $request, Response $response, $args): Response
    {
        $users = UserModel::getAllUsers();
        $response->getBody()->write(json_encode($users));

        return $response->withHeader('Content-Type', 'application/json');
    }

    public function getUser(Request $request, Response $response, $args): Response
    {
        $userId = $args['id'];
        $user = UserModel::getUser($userId);

        if ($user) {
            $response->getBody()->write(json_encode($user));
        } else {
            $response->getBody()->write(json_encode(['error' => 'User not found']));
        }

        return $response->withHeader('Content-Type', 'application/json');
    }

    public function createUser(Request $request, Response $response, $args)
    {
        // Implementar lógica para criar um usuário
    }

    public function updateUser(Request $request, Response $response, $args)
    {
        // Implementar lógica para atualizar um usuário
    }

    public function deleteUser(Request $request, Response $response, $args)
    {
        // Implementar lógica para excluir um usuário
    }
}
