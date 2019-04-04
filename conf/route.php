<?php
echo '<br>'."роутинг подключен";


class Route{
    public static function buildRoute(){
        $controllerName = "IndexController";
        $modelname = "IndexModel";
        $action = "index";

        $route = explode("/",$_SERVER['REQUEST_URI']);

        if ($route[1] != '') {
            $controllerName = ucfirst($route[1]."Controller");
            $modelname = ucfirst($route[1]."Model");
        }

        include CONTROLLER_PATH .$controllerName . ".php";
        include MODEL_PATH .$modelname . ".php";

        if (isset($route[2]) && $route[2] !=''){
            $action = $route[2];
        }

        $controller = new $controllerName();
        $controller->$action();
    }

    public function errorPage(){

    }

}