<?php
/**
 * Created by PhpStorm.
 * User: mha
 * Date: 19/12/18
 * Time: 17:47
 */
namespace App\Services;
use App\Entity\Imports;
use Doctrine\ORM\EntityManagerInterface;


class  ImportSource {
    /** @var EntityManagerInterface */
    private $em;

    /**
     * PostService constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param string $message
     * @return Imports
     */
    public function createImport(array $data): Imports
    {
        $importEntity = new Imports();
        $importEntity->setImportName($data['title']);
        $importEntity->setImportDescription($data['desc']);
        $importEntity->setImportDate($data['dateImport']);
        $this->em->persist($importEntity);
        $this->em->flush();
        return $importEntity;
    }

    /**
     * @return object[]
     */
    public function getAll(): array
    {
        return $this->em->getRepository(Imports::class)->findBy([], ['id' => 'DESC']);
    }
}