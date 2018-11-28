<?php

namespace Osforge\View;
use Twig\Twig_Loader_Filesystem;
use Twig\Twig_Environment;

class View
{
	public $twig;
    public function __construct()
    {

        $loader = new Twig_Loader_Filesystem(DIR_VIEW);
        $this->twig = new Twig_Environment($loader, array(
            //'cache' => DIR_CACHE,
        ));

        //$this->twig->addFilter('htmlspecial_decode', new Twig_Filter_Function('htmlspecial_decode'));        
    }

    public function display($tpl_file, $arr_data){   
        echo $this->twig->render($tpl_file, $arr_data);
    }
}