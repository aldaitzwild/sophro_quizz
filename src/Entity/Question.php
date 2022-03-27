<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $text;

    #[ORM\Column(type: 'boolean')]
    private $isActive;

    #[ORM\OneToMany(mappedBy: 'question', targetEntity: Answer::class, cascade:["persist"], orphanRemoval: true)]
    private $answers;

    #[ORM\OneToMany(mappedBy: 'question', targetEntity: QuizzQuestion::class, orphanRemoval: true)]
    private $quizzQuestions;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
        $this->games = new ArrayCollection();
        $this->quizzQuestions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return Collection<int, Answer>
     */
    public function getAnswers(): Collection
    {
        return $this->answers;
    }

    public function addAnswer(Answer $answer): self
    {
        if (!$this->answers->contains($answer)) {
            $this->answers[] = $answer;
            $answer->setQuestion($this);
        }

        return $this;
    }

    public function removeAnswer(Answer $answer): self
    {
        if ($this->answers->removeElement($answer)) {
            // set the owning side to null (unless already changed)
            if ($answer->getQuestion() === $this) {
                $answer->setQuestion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, QuizzQuestion>
     */
    public function getQuizzQuestions(): Collection
    {
        return $this->quizzQuestions;
    }

    public function addQuizzQuestion(QuizzQuestion $quizzQuestion): self
    {
        if (!$this->quizzQuestions->contains($quizzQuestion)) {
            $this->quizzQuestions[] = $quizzQuestion;
            $quizzQuestion->setQuestion($this);
        }

        return $this;
    }

    public function removeQuizzQuestion(QuizzQuestion $quizzQuestion): self
    {
        if ($this->quizzQuestions->removeElement($quizzQuestion)) {
            // set the owning side to null (unless already changed)
            if ($quizzQuestion->getQuestion() === $this) {
                $quizzQuestion->setQuestion(null);
            }
        }

        return $this;
    }
}
