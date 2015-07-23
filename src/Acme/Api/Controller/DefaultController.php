<?php

namespace Acme\Api\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function indexAction(Request $request, $name)
    {
        return new Response('Hello ' . $name);
    }
}
