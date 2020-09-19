<?php
require_once '../../core/util/Crud.php';

class Investidor extends Crud {

    protected $table = 'investidor';
    private $idInvestidor;
    private $nomeInvestidor;
    private $prazoInvestidor;
    private $capitalInvestidor;
    private $toleranciaInvestidor;
    
    public function getTable() {
        return $this->table;
    }

    public function getIdInvestidor() {
        return $this->idInvestidor;
    }

    public function getNomeInvestidor() {
        return $this->nomeInvestidor;
    }

    public function getPrazoInvestidor() {
        return $this->prazoInvestidor;
    }

    public function getCapitalInvestidor() {
        return $this->capitalInvestidor;
    }
    
    public function getToleranciaInvestidor() {
        return $this->toleranciaInvestidor;
    }


    public function setTable($table) {
        $this->table = $table;
    }

    public function setIdInvestidor($idInvestidor) {
        $this->idInvestidor = $idInvestidor;
    }

    public function setNomeInvestidor($nomeInvestidor) {
        $this->nomeInvestidor = $nomeInvestidor;
    }

    public function setPrazoInvestidor($prazoInvestidor) {
        $ano= substr($prazoInvestidor, 6);
        $mes= substr($prazoInvestidor, 3,-5);
        $dia= substr($prazoInvestidor, 0,-8);
        $this->prazoInvestidor = $ano."-".$mes."-".$dia;
    }

    public function setCapitalInvestidor($capitalInvestidor) {
        $this->capitalInvestidor = $capitalInvestidor;
    }

    public function setToleranciaInvestidor($toleranciaInvestidor) {
        $this->toleranciaInvestidor = $toleranciaInvestidor;
    }

    public function insert() {
        try {
            $sql = "INSERT INTO $this->table (nome_investidor, prazo, capital, tolerancia)"
                    . "VALUES (:nome_investidor, :prazo, :capital, :tolerancia)";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':nome_investidor', $this->nomeInvestidor);
            $stmt->bindParam(':prazo', $this->prazoInvestidor);
            $stmt->bindParam(':capital', $this->capitalInvestidor);
            $stmt->bindParam(':tolerancia', $this->toleranciaInvestidor);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function update($id) {
        try {
            $sql = "Update $this->table set nome_investidor = :nome_investidor, prazo = :prazo ,capital = :capital, tolerancia = :tolerancia where id_investidor = :id_investidor";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':nome_investidor', $this->nomeInvestidor);
            $stmt->bindParam(':prazo', $this->prazoInvestidor);
            $stmt->bindParam(':capital', $this->capitalInvestidor);
            $stmt->bindParam(':tolerancia', $this->toleranciaInvestidor);
            $stmt->bindParam(':id_investidor', $id);
            return $stmt->execute();
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    /*public function findAll() {
        try {
            $sql = "select * from noticia n, categorianoticia c where n.id_categoria_noticia = c.id_categoria_noticia";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }*/

}

?>