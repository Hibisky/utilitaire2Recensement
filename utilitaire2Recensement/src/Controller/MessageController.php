<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


use Illuminate\Http\Request;

class MessageController extends AbstractController
{
    #[Route('/message', name: 'app_message')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MessageController.php',
        ]);
    }
    public function getMessages()
    {
        $messages = [
            'MessageController Bonjour',
        ];

        return $messages;
    }
}
