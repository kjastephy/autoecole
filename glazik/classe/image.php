<?php

/**
* Cette classe permet de traiter des images.
*/

class Image
{
	/**
	** permet de redimensionner une image
	** @param $source est l'image à rédimensionner
	** @param $longeur est la nouvelle longueur
	** @param $lageur est la nouvelle lageur
	**/
	public static function Redimensionner($source,$longeur,$lageur)
	{
		if (strtolower(substr($source,11,3))=="png" || strtolower(substr($source,-3))=="png") 
		{
			$sources = imagecreatefrompng($source); // La photo est la source
		}
		else
		{
			$sources = imagecreatefromjpeg($source); // La photo est la source
		}

		$destinations = imagecreatetruecolor($longeur, $lageur); // Dimensionnement de la nouvelle image

		// Les fonctions imagesx et imagesy renvoient la largeur et lahauteur d'une image

		$largeur_source = imagesx($sources);
		$hauteur_source = imagesy($sources);

		$largeur_destination = imagesx($destinations);
		$hauteur_destination = imagesy($destinations);

		imagecopyresampled($destinations, $sources, 0, 0, 0, 0,$largeur_destination, $hauteur_destination, $largeur_source,$hauteur_source);

		return $destinations;
	}

	/**
	** Permet d'ajouter une image sur une autre
	** @param $source est l'image à ajouter, donc notre qr code dans ce programme
	** @param $destination est l'image qui va contenir notre source, donc notre ticket dans ce programme
	**/
	public static function fusionner($source,$destination)
	{
		$sources = imagecreatefrompng($source); // La photo est la source
		$destinations = imagecreatefrompng($destination); // Dimensionnement de la nouvelle image

		// Les fonctions imagesx et imagesy renvoient la largeur et lahauteur d'une image
		
		$largeur_source = imagesx($sources);
		$hauteur_source = imagesy($sources);

		$largeur_destination = imagesx($destinations);
		$hauteur_destination = imagesy($destinations);

		// On calcule les coordonnées où on doit placer le logo sur la photo
		$destination_x = ($largeur_destination - $largeur_source);
		$destination_y = ($hauteur_destination - $hauteur_source);

		// On met le logo (source) dans l'image de destination (la photo)
		imagecopymerge($destinations, $sources, $destination_x,$destination_y, 0, 0, $largeur_source, $hauteur_source, 80);

		return $destinations;
	}
}