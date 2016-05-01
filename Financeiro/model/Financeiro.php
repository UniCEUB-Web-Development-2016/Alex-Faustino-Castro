<?php
	
class Financeiro
{
	private $dia;
	private $mes;
	private $ano;
	private $receita;
	private $despesa;

	public function __construct($dia, $mes, $ano, $receita, $despesa)
	{
		$this->dia = $dia;
		$this->mes = $mes;
		$this->ano = $ano;
		$this->receita = $receita;
		$this->despesa = $despesa;
	}
	public function getDia()
	{
		return $this->dia;
	}
	public function getMes()
	{
		return $this->mes;
	}
	public function getAno()
	{
		return $this->ano;
	}
	public function getReceita()
	{
		return $this->receita;
	}
	public function getDespesa()
	{
		return $this->despesa;
	}

}