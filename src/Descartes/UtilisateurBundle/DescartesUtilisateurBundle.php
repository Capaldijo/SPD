<?php

namespace Descartes\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DescartesUtilisateurBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
