<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>To do list</title>
</head>
<body>
  
<?php function card($semana){
            require 'conexaoBD.php';
            
            $sql = 'CALL selectWeek("'.$semana.'")';
            $resultado = $conexao->query($sql);
            if ($resultado!=NULL){
                foreach ($resultado as $linha){
                echo '<div class="card" id="card" value="'.$linha['prioridade'].'">
                <h3>Prioridade: <i>'.$linha['prioridade'].'</i></h3><br>
                <h3>Data: <i>'.$linha['datasemana'].'</i></h3><br>
                <h3>Descrição: <i>'.$linha['anotacao'].'</i></h3><br>
               
                <div class="trash"><a href="concluido.php?cod='.$linha['cod'].'"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAn0lEQVR4nO2VQQrCMBBFcwir+afKZDEHdqNIXdmF95jpXomCiBRpSzIozNsnjz/MT0JwHGcFWXfbpPFAin0wlQoGUtyS4mQiZYkdCS5Pabzy2EWXVsPH+9vjTYojCc6le6t6KhiWnH1Bgn7JBVWkUyPL4wbBant5hrxZZfiLvHlPeUJu9jjkj+WpskhzeU9p+ssUSrpH1QR986SO87fcASwu4siBAKhnAAAAAElFTkSuQmCC" id="trash"></a></div>
                </div>';    
        
                }
            } 
$conexao->close();
}?>


    <nav>
        <h1>Seja Bem-Vindo ao seu plano de estudos/afazeres</h1><br><br>
        <a href="add.html" class="link">Adicionar tarefa + </a><br>
    </nav>
    <div class="week-days">
        <div class="monday"><div class="days">Segunda-feira</div><br>
            <?php 
            card("SEGUNDA");?>
        </div>
        <div class="tuesday"><div class="days">Terça-Feira</div><br><br>
        <?php 
            card("TERÇA"); ?></div>
        <div class="wednesday"><div class="days">Quarta-Feira</div><br><br>
        <?php 
            card("QUARTA"); ?></div>
        <div class="thursday"><div class="days">Quinta-Feira</div><br><br>
        <?php 
            card("QUINTA"); ?></div>
        <div class="friday"><div class="days">Sexta-Feira</div><br><br>
        <?php 
            card("SEXTA"); ?></div>
        <div class="saturday"><div class="days">Sábado</div><br><br>
        <?php 
            card("SABÁDO"); ?></div>
        <div class="sunday"><div class="days">Domingo</div><br><br>
        <?php 
        card("DOMINGO");
?></div>
    </div>





</body>
</html>