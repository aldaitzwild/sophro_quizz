<?php

namespace App\Controller;

use App\Entity\QuizzQuestion;
use App\Repository\AnswerRepository;
use App\Service\GifResultManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizzController extends AbstractController
{
    #[Route('/quizz/{id}', name: 'quizz_show', methods: ['GET'])]
    public function show(QuizzQuestion $quizzQuestion): Response
    {
        $answers = $quizzQuestion->getQuestion()->getAnswers()->toArray();
        shuffle($answers);

        return $this->render('quizz/index.html.twig', [
            'quizz' => $quizzQuestion,
            'answers' => $answers,
        ]);
    }

    #[Route('/quizz/{id}', name: 'quizz_show_post', methods: ['POST'])]
    public function showPostBack(
        QuizzQuestion $quizzQuestion, 
        Request $request, 
        EntityManagerInterface $em,
        GifResultManager $gifResultManager): Response
    {
        $quizzQuestion->setIsAnswered(true);
        $routeToGo = 'quizz/fail.html.twig';

        $correctAnswer = true;
        $gif = '';

        foreach($quizzQuestion->getQuestion()->getAnswers() as $answer) {
            if(!$answer->checkAnswer($request->get('answer_' . $answer->getId()))) {
                $correctAnswer = false;
                break;
            }
        }

        if($correctAnswer) {
            $quizzQuestion->getGame()->addOnePoint();
            $routeToGo = 'quizz/success.html.twig';
            $gif = $gifResultManager->getSuccessGif();
        } else {
            $gif = $gifResultManager->getFailureGif();
        }

        $em->flush();

        return $this->render($routeToGo, [
            'game' => $quizzQuestion->getGame(),
            'quizz' => $quizzQuestion,
            'nextquizz' => $quizzQuestion->getGame()->getNextQuizzQuestion(),
            'gif' => $gif
        ]);
    }
}
