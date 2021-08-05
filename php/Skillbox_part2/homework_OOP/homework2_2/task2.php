<?php

class BlackBox
{
    private $data = [];

    public function addLog($message)
    {
        $this->data [] = $message;
    }

    public function getDataByEngineer(Engineer $engineer)
    {
        return $this->data;
    }
}

class Plane
{
    private $blackBox;

    public function __construct()
    {
        $this->blackBox = new BlackBox();
    }

    protected function flyProcess()
    {
        $this->addLog("Полет проходит нормально ");
    }

    final private function crushProcess()
    {
        $this->addLog("Происходит крушение самолета ");
    }

    public function flyAndCrush()
    {
        $this->flyProcess();
        $this->crushProcess();
    }

    protected function addLog($message)
    {
        $this->blackBox->addLog($message);
    }

    public function getBoxForEngineer(Engineer $engineer)
    {
        $engineer->setBox($this->blackBox);
    }
}

class NewPlane extends Plane
{
    protected function flyProcess()
    {
        $this->addLog("Полет проходит шикарно ");
    }
}

class Engineer
{
    private $blackBox;

    public function setBox(BlackBox $blackBox)
    {
        $this->blackBox = $blackBox;
    }

    public function takeBox(Plane $plane)
    {
        $plane->getBoxForEngineer($this);
    }

    public function decodeBox()
    {
        $decodedData = $this->blackBox->getDataByEngineer($this);
        foreach ($decodedData as $row) {
            echo $row . "<br>";
        }
    }
}

$firstPlane = new Plane();
$firstPlane->flyAndCrush();
$firstEngineer = new Engineer();
$firstEngineer->takeBox($firstPlane);
$firstEngineer->decodeBox();

$secondPlane = new NewPlane();
$secondPlane->flyAndCrush();
$firstEngineer->takeBox($secondPlane);
$firstEngineer->decodeBox();
