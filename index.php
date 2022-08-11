<html>
<h1> Parte em HTML do TESTE </h1>
<p> Insira seu nome aqui </p>

<input type=text name=CODNOME> <input type="submit"><br>

<body>

<?
    
    //PRIMEIRO EXERCÍCIO
    
    print "<br>";
    $a = 20;
    $b = 15;
    $z = $a + $b;

    if($z > 20) {
        
        echo $z . "+ 8<br>";
        echo $z + 8;

    }else{
        
        echo $z ."- 5<br>";
        echo $z - 5;
    }
        
    echo "<b><h1>Página TESTE EM PHP</h1><br>";

    echo "DADOS DO USUÁRIO<b><br>";
    echo "<br>";
    echo "NOME:" . " Daniel Camillo Silva<b>" . date (' d/m/y<br>');
    echo "<br> Data e Horário:" . date (' h:i:s');
    echo "<br>";
    echo " <br>CURSANDO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS<br><br>";

    $resultado3 = 2*7+3*3*7;
    print "<br>";
    print "Resultado é: " . $resultado3;
    print "<br>";
    

    $resultado1 = 2*67+3*3+7;
    echo "<br>";
    echo "Resultado é " . $resultado1;
    echo "<br><br>";
    var_dump($resultado1);
    echo "<br><br>";

    $teste = 2*20;

    switch ($teste) {
        case 3:
            echo "o valor é igual 3 ";
            break;
        case 8:
            echo "o valor é igual 8 ";
        break;
        default:
            echo "O padrão foi atingido<br> ";
            break;
            echo "<br>";
    }

    for($i=1; $i<=10; $i++){
        $resultado = $i * 12;
        echo "|" .$i."X 120 =".$resultado . "|";
    }

    echo "<br>";
    $f = 0;
        do{
            echo $f;
            $f++;
        }while ($a<=10);

?>

</body>

<input type=number name=CODNOME><br>

</html>