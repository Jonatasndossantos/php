<?php
//orientaçao para o arquivo
    //Definir Projeto = Especificar pastas
    namespace Projeto\projetoLivraria\php;
//

    //Especifica qual classe eu vou utilizar
    use Projeto\projetoLivraria\php\pessoa;

    class pessoa{
        //encapisular as variaveis
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;

        //instanciar = dar um valor inicial
        //metodo construtor
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this->cpf = $cpf; //apontamento
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim metodo construtor

        //metogos gets e sets
        public function getCpf():string{
            return $this->cpf;
        }
        public function setCpf(string $cpf):void{
            $this->cpf = $cpf;
        }//fim 

        public function getNome():string{
            return $this->nome;
        }
        public function setNome(string $nome):void{
            $this->nome = $nome;
        }//fim 

        public function getTelefone():string{
            return $this->telefone;
        }
        public function setTelefone(string $telefone):void{
            $this->telefone = $telefone;
        }//fim 

        public function getEndereco():string{
            return $this->endereco;
        }
        public function setEndereco(string $endereco):void{
            $this->endereco = $endereco;
        }//fim 

        public function imprimir():string{
            return "<br>Cpf: ". $this-> getCpf().
                   "<br>Nome: ". $this-> getNome().
                   "<br>Telefone: ". $this-> getTelefone().
                   "<br>Endereço: ". $this-> getEndereco();
        }//fim imprimir

    }//fim da classe
?>