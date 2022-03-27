<?php

namespace App\Entity;

use App\Repository\QuizzQuestionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizzQuestionRepository::class)]
class QuizzQuestion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\ManyToOne(targetEntity: Question::class, inversedBy: 'quizzQuestions')]
    #[ORM\JoinColumn(nullable: false)]
    private $question;

    #[ORM\ManyToOne(targetEntity: Game::class, inversedBy: 'quizzQuestions')]
    #[ORM\JoinColumn(nullable: false)]
    private $game;

    #[ORM\Column(type: 'boolean')]
    private $isAnswered;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $wasRight;

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

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function setGame(?Game $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function getIsAnswered(): ?bool
    {
        return $this->isAnswered;
    }

    public function setIsAnswered(bool $isAnswered): self
    {
        $this->isAnswered = $isAnswered;

        return $this;
    }

    public function getWasRight(): ?bool
    {
        return $this->wasRight;
    }

    public function setWasRight(?bool $wasRight): self
    {
        $this->wasRight = $wasRight;

        return $this;
    }
}
