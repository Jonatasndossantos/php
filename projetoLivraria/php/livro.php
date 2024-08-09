<?php
//declaraçao
    namespace Projeto\projetoLivraria\php;
//conexao
    use Projeto\projetoLivraria\php\pessoa;
    use Projeto\projetoLivraria\php\livro;

    class livro{
        private int $isbn;
        private string $titulo;
        private string $autor;
        private int $editora;
        private string $dtLancamento;
        private int $quantidade;
        private float $precoUnitario;
        private float $total;

        public function __construct(int $isbn,string $titulo,string $autor,int $editora,string $dtLancamento,int $quantidade,float $precoUnitario,float $total)
        {
            $this->isbn = $isbn;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->editora = $editora;
            $this->dtLancamento = $dtLancamento;
            $this->quantidade = $quantidade;
            $this->precoUnitario = $precoUnitario;
            $this->total = $total;
        }//fim construct

        public function getisbn():int{
            return $this->isbn;
        }
        public function setisbn(int $isbn):void{
            $this->isbn = $isbn;
        }//fim 

        public function gettitulo():string{
            return $this->titulo;
        }
        public function settitulo(string $titulo):void{
            $this->titulo = $titulo;
        }//fim 

        public function getautor():string{
            return $this->autor;
        }
        public function setautor(string $autor):void{
            $this->autor = $autor;
        }//fim 

        public function geteditora():int{
            return $this->editora;
        }
        public function seteditora(int $editora):void{
            $this->editora = $editora;
        }//fim 

        public function getdtLancamento():string{
            return $this->dtLancamento;
        }
        public function setdtLancamento(string $dtLancamento):void{
            $this->dtLancamento = $dtLancamento;
        }//fim 

        public function getquantidade():int{
            return $this->quantidade;
        }
        public function setquantidade(int $quantidade):void{
            $this->quantidade = $quantidade;
        }//fim 

        public function getprecoUnitario():float{
            return $this->precoUnitario;
        }
        public function setprecoUnitario(float $precoUnitario):void{
            $this->precoUnitario = $precoUnitario;
        }//fim 

        public function gettotal():float{
            return $this->total;
        }
        public function settotal(float $total):void{
            $this->total = $total;
        }//fim 

        public function calcularTotal(float $total):float{
            $this->gettotal($this->getquantidade() * $this->getprecoUnitario());
            $this->gettotal
        }

        public function imprimirr():string{
            return "<br>isbn: ". $this-> getisbn().
                   "<br>titulo: ". $this-> gettitulo().
                   "<br>autor: ". $this-> getautor().
                   "<br>editora: ". $this-> geteditora().
                   "<br>dtLancamento: ". $this-> getdtLancamento().
                   "<br>quantidade: ". $this-> getquantidade().
                   "<br>precoUnitario: ". $this-> getprecoUnitario().
                   "<br>total: ". $this-> calcularTotal();
        }//fim imprimir


    }//fim da classe


?>