<?php

//rendre articles/show 
function render(string $path, array $variables =[])
{

    // ['var1' => 2, 'var' => "Lior"]
    // var1' = 2;
    //var' => "Lior";
     extract($variables);
    
    ob_start();
    require('templates/' . $path . '.html.php');
    $pageContent = ob_get_clean();
    
    require('templates/layout.html.php');

}