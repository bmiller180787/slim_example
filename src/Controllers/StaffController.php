<?php

namespace App\Controllers;

use App\Models\StaffsModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class StaffController
{
    private PhpRenderer $renderer;

    private StaffsModel $staffsModel;

    public function __construct(PhpRenderer $phpRenderer, StaffsModel $staffModel)
    {
        $this->renderer = $phpRenderer;
        $this->staffsModel = $staffModel;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, $args): ResponseInterface
    {
        $staffs = $this->staffsModel->getStaffs();
        return $this->renderer->render($response, 'staffs.php', ['staffs' => $staffs]);
    }
}

