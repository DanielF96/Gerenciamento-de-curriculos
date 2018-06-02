<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario12
 * Date: 02/06/2018
 * Time: 14:12
 */

namespace AppBundle\Controller;

use Domain\Model\Inscricao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscricaoController extends Controller
{
    /**
     * @Route("/inscricao/inscrever")
     * @param Request $request
     */
    public function inscreverAction(Request $request)
    {
        $seriealizerService = $this->get('infra.serializer.service');
        try {
            $inscricao = $seriealizerService->converter($request->getContent(), Inscricao::class);
            dump($inscricao); die;
        } catch (\Exception $exception) {
            return new Response($exception->getMessage(), 400);
        }

        return new Response("Inscrição realizada com sucesso.");
    }
}