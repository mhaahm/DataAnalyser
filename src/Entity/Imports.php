<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImportsRepository")
 */
class Imports
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $importName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $importDate;

    /**
     * @ORM\Column(type="text")
     */
    private $importDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImportName(): ?string
    {
        return $this->importName;
    }

    public function setImportName(string $importName): self
    {
        $this->importName = $importName;

        return $this;
    }

    public function getImportDate(): ?\DateTime
    {
        return $this->importDate;
    }

    public function setImportDate(\DateTime $importDate): self
    {
        $this->importDate = $importDate;

        return $this;
    }

    public function getImportDescription(): ?string
    {
        return $this->importDescription;
    }

    public function setImportDescription(string $importDescription): self
    {
        $this->importDescription = $importDescription;

        return $this;
    }
}
