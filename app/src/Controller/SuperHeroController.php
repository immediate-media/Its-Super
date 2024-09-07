<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\SuperheroService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SuperHeroController extends AbstractController
{

    public function __construct(
        private readonly SuperheroService $superheroService
    )
    {
    }

    #[Route(path: '/super-hero/data', name: 'super_hero_data', methods: ['GET'])]
    public function _invoke(Request $request): Response
    {
        // Retrieve 'hero' from query string
        $heroRequested = $request->query->get('hero');

        if (!$heroRequested) {
            return new JsonResponse([
                'error' => '400',
                'message' => 'Missing `hero` query parameter.'
            ]);
        }

        // Get the hero requested
        // @todo add validation for the hero name
        $hero = $this->superheroService->getSuperHero(lcfirst($heroRequested));
        if (!$hero) {
            return new JsonResponse([
                'error' => '404',
                'message' => 'Herro not found.'
            ]);
        }

        // TODO: return a json object, not a string
        return new JsonResponse($this->superheroService->getCharacterSheet($hero));
    }
}
