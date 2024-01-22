<?php

namespace Thiagorviero\Gc\Controllers;

use Gc\Resources\Controller\Controller;

class IndexController extends Controller
{
    function home()
    {
        ?> <p class="bg-dark">Teste</p><?php
        //$this->render('login', 'layoutLogin');
    }
    function notFound()
    {

        echo 'Pagina não encontrada';
    }
}
