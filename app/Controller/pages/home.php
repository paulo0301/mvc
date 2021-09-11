<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity;
use App\Model\Entity\Organization;

class Home extends Page{
    
    #Método responsável por retornar o conteúdo (view) da nossa home
    # @return string;
    
    public static function getHome()
    {
        $obOrganization = new Organization;
        
        $content = View::render('pages/home', [
            'name' => $obOrganization->name,
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);
        
        return parent::getPage('Paulo Daniel', $content);
    }
}

?>