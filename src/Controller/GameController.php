<?php

namespace App\Controller;

use App\Entity\Game;
use App\Service\GameManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route('/game/start', name: 'game_start')]
    public function start(GameManager $gameManager): Response
    {

        $game = $gameManager->startNewGame(10);

        if ($quizzQuestion = $game->getNextQuizzQuestion())
        {
            return $this->redirectToRoute('quizz_show', ['id' => $quizzQuestion->getId()]);
        }

        return $this->redirectToRoute('game_finished', ['id' => $game->getId()]);
    }

    #[Route('/game/{id}', name: 'game_resume')]
    public function resume(Game $game): Response
    {
        if ($quizzQuestion = $game->getNextQuizzQuestion())
        {
            return $this->redirectToRoute('quizz_show', ['id' => $quizzQuestion->getId()]);
        }

        return $this->redirectToRoute('game_finished', ['id' => $game->getId()]);
    }


    #[Route('/game/finished/{id}', name: 'game_finished')]
    public function finished(Game $game): Response
    {
        return $this->render('game/finished.html.twig', ['game' => $game]);
    }
}
