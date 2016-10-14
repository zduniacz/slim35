<?php

namespace Talentowo\Controllers;

class HomeController extends BaseController
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'home.twig');
    }

    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        } 
    }
}