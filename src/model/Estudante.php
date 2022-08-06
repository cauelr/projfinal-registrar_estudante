<?php

namespace APP\model;

class Estudante
{
    private int $id;
    private string $nome;
    private string $cpf;
    private int $idade;
    private string $curso;
    private string $tel;
    private string $email;

    public function __construct(string $nome, string $cpf, int $idade, string $curso, string $tel, string $email)
    {
        $this -> nome = $nome;
        $this -> cpf = $cpf;
        $this -> idade = $idade;
        $this -> curso = $curso;
        $this -> tel = $tel;
        $this -> email = $email;
    }
}