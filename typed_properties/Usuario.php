<?php

/* CHEGAGEM DE TIPO ATIVADA */
declare(strict_types=1);

class Usuario
{
    private int $id;
    private string $nome;
    private array $dados;

    public function setAtributos()
    {
        $this->setId(1);
        $this->setNome('Marcos');
        $this->setDados([10]);
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param $dados
     */
    public function setDados($dados)
    {
        $this->dados = $dados;
    }

    public function imprimir()
    {
        echo 'ID: ' . $this->id . '<br>';
        echo 'Nome: ' . $this->nome . '<br>';
        var_dump($this->dados);
    }
}