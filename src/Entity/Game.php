<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'integer')]
    private $score;

    #[ORM\OneToMany(mappedBy: 'game', cascade:["persist"], targetEntity: QuizzQuestion::class)]
    private $quizzQuestions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
        $this->quizzQuestions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function addOnePoint(): self
    {
        $this->score++;

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
            $quizzQuestion->setGame($this);
        }

        return $this;
    }

    public function removeQuizzQuestion(QuizzQuestion $quizzQuestion): self
    {
        if ($this->quizzQuestions->removeElement($quizzQuestion)) {
            // set the owning side to null (unless already changed)
            if ($quizzQuestion->getGame() === $this) {
                $quizzQuestion->setGame(null);
            }
        }

        return $this;
    }

    public function getNextQuizzQuestion(): ?QuizzQuestion {
        foreach($this->getQuizzQuestions() as $quizzQuestion) {
            if(!$quizzQuestion->getIsAnswered())
                return $quizzQuestion;
        }
        return null;
    }
}
