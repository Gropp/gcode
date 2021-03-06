<?php
//////////////////////////////////////////////////////////////////////
//       UTILIZANDO O PDO PARA CONECTAR COM A BASE DE DADOS         //
//              COM O PADRAO DSN DATA SEARCH NAME                   //
//                           PDO OU POO                             //
//////////////////////////////////////////////////////////////////////
//UTILIZANDO O PADRAO DSN NOS ENVIAMOS OS DADOS DE CONEXAO
//COMO O PDO PARA TODAS AS TRANSACOES PRECISAMOS DO PREPARE
//TIPO DE BANCO, NOME DO BANCO, LOCAL DO HOST, USUARIO, SENHA
//COM O PDO PODEMOS TRATAR TRANSACOES
//PARA ATUAR COM OUTROS BANCOS MUDA O DBTYPE = SQLSERVER
//DBTYPE = MYSQL
//A ORDEM DA STRING DBO NAO IMPORTA
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","user","senha");
//PREPARE DO COMANDO DELETE
//PDO TAMBEM É MELHOR COM O SQLINJECTION
//O SQL TRATA ESSES COMANDOS EM LOTE, PODERIA COLOCAR MAIS :COMANDO... QUE ELE EXECUTA!
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
//VARIAVEL DO WHERE
$id = 7;
//IMPORTANTE:
//BIND - LIGAR - LIGA PARAMETROS COM VALORES - FAZER PARA TODOS OS PARAMETROS - KEYSENSITIVE
$stmt->bindParam(":ID", $id); #liga a variavel $id ao ID :ID
//CHAMA O METODO EXECUTE PARA EXECUTAR O COMANDO PREPARADO
$stmt->execute();
echo "Deletado com Sucesso!";