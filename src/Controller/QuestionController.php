<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[IsGranted('ROLE_USER')]
#[Route('/question')]
class QuestionController extends AbstractController
{
    #[Route('/', name: 'app_question_index', methods: ['GET'])]
    public function index(QuestionRepository $questionRepository): Response
    {
        return $this->render('question/index.html.twig', [
            'questions' => $questionRepository->findAllWithAnswers(),
        ]);
    }

    #[Route('/new', name: 'app_question_new', methods: ['GET', 'POST'])]
    public function new(Request $request, QuestionRepository $questionRepository): Response
    {
        $question = new Question();

        if ($request->getMethod() == 'POST' && $request->get('text')) {
            $question->setText($request->get('text'));
            $question->setIsActive(true);
            

            $answerCount = $request->get('answerCount') ?? 0;

            for ($i=0; $i < $answerCount; $i++) { 
                $answer = new Answer();
                $answer->setText($request->get($i + 1 .'_anwser'));
                $answer->setIsCorrect($request->get($i + 1 .'_anwser_correct') ? true : false);

                $question->addAnswer($answer);
            }
            $questionRepository->add($question);
            return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question/new.html.twig', [
            'question' => $question,
        ]);
    }

    #[Route('/{id}', name: 'app_question_show', methods: ['GET'])]
    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, QuestionRepository $questionRepository): Response
    {
        if ($request->getMethod() == 'POST' && $request->get('text')) {
            $question->setText($request->get('text'));
            

            $answerCount = $request->get('answerCount') ?? 0;

            for ($i=0; $i < $answerCount; $i++) { 
                if(isset($question->getAnswers()[$i])) {
                    $answer = $question->getAnswers()[$i];
                    $answer->setText($request->get($i + 1 .'_anwser'));
                    $answer->setIsCorrect($request->get($i + 1 .'_anwser_correct') ? true : false);
                } else {
                    $answer = new Answer();
                    $answer->setText($request->get($i + 1 .'_anwser'));
                    $answer->setIsCorrect($request->get($i + 1 .'_anwser_correct') ? true : false);

                    $question->addAnswer($answer);
                }
            }
            $questionRepository->add($question);
            return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question/edit.html.twig', [
            'question' => $question,
        ]);
    }

    #[Route('/{id}', name: 'app_question_delete', methods: ['POST'])]
    public function delete(Request $request, Question $question, QuestionRepository $questionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {
            $questionRepository->remove($question);
        }

        return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('inactive/{id}', name: 'app_question_inactive', methods: ['GET'])]
    public function inactive(Question $question, QuestionRepository $questionRepository): Response
    {
        $question->setIsActive(false);

        $questionRepository->add($question);
        return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('active/{id}', name: 'app_question_active', methods: ['GET'])]
    public function active(Question $question, QuestionRepository $questionRepository): Response
    {
        $question->setIsActive(true);

        $questionRepository->add($question);
        return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
    }
}
