<?php
//ARQUIVO DE CADASTRO ESPECIFICO, COM O MESMO NOME DO CADASTRO.PHP QUE VAI TER UMA CLASSE GENERALISTA PARA CADASTRO, E COMO OS NOMES SAO IGUAIS OS S.O. NAO PERMITEM QUE FIQUEM NO MESMO DIRETORIO - PARA USAR ESSA ESTRUTURA É NECESSARIO DECLARAR O NAMESPACE DO PROJETO - USAR SEMPRE O NOME DA PASTA ONDE SE ENCONTRA O ARQUIVO, NO NOSSO CASO É A PASTA Cliente!
namespace Cliente;
//IMPORTANTE:
//COMO A CLASSE MAE FICA EM UM DIRETORIO ACIMA DO ATUAL, VOCE INDICA AO DECLARAR O EXTENDS QUE A CLASSE MAE FICA UM DIRETORIO ACIMA COM A CONTRABARRA \
//INDEPENDENTE DO S.O DOS SERVIDOR É SEMPRE CONTRABARRA WIN OU LINUX!!!!!!
class Cadastro extends \Cadastro {
    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }
}