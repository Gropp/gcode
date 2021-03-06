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
//A TRANSACAO ESTA AMARRADA A CONEXAO E NAO A EXECUCAO
//INICIA A TRANSACAO
$conn->beginTransaction();
//PREPARE DO COMANDO DELETE
//PDO TAMBEM É MELHOR COM O SQLINJECTION
//TAMBEM PODEMOS COMO NO MYSQLI USAR ? NOS PARAMETROS
//PODERIAMOS PASSAR MAIS PARAMETROS ? ? COLOCA OS ? COM ESPACOS, CADA ? É UM ARGUMENTO!
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
//VARIAVEL DO WHERE
$id = 2;
//IMPORTANTE:
//BIND - LIGAR - LIGA PARAMETROS COM VALORES - FAZER PARA TODOS OS PARAMETROS - KEYSENSITIVE
//SEM ID O BIND SOME
//$stmt->bindParam(":ID", $id); #liga a variavel $id ao ID :ID
//CHAMA O METODO EXECUTE PARA EXECUTAR O COMANDO PREPARADO
//COMO USAMOS ? TEMOS QUE PASSAR UM ARRAY COMO PARAMETRO DO EXECUTE
//SE FOSSE MAIS DE UM, USARIA VIRGULA PARA SEPARAR OS PARAMETROS EXECUTE(ARRAY($ID,$ID1)) E ASSIM POR DIANTE
$stmt->execute(array($id));
//TEM QUE FINALIZAR A TRANSACAO
//COM UMA ROTINA DE TRATAMENTO DE ERRO VOCE DIFINE SE VAI VALIDAR A TRANSACAO OU VAI CANCELAR A MESMA
//IMPORTANTE:
//EXEMPLO DOS COMANDOS - NAO PODE EXECUTAR OS DOIS AO MESMO TEMPO!!!!
//ESSE IF NAO FUNCIONA FORMALMENTE É UM EXEMPLO!!!!
//USAR TRY/CATCH
if(true){
    $conn->commit(); #COMANDO PARA VALIDAR E DEIXAR EXECUTAR O DELETE NESTE EXEMPLO
    echo "Deletado com Sucesso!";
}else {
    $conn->rollback(); #COMANDO PARA VOLTAR/DESFAZER O DELETE NESTE EXEMPLO
    echo "[ERRO] TRANSACAO CANCELADA!";
}


