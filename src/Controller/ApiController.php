<?php
/**
 * Created by PhpStorm.
 * User: mha
 * Date: 19/12/18
 * Time: 17:41
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Serializer\SerializerInterface;
use App\Services\ImportSource;


class ApiController extends AbstractController
{
    /** @var SerializerInterface */
    private $serializer;

    /**  @var ImportSource */
    private $importService;

    /**
     * ApiController constructor.
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer,ImportSource $importSource)
    {
        $this->serializer = $serializer;
        $this->importService = $importSource;
    }

    /**
     * @Rest\Post("/api/importSource/create", name="createImport")
     * @param Request $request
     * @return JsonResponse
     */
    public function createAction(Request $request): JsonResponse
    {
        $title = $request->request->get('title');
        $desc = $request->request->get('textDesc');
        $date = $request->request->get('dateImport');
        $date = new \DateTime($date." 00:00:00");
        $postEntity = $this->importService->createImport([
            'title' => $title,
            'desc'  => $desc,
            'dateImport' => $date
        ]);
        $data = $this->serializer->serialize($postEntity, 'json');

        return new JsonResponse($data, 200, [], true);
    }

    /**
     * @Rest\Get("api/imports",name="getAllImports")
     * @return JsonResponse
     */
    public function getAllAction(): JsonResponse
    {
        $importSources = $this->importService->getAll();
        $data = $this->serializer->serialize($importSources,'json');
        return new JsonResponse($data,200,[],true);
    }

    /**
     * @Rest\Post("api/importSource/uploadFile", name="uploadFile")
     *
     * @return JsonResponse
     */
    public function uploadFile(Request $request): JsonResponse
    {
        $file = $request->request->all();
        error_log(var_export($file,true),3,__DIR__.'/../var/log/file.log');
        return new JsonResponse($file,200,[],true);
    }
}