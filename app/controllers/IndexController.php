<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    // Only Called When a route is successfully loaded.
    // Internally known as: beforeExecuteRoute
    public function initialize()
    {
        echo "-- INIT --";
    }

    public function indexAction()
    {
        echo "Hello World!";
    }

    public function loginAction($user = false)
    {
        echo "Login";
        echo $user;

        // Dispatch does not do a HTTP redirect, it can
        // call another route as if it were a function.
        $this->dispatcher->forward([
            'controller' => 'index',
            'action' => 'test'
        ]);
    }

    public function testAction()
    {
        echo "-- TEST --";
    }

}