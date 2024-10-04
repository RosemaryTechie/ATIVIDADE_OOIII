<?php
class bebidas;{

}
abstract class bebida{
    private $nome;
    private $preco;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco(){
        $this->preco = $preco;
    }
    class vinho;{
        abstract class vinho{
        
            private $tipo;
            private $safra;{
            }
            public function getsafra(){
                return $this->safra;
            }
        }
    }
    public function setSafra($safra){
        $this->safra = $safra;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    class suco;{
        private $sabor;
    }
    public function getSabor(){
        return $this->sabor;
    }
    public function setSabor($sabor){
        $this->sabor = $sabor;
    }
    class refrigerante;{
        private $retornavel;{
        }
    }
    public function getRetornavel(){
        return $this->retornavel;
    }
    public function setretornavel($retornavel){
        $this->retornavel = $retornavel;{
        }
    }
}