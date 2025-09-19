<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BurgerController extends AbstractController
{
    #[Route('/burgers', name: 'app_burger_list')]
    public function list(): Response
    {
        return $this->render('burger/burger_list.html.twig');
    }

    #[Route('/burger/{id}', name: 'app_burger_show')]
	public function show(int $id): Response
	{
		$burgers = [
			1 => ['id' => 1, 'nom' => 'BIEBER', 'prix' => 6.0, 'description' => 'Steak haché maison, cheddar, ketchup et mayonnaise'],
			2 => ['id' => 2, 'nom' => 'RAY CHARLES', 'prix' => 7.9, 'description' => 'Steak haché maison, cheddar, salade, tomate, cornichons, ketchup, mayonnaise'],
			3 => ['id' => 3, 'nom' => 'CELINE DION', 'prix' => 7.9, 'description' => 'Steak haché maison, cheddar, emmental, oignons rouges pickles, cornichons, ketchup, moutarde'],
			4 => ['id' => 4, 'nom' => 'JAMES BROWN', 'prix' => 8.9, 'description' => 'Steak haché maison, cheddar, bacon, oignons grillés, onion ring, barbecue et mayonnaise'],
			5 => ['id' => 5, 'nom' => 'DAFT PUNK', 'prix' => 8.9, 'description' => 'Steak haché maison, cheddar, emmental, bacon, oignons grillés, sauce ancienne'],
			6 => ['id' => 6, 'nom' => 'JOHNNY CASH', 'prix' => 9.5, 'description' => 'Steak haché maison, cheddar, emmental, grana padano AOP, bacon, oignons grillés, cornichons, ketchup et poivre'],
			7 => ['id' => 7, 'nom' => 'CHUCK BERRY', 'prix' => 9.5, 'description' => 'Steak haché maison, chèvre, galette de pomme de terre, bacon, oignons grillés, roquette, sauces miel et poivre'],
			8 => ['id' => 8, 'nom' => 'METALLICA', 'prix' => 10.0, 'description' => 'Steak haché maison, double raclette, bacon, oignons frits, cornichons, salade, sauces truffe et barbecue'],
			9 => ['id' => 9, 'nom' => 'DYSTINCT', 'prix' => 8.9, 'description' => 'Steak haché maison, raclette, bacon, galette, oignons rouges pickles, sauces barbecue et moutarde'],
			10 => ['id' => 10, 'nom' => 'HI-GLOSS', 'prix' => 9.5, 'description' => 'Steak haché maison, mozzarella snackée, cheddar, chorizo, sauce poivre'],
			11 => ['id' => 11, 'nom' => 'TIF', 'prix' => 9.5, 'description' => 'Escalope de poulet, cheddar, raclette, galette de pomme de terre, oignons frits, bacon, sauce aïoli '],
			12 => ['id' => 12, 'nom' => 'NINA SIMONE', 'prix' => 10.0, 'description' => 'Escalope de poulet épices cajun, cheddar, grana padano AOP, salade, tomate, oignons frits, chorizo, mayonnaise'],
			13 => ['id' => 13, 'nom' => 'L.T.D', 'prix' => 7.9, 'description' => "Double galette de pomme de terre, fourme d’Ambert AOP, raclette, bacon, oignons rouges pickles, sauce ancienne"],
			14 => ['id' => 14, 'nom' => 'MANU DIBANGO', 'prix' => 8.9, 'description' => 'Mozzarella snackée, épices cajun, cheddar, oignons frits, salade, tomate, sauce miel'],
			15 => ['id' => 15, 'nom' => 'FRED AGAIN..', 'prix' => 10.0, 'description' => "Steak végétal, fourme d’Ambert AOP, oignons rouges pickles, roquette, tomate, sauce truffe"],
		];

		if (!isset($burgers[$id])) {
			throw $this->createNotFoundException('Burger introuvable.');
		}

		return $this->render('burger/burger_show.html.twig', [
			'burger' => $burgers[$id],
		]);
	}
}