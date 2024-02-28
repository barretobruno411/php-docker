
<?php
function saudacao()
{
    $saudacao = "";
    $hora = date('G');

    if ($hora >= 4 && $hora <= 11){
        $saudacao = "Bom dia!";
    }

    if($hora >= 12 && $hora <= 17){
        $saudacao = "Boa tarde!";
    }

    if($hora >= 18 ){
        $saudacao = "Boa noite!";
    }

    return $saudacao;
}

function linha($semana)
{
    $dia_atual = date('j');

    $linha = "<tr>";

    for($i = 0; $i <= 6; $i++){

        if (array_key_exists($i, $semana)){
            if($dia_atual == $semana[$i]){
                $linha .= "<td><b>{$semana[$i]}</b></td>";
            } else {
                $linha .= "<td> {$semana[$i]}</td>";
            }
        }  else {
            $linha .= "<td></td>";
        }

    }

    $linha .= "</tr>";

    return $linha;
}

function calendario()
{
    $calendario = '';
    $dia = 1;
    $semana = [];
    while ($dia <= 31){
        array_push($semana, $dia);

        if(count($semana) == 7){
            $calendario .= linha($semana);
            $semana = [];
        }

        $dia++;
    }

    $calendario .= linha($semana);

    return $calendario;
}

?>
<h1><?php echo saudacao(); ; ?></h1>

<table border="1">
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    </tr>
    <?php echo calendario(); ?>
</table>