<?php

class Musica {
    public $nome;
    public $autorId;
    
    public function listarTodaAsMusicas(){
        $musica1 = new Musica();
        $musica1->nome= "Flor de Lis";
        $musica1->autorId = "10";
        
        $musica2 = new Musica();
        $musica2->nome = "Folha Morta";
        $musica2->autorId ="11";
        
        $musica3 = new Musica();
        $musica3->nome="O Mundo é um muinho";
        $musica3->autorId="12";
        
        $musica4 = new Musica();
        $musica4->nome="Você";
        $musica4->autorId="12";
        
        $musica5 = new Musica();
        $musica5->nome="Além do Espelho";
        $musica5->autorId="13";
        
        $lista = array($musica1, $musica2, $musica3, $musica4, $musica5);
            return $lista;
    
        
    }
}
