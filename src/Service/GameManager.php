<?php

namespace App\Service;

use App\Entity\Game;
use App\Entity\QuizzQuestion;
use App\Repository\GameRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizzQuestionRepository;
use DateTime;

class GameManager {
    private GameRepository $gameRepository;
    private QuestionRepository $questionRepository;
    private QuizzQuestionRepository $quizzQuestionRepository;

    public function __construct(GameRepository $gameRepository, 
                                QuestionRepository $questionRepository,
                                QuizzQuestionRepository $quizzQuestionRepository)
    {
        $this->gameRepository = $gameRepository;
        $this->questionRepository = $questionRepository;
        $this->quizzQuestionRepository = $quizzQuestionRepository;
    }

    public function startNewGame(int $nbOfQuestions): Game {
        $game = new Game();
        $game->setDate(new DateTime());
        $game->setScore(0);

        $this->gameRepository->add($game);

        $questions = $this->questionRepository->findAll();
        $questionIndex =  array_rand($questions, $nbOfQuestions);
        shuffle($questionIndex);

        foreach($questionIndex as $index) {

            $quizz = new QuizzQuestion();
            $quizz->setGame($game)
                ->setQuestion($questions[$index])
                ->setIsAnswered(false)
                ->setDate(new DateTime());

            $this->quizzQuestionRepository->add($quizz);

            $game->addQuizzQuestion($quizz);
        }

        return $game;
    }
}