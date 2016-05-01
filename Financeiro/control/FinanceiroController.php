<?php

include_once "model/Request.php";
include_once "model/Financeiro.php";
include_once "database/DatabaseConnector.php";

class FinanceiroController
{
	public function register($request)
	{
		$params = $request->getParams();
		$user = new User($params["dia"],
						 $params["mes"],
						 $params["ano"],
						 $params["receita"],
						 $params["despesa"]);
		$db = new DatabaseConnector("localhost", "mydb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		return $conn->query($this->generateInsertQuery($user));
	}
	private function generateInsertQuery($user)
	{
		$query = "INSERT INTO manager (dia, mes, ano, receita, despesa) VALUES ('".$user->getDia()."','".
																			 $user->getMes()."','".
																			 $user->getAno()."','".
																			 $user->getReceita()."','".
																			 $user->getDespesa()."')";
		return $query;
	}
}