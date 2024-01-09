<?php

namespace David\Tema6\Controllers;

class ClientController
{
  private $router;

  public function __construct($router)
  {
    $this->router = $router;
  }

  public function index()
  {
    global $blade;
    echo $blade->view()->make('client.index', ['name' => 'Pepe'])->render();
  }

  public function show($params)
  {
    $id = $params['id'];
    echo "<p>Mostrando el cliente con el id: $id</p>";
    $url = $this->router->generate('car_client_show', ['id' => $id]);
    echo "<p><a href=\"$url\">Muestra los coches del usuario</a></p>";
  }
}
