<?php

namespace David\Tema6\Controllers;

class CarController
{

  public function index()
  {
    //echo "Esto es index de CarController";
    global $blade;
    echo $blade->view()->make('car.index', ['name' => 'Pepe'])->render();
  }

  public function show($params)
  {
    $matricula = $params['matricula'];
    //echo "Esto es show de CarController. coche con matricula $matricula";
    global $blade;
    $name = 'David';
    echo $blade->view()->make('car.show', compact('matricula', 'name'))->render();
  }

  public function showCarClient($params)
  {
    $id = $params['id'];
    echo "Muestra todos los coches del cliente $id";
  }
}
