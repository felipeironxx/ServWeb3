<?php

require_once ('model/mServico.php');

class aServico extends mServico {

    protected $sqlInsertEmpresa = "insert into servico (id_func_anotou, id_empresa,
                                                        id_func_empr, serv_solicitado, dt_solicitacao) 
                                   values('%s', '%s', '%s', '%s', '%s')";
    
    protected $sqlInsertCliente = "insert into servico (id_func_anotou, id_cliente, serv_solicitado, 
                                                        dt_solicitacao) 
                                   values('%s', '%s', '%s', '%s')";
    
    protected $sqlUpdate = "update servico set id_func_anotou='%s', id_empresa='%s', 
                                               id_func_empr='%s', serv_solicitado='%s', 
                                               id_func_realizou='%s', serv_realizado='%s', 
                                               dt_solicitacao='%s', dt_realizacao='%s', hr_comeco='%s',
                                               hr_termino='%s', concluido='%s' 
                            where id = '%s'";
    
    protected $sqlDelete = "delete from servico where id = '%s'";
    
    protected $sqlSelect = "select *, date_format(dt_solicitacao, '%s') as dt_solicitacao,
                                      date_format(dt_realizacao, '%s') as dt_realizacao
                                      from servico where 1=1 %s %s";
    
    protected $sqlSelectInner = "select servico.*, date_format(dt_solicitacao, '%s') as dt_solicitacao,
                                        date_format(dt_realizacao, '%s') as dt_realizacao, 
                                        funcionario.nome_funcionario, empresa.nome_empresa, 
                                        func_empr.nome_func_empr, servico.null as nome_cliente from servico 
                                        inner join funcionario on (funcionario.id = servico.id_func_anotou)
                                        inner join empresa on (empresa.id = servico.id_empresa) 
                                        inner join func_empr on (func_empr.id = servico.id_func_empr) 
                                 where 1=1 
                                 union all 
                                 select servico.*, date_format(dt_solicitacao, '%s') as dt_solicitacao,
                                        date_format(dt_realizacao, '%s') as dt_realizacao, 
                                        funcionario.nome_funcionario, servico.null, servico.null, cliente.nome_cliente 
                                        from servico 
                                        inner join funcionario on (funcionario.id = servico.id_func_anotou)
                                        inner join cliente on (cliente.id = servico.id_cliente) 
                                 where 1=1 order by id";
    
//   protected $sqlSelectInnerC = "select servico.*, date_format(dt_solicitacao, '%s') as dt_solicitacao,
//                                        date_format(dt_realizacao, '%s') as dt_realizacao, 
//                                        funcionario.nome_funcionario, servico.null, servico.null, cliente.nome_cliente 
//                                        from servico 
//                                        inner join funcionario on (funcionario.id = servico.id_func_anotou)
//                                        inner join cliente on (cliente.id = servico.id_cliente) 
//                                 where 1=1 %s %s";

    public function insertEmpresa() {
        try {

            $sql = sprintf($this->sqlInsertEmpresa, $this->getId_func_anotou(),
                                                    $this->getId_empresa(), 
                                                    $this->getId_func_empr(), 
                                                    $this->getServ_solicitado(),
                                                    $this->getDt_solicitacao(true));
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }
    
        public function insertCliente() {
        try {

            $sql = sprintf($this->sqlInsertCliente, $this->getId_func_anotou(),
                                                    $this->getId_cliente(),
                                                    $this->getServ_solicitado(),
                                                    $this->getDt_solicitacao(true));
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getId_func_anotou(),
                                             $this->getId_empresa(), 
                                             $this->getId_func_empr(), 
                                             $this->getServ_solicitado(),
                                             $this->getId_func_realizou(),
                                             $this->getServ_realizado(),
                                             $this->getDt_solicitacao(true), 
                                             $this->getDt_realizacao(true),
                                             $this->getHr_comeco(),
                                             $this->getHr_termino(),
                                             $this->getConluido(), 
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
            $sql = sprintf($this->sqlSelect,  '%d/%m/%Y', '%d/%m/%Y', $where, $order);
            if ($rquery)
                return $sql;
            else
                return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function selectInner($where = '', $order = '', $rquery = false) {
        try {
            $sql = sprintf($this->sqlSelectInner, '%d/%m/%Y', '%d/%m/%Y', '%d/%m/%Y', '%d/%m/%Y');
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
            $this->setId_func_anotou($rs[0]['id_func_anotou']);
            $this->setId_cliente($rs[0]['id_cliente']);
            $this->setId_empresa($rs[0]['id_empresa']);
            $this->setId_func_empr($rs[0]['id_func_empr']);
            $this->setServ_solicitado($rs[0]['serv_solicitado']);
            $this->setId_func_realizou($rs[0]['id_func_realizou']);
            $this->setServ_realizado($rs[0]['serv_realizado']);
            $this->setDt_solicitacao($rs[0]['dt_solicitacao']);
            $this->setDt_realizacao($rs[0]['dt_realizacao']);
            $this->setHr_comeco($rs[0]['hr_comeco']);
            $this->setHr_termino($rs[0]['hr_termino']);
            $this->setConluido($rs[0]['concluido']);

            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }
}
?>