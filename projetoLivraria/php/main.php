<?php
    namespace Projeto\projetoLivraria\php;
    
    require_once("pessoa.php");
    
    use Projeto\projetoLivraria\php\pessoa;
    use Projeto\projetoLivraria\php\livro;

//cadastro
    $pessoa1 = new pessoa("12345678910","Claudio","1199999999","Avenida Senador Vergueiro");
    echo $pessoa1->imprimir();

    $livro1 = new livro(21242421,"A culpa é das estrelas","John Green",1,"10/01/2012",1,50,00,50,00);
    echo $livro1->imprimirr();


?>