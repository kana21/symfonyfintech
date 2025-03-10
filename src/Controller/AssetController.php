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
        // return new Response('Asset')
        return $this->render('asset/index.html.twig');
    }

    #[Route('/asset/{slug}-{id}', name: 'asset.show', requirements: ['slug' => '[A-Za-z0-9-_]+', 'id' => '\d+'])]
    public function show(Request $request, string $slug, int $id): Response
    {
        // dd($request->attributes->get('slug'), $request->attributes->getInt('id'));
        // dd($slug, $id);
        // return new Response($slug.'-'.$id);
        // return new JsonResponse(['slug' => $slug, 'id' => $id]);
        // return $this->json(['slug' => $slug, 'id' => $id]);
        return $this->render('asset/show.html.twig', [
            'slug' => $slug,
            'id' => $id,
            'kyc' => [
                'kyc_firstname' => 'John',
                'kyc_lastname' => 'Doe',
            ]
        ]);
    }
}
