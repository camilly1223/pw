<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/exemplo_banco_dados/controller/conexao.php';
 
class Pessoa{
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
 
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this-> $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this-> $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this-> $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this-> $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this-> $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this-> $cidade;
    } public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this-> $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this-> $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this-> $celular;
    }
    public function __construct(){
        $this->conexao =  new  Conexao();
    }
    public function inserir(){
        $sql = "INSERT INTO pessoa ('nome','endereco','bairro','cep','cidade','estado','telefone', ' celular') VALUES( ?,?,?,?,?,?,?,?)";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco,$this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        return $stmt->execute();
    }
    public function listar(){
        $sql = "SELECT * FROM pessoa";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $pessoas = [];
        while($pessoa = $result->fetch_assoc()){
            $pessoas[] = $pessoa;
        }
        return $pessoas;
}
    }


