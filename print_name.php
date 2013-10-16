<?php
if(isset($_POST['nome'])){ //verificamos se o parametro nome tem algum valor
$nome=$_POST['nome'];
echo $nome; //imprimimos o nome recebido atravez do parametro "nome"
}
else{

echo 'Nenhum nome digitado'; //imprimimos o nome recebido atravez do parametro "nome"
}
?>