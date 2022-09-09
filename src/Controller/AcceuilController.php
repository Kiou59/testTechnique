<?php

namespace App\Controller;

use App\Entity\History;
use App\Entity\Module;
use App\Repository\DataTypeRepository;
use App\Repository\HistoryRepository;
use App\Repository\ModuleRepository;
use App\Repository\SensorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AcceuilController extends AbstractController
{
    #[Route('/', name: 'acceuil')]
    public function index(ModuleRepository $moduleRepository,SensorRepository $sensorRepository,DataTypeRepository $dataTypeRepository,HistoryRepository $historyRepository): Response
    {
        $sensors=$sensorRepository->findAll();
        $histories=$historyRepository->findAll();
         $sensorHistories=[];
        foreach($sensors as $sensor){
            $sensorHistories=$sensor->getHistories();
            dump($sensorHistories)
            ;
        }




        return $this->render('acceuil/index.html.twig', [
            'modules'=>$moduleRepository->findAll(),
            'sensorHistory'=>$sensorHistories
        ]);
    }
}
