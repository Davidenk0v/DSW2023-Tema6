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
    $vip = true;
    $clients = ['David', 'Pepe', 'Agustin'];
    echo $blade->view()->make('client.index', compact('clients', 'vip'))->render();
  }

  public function show($params)
  {
    $name = $params['name'];
    $url = $this->router->generate('car_client_show', ['name' => $name]);
    echo "<p><a href=\"$url\">Muestra los coches del usuario</a></p>";
  }
}
