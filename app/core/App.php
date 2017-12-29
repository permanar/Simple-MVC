<?php

class App {

    protected $controller = 'home';
    protected $method     = 'index';
    protected $params     = [];

    public function  __construct() {

      $url = $this->parseUrl();

      if (file_exists('../app/controllers/'.$url[0].'.php')) {
        $this->controller = $url[0];
        unset($url[0]);
      }

      require_once '../app/controllers/'. $this->controller .'.php';
      $this->controller = new $this->controller;

      if (isset($url[1])) {
        if (method_exists($this->controller, $url[1])) {
          $this->method = $url[1];
          unset($url[1]);
        }
      }
<<<<<<< HEAD
      $this->params = $url ? array_values($url) : [];
      call_user_func_array([$this->controller, $this->method], $this->params);
=======

      $this->param = $url ? array_values($url) : [];

>>>>>>> 2ea69602fd969b2f0449495656bd82848305823d
    }

    public function parseUrl() {
      if (isset($_GET['url'])) {
        return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
      }
    }

}

?>
