<?php

//namespace app\models;
class Usuario
{

    private $id;
    private $nome;
    private $senha;
    private $dataNascimento;

    private $email;

    private $genero;

    private $telefone;
    private $doenca;
    private $telefone_emergencia;
    private $encarregado;
    private $medicamento;

    /**
     * @param $nome
     * @param $senha
     * @param $dataNascimento
     * @param $email
     * @param $genero
     */
    public function __construct($nome, $senha, $dataNascimento, $email, $genero)
    {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->genero = $genero;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero): void
    {
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getDoenca()
    {
        return $this->doenca;
    }

    /**
     * @param mixed $doenca
     */
    public function setDoenca($doenca): void
    {
        $this->doenca = $doenca;
    }

    /**
     * @return mixed
     */
    public function getTelefoneEmergencia()
    {
        return $this->telefone_emergencia;
    }

    /**
     * @param mixed $telefone_emergencia
     */
    public function setTelefoneEmergencia($telefone_emergencia): void
    {
        $this->telefone_emergencia = $telefone_emergencia;
    }

    /**
     * @return mixed
     */
    public function getEncarregado()
    {
        return $this->encarregado;
    }

    /**
     * @param mixed $encarregado
     */
    public function setEncarregado($encarregado): void
    {
        $this->encarregado = $encarregado;
    }

    /**
     * @return mixed
     */
    public function getMedicamento()
    {
        return $this->medicamento;
    }

    /**
     * @param mixed $medicamento
     */
    public function setMedicamento($medicamento): void
    {
        $this->medicamento = $medicamento;
    }


}

