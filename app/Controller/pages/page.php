<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Page{

    #Método responsável por renderizar o header da página
    private static function getHeader(){
        $obOrganization = new Organization;

        return View::render('pages/header', [
            'name' => $obOrganization->name
        ]);
    }
    
    #Método responsável por renderizar o footer da página
    private static function getFooter(){
        return View::render('pages/footer');
    }

    #Método responsável por retornar o conteúdo (view) da nossa página genérica
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'footer' => self::getFooter(),
            'content' => $content
        ]);
    }
}

?>