<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Module;
use App\Entity\History;
use App\Entity\DataType;
use App\Entity\Sensor;
use App\Entity\Event;
use DateTimeImmutable;

class AppFixtures extends Fixture
{
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    public function load(ObjectManager $manager): void
    {
        $this->loadDataType($manager);
        $this->loadModule($manager);
        $this->loadSensor($manager);
        $this->loadHistory($manager);
        $this->loadEvent($manager);
    }
    public function loadDataType(ObjectManager $manager):void{
        $typesData=[[
            "name"=>"degrés celsius",
            "unit"=>"°C"
        ],[
            "name"=>"humidité",
            "unit"=>"%"
        ]];
        foreach($typesData as $typeData){
            $dataType=new DataType();
            $dataType->setName($typeData["name"]);
            $dataType->setUnit($typeData["unit"]);
            $manager->persist($dataType);
        }
    $manager->flush();
    }
    public function loadModule(ObjectManager $manager):void{
        $moduleData=[
            "name"=>"station météo",
            "detail"=>"mesure la température et le taux d'humidité",
            "isOn"=>true
        ];
        $module=new Module();
        $module->setName($moduleData["name"]);
        $module->setDetails($moduleData["detail"]);
        $module->setIsOn($moduleData["isOn"]);
        $manager->persist($module);
        $manager->flush();


    }


    public function loadSensor(ObjectManager $manager):void{
        $repository = $this->doctrine->getRepository(Datatype::class);
        $dataType=$repository->findAll();
        $repository = $this->doctrine->getRepository(Module::class);
        $module = $repository->findAll();

        $sensorDatas=[[
            "min"=>"-40",
            "max"=>"40",
            "type"=>$dataType[0],
            "module"=>$module[0],
        ],[
            "min"=>"0",
            "max"=>"100",
            "type"=>$dataType[1],
            "module"=>$module[0]
        ]];

        foreach($sensorDatas as $sensorData){
            $sensor=new Sensor();
            $sensor->setValueMin($sensorData["min"]);
            $sensor->setValueMax($sensorData["max"]);
            $sensor->setDataType($sensorData["type"]);
            $sensor->setModule($sensorData["module"]);
            $manager->persist($sensor);
        }
        $manager->flush();
    }
    public function loadHistory(ObjectManager $manager):void{
        $repository = $this->doctrine->getRepository(Sensor::class);
        $sensors=$repository->findAll();
        $historyDatas=[[
            "date"=>DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2022-09-07 09:00:00'),
            "value"=>"0",
            "sensor"=>$sensors[0]
        ],[
            "date"=>DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2022-09-07 09:00:00'),
            "value"=>"0",
            "sensor"=>$sensors[1]
        ]];
        foreach($historyDatas as $historyData){
            $history=new History();
            $history->setDate($historyData["date"]);
            $history->setValue($historyData["value"]);
            $history->setSensor($historyData["sensor"]);
            $manager->persist($history);
        }
        $manager->flush();
    }

    public function loadEvent(ObjectManager $manager):void{
        $repository = $this->doctrine->getRepository(Module::class);
        $module = $repository->findAll();
        $eventData=[
            "date"=>DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2022-09-07 09:00:00'),
            "log"=>"OK",
            "module"=>$module[0]
        ];
        $event=new Event();
        $event->setDate($eventData["date"]);
        $event->setLog($eventData["log"]);
        $event->setModule($eventData["module"]);
        $manager->persist($event);
        $manager->flush();
    }
}
