<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MatcchRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MatcchRepository::class)
 * @ApiFilter(SearchFilter::class, properties= {"res": "ipartial"})
 */

class Matcch
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stade;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $res;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adversaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipe(): ?string
    {
        return $this->equipe;
    }

    public function setEquipe(?string $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getStade(): ?string
    {
        return $this->stade;
    }

    public function setStade(?string $stade): self
    {
        $this->stade = $stade;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAdversaire(): ?string
    {
        return $this->adversaire;
    }

    public function setAdversaire(?string $adversaire): self
    {
        $this->adversaire = $adversaire;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRes()
    {
        return $this->res;
    }

    /**
     * @param mixed $res
     */
    public function setRes($res): void
    {
        $this->res = $res;
    }

}
