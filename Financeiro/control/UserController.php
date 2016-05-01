<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{
	public function register($request)
	{
		$params = $request->getParams();
		$user = new User($params["name"],
						 $params["last_name"],
						 $params["email"],
						 $params["password"]);
		$db = new DatabaseConnector("localhost", "mydb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		return $conn->query($this->generateInsertQuery($user));
	}
	private function generateInsertQuery($user)
	{
		$query = "INSERT INTO usuario (name, last_name, email, pass) VALUES ('".$user->getName()."','".
																			 $user->getLastName()."','".
																			 $user->getEmail()."','".
																			 $user->getPassword()."')";
		return $query;
	}
}