<?php

class Formulaire
{
	public function Input($nom, $type, $placeholder)
	{
		return "<input name='".$nom."' type='".$type."' placeholder='".$placeholder"'>";
	}

	public function Submit($nom)
	{

	}
}

?>