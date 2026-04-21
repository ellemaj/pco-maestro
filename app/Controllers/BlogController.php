<?php

namespace App\Controllers;

use Exception;
use Framework\Response;
use Framework\ResponseFactory;

class BlogController
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
        return $this->responseFactory->view('blog/index.html.twig', [
            'active' => 'blog'
        ]);
    }
}
