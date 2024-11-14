<?php include('header.php'); ?>


    <?php 
    $data_nascimento = $_POST['dataNascimento'];
    $signos = simplexml_load_file("signos.xml");
    $data_nascimento = new DateTime($data_nascimento);
    $signo_encontrado = false;

    echo '<h1>Seu signo é: </h1>';
    foreach ($signos->signo as $signo):
        $data_inicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
        $data_fim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);
        $data_inicio->setDate($data_nascimento->format('Y'),$data_inicio->format('m'), $data_inicio->format('d'));
        $data_fim->setDate($data_nascimento->format('Y'),$data_fim->format('m'), $data_fim->format('d'));
    
        if ($data_inicio > $data_fim){
            $data_fim->modify('+1 year');
            if ($data_nascimento < $data_inicio && $data_nascimento > $data_fim){
                continue;
            }
        }

        if ($data_nascimento >= $data_inicio && $data_nascimento <= $data_fim){
            echo "<h1>{$signo->signoNome}</h1>";
            echo "<p class='text-body-secondary'>","{$signo->descricao}","</p>";
            $signo_encontrado = true;
            break;
        }
    endforeach;
    if (!$signo_encontrado){
        echo "<p> Não foi possivel determinar o signo com a data informada </p>";
    }

?>

<?php include('footer.php'); ?>
