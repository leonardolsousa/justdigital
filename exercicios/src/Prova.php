<?php

namespace App;

class Prova
{

    public function QuestaoUm(int $n, array $arr)
    {
    //Caso de Teste 1 
        $arr = array(3,1,2,2,4);
        sort($arr);

        foreach ($arr as $val) echo "$val ";

    //Caso de Teste 2
        $arr = array(8,5,5,5,5,1,1,1,4,4);
        sort($arr);
    
        foreach ($arr as $val) echo "$val ";

    //Caso de Teste 3
        $arr = array(1,2,3,7,1,8,2);
        sort($arr);
        
        foreach ($arr as $val) echo "$val ";

    }

    public function QuestaoDois(int $n)
    {
    //Caso de Teste 1
        function fibonacci ($i){
            if($i < 2)
                     return $i;
                 else
                     return fibonacci($i - 1) + fibonacci($i - 2);
        }
            for($i = 0; $i < 4; $i++){
            echo fibonacci($i) . " ";
        }

    //Caso de Teste 2
        function fibonacci ($i){
            if($i < 2)
                 return $i;
             else
                 return fibonacci($i - 1) + fibonacci($i - 2);
        }
        for($i = 0; $i < 5; $i++){
        echo fibonacci($i) . " ";
        }
    
    //Caso de Teste 3
        function fibonacci ($i){
            if($i < 2)
                 return $i;
             else
                 return fibonacci($i - 1) + fibonacci($i - 2);
        }
        for($i = 0; $i < 8; $i++){
        echo fibonacci($i) . " ";
        }

    //Caso de Teste 4
        function fibonacci ($i){
            if($i < 2)
                 return $i;
             else
                 return fibonacci($i - 1) + fibonacci($i - 2);
        }
        for($i = 0; $i < 1; $i++){
        echo fibonacci($i) . " ";
        }

    //Caso de Teste 5
        function fibonacci ($i){
            if($i < 2)
                 return $i;
             else
                 return fibonacci($i - 1) + fibonacci($i - 2);
        }
        for($i = 0; $i < 3; $i++){
        echo fibonacci($i) . " ";
        }

    //Caso de Teste 6
        function fibonacci ($i){
            if($i < 2)
                 return $i;
             else
                 return fibonacci($i - 1) + fibonacci($i - 2);
        }
        for($i = 0; $i < 10; $i++){
        echo fibonacci($i) . " ";
        }

    }

    public function QuestaoTres(string $s)
    {

    }

    public function QuestaoQuatro(int $n, array $a, array $b, array $v)
    {
        //Caso de Teste 2
        $n = array(603, 286, 882);
        echo max($n);
    }
}
