<?php 

namespace Descartes\RecupbdBundle\Recupbd; 

class Recupbd
{ 
	protected $bdd;
	
	public function __construct()
	{ 
		try
		{
			$this->bdd = new \PDO("pgsql:host=localhost;dbname=SPD_Web", "postgres", "postgresql", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}
		
	} 
	
	public function getBd() 
	{ 
		return $this->bdd; 
	} 	 
} 