<?php
//header da tabela

echo "<table border=1>";
echo "<tr>";
echo "<th>Cliente: </th>";
echo "<th>Produto: </th>";
echo "<th>Valor total: </th>";
echo "</tr>";

//conectando ao bd
$strcon = mysqli_connect('localhost', 'root','root','mydb') or die ('Erro ao conectar ao Banco de dados');

$sql= "SELECT pessoa.nome as penome, reserva.valorTotal, produto.nome as pronome FROM pessoa JOIN cliente JOIN reserva JOIN produto JOIN item_reserva
WHERE pessoa.id = cliente.pessoa_id AND cliente.id= reserva.cliente_id AND produto.id= item_reserva.produto_id 
AND reserva.id = item_reserva.reserva_id
GROUP BY cliente.id;";
$resultado = mysqli_query($strcon, $sql) or die  ("Error: " . $sql . "<br>" . mysqli_error($conn));

//consulta por meio de um while

while ($registro = mysqli_fetch_array($resultado))
{
    $nome = $registro['penome']; 
    $reserva = $registro['valorTotal']; 
    $produto = $registro['pronome'];
    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$produto."</td>";
    echo "<td>".$reserva."</td>";
    echo "</tr>";
};
mysqli_close($strcon);
echo"</table>";
echo " <a href='index.php'>Voltar</a>";
?>


