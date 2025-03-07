<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class AssetController extends AbstractController
{
    #[Route('/asset', name: 'asset.index')]
    public function index(Request $request): Response
    {
        return new Response('Asset');
    }

    #[Route('/asset/{slug}-{id}', name: 'asset.show', requirements: ['slug' => '[a-z0-9-]+', 'id' => '\d+'])]
    public function show(Request $request, string $slug, int $id): Response
    {
        // dd($request->attributes->get('slug'), $request->attributes->getInt('id'));
        // dd($slug, $id);
        // return new Response($slug.'-'.$id);
        // return new JsonResponse(['slug' => $slug, 'id' => $id]);
        return $this->json(['slug' => $slug, 'id' => $id]);
    }
}
