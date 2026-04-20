<?php

namespace App\Controllers;

use Exception;
use Framework\Response;
use Framework\ResponseFactory;

class HomeController
{
    private ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * @throws Exception
     */
    public function index(): Response
    {
        return $this->responseFactory->view('index.html.twig');
    }

    /**
     * @throws Exception
     */
    public function profile(): Response
    {
        return $this->responseFactory->view('profile.html.twig');
    }
}
