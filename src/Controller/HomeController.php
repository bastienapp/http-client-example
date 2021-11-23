<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\CharacterManager;
use Symfony\Component\HttpClient\HttpClient;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $manager = new CharacterManager();

        $characters = $manager->getAll();

        return $this->twig->render('Home/index.html.twig', ['characters' => $characters]);
    }
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    public function house(string $house)
    {
        $manager = new CharacterManager();

        $characters = $manager->getAllByHouse($house);

        return $this->twig->render('Home/index.html.twig', ['house' => ucfirst($house), 'characters' => $characters]);
    }
}
