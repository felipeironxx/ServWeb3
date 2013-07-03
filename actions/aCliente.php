<?php
require_once ('model/mCliente.php');

class aCliente extends mCliente {

    protected $sqlInsert = "insert into cliente (nome, cpf, rg, rua, bairro, numero, cidade) 
                                                values('%s', '%s', '%s', '%s', '%s', '%s', '%s')";
    
    protected $sqlUpdate = "update cliente set nome='%s', cpf='%s', rg='%s', rua='%s', bairro='%s', numero='%s', cidade='%s' 
                                           where id = '%s'";
    
    protected $sqlDelete = "delete from cliente where id = '%s' ";
    
    protected $sqlSelect = "select * from cliente where 1=1 %s %s ";

    public function insert() {
        try {

            $sql = sprintf($this->sqlInsert, $this->getNome());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getNome(),
                                             $this->getCpf(),
                                             $this->getRg(),
                                             $this->getRua(),
                                             $this->getBairro(),
                                             $this->getNumero(),
                                             $this->getCidade(),
                                             $this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function delete() {
        try {
            $sql = sprintf($this->sqlDelete, $this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function select($where = '', $order = '', $rquery = false) {
        try {
            $sql = sprintf($this->sqlSelect, $where, $order);
            if ($rquery)
                return $sql;
            else
                return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->select(sprintf("and id='%s'", $this->getId()));
            $this->setId($rs[0]['id']);
            $this->setNome($rs[0]['nome']);
            $this->setCpf($rs[0]['cpf']);
            $this->setRg($rs[0]['rg']);
            $this->setRua($rs[0]['rua']);
            $this->setBairro($rs[0]['bairro']);
            $this->setNumero($rs[0]['numero']);
            $this->setCidade($rs[0]['cidade']);
            
            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }
}
?>
