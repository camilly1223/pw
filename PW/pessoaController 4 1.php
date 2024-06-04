<?php //Inicia o codigo php
 
 require_once $_SERVER['DOCUMENT_ROOT'] . '/exemplo_banco_dados/controller/conexao.php'; 
 
class PessoaController{ //abre a classe PessoaController
    private $pessoa; //priva a classe pessoa
 
    public function __construct(){  //declaração do metodo construtor, que é executado automaticamente quando um objeto é instanciado
        $this->pessoa = new Pessoa(); 
        if($_GET['acao'] == 'inserir'){
            $this->inserir();
        }
    }
 
    public function inserir(){
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['nome']);
        $this->pessoa->setCelular($_POST['nome']);

        $this->pessoa->inserir();


        }
        public function listar(){
           return $this->pessoa->listar();
        }

    }
    new PessoaController();
    ?>