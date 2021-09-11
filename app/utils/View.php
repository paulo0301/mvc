<?php
    namespace App\Utils;


    class View{
        
        #Método responsável por retornar o conteúdo de uma view
        private static function getContentView($view){
            $file = __DIR__.'/../../resources/view/'.$view.'.html';
            return file_exists($file) ? file_get_contents($file) : '';
        }

        #Método responsável por retornar o conteúdo renderizado de uma view
        public static function render($view, $vars = [])
        {
            //Conteúdo da view
            $contentView = self::getContentView($view);
            
            //Chaves do array de variaveis
            $keys = array_keys($vars);
            $keys = array_map(function($item){
                return '{{'.$item.'}}';
            }, $keys);

            //Retorna o conteúdo renderizado
            return str_replace($keys, array_values($vars), $contentView);
        }
    }
?>