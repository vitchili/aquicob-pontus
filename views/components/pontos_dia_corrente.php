<?php
require_once(__DIR__ . '/../../app/http/controllers/Sistema_Ponto_Controller.php');
$obj_pontos = new Sistema_Ponto_Controller;
$dados = array(
    "id_usuario" => $_SESSION['id_usuario'], 
    "action" => "pontos_dia_corrente"
);
$marcacoes_dia = $obj_pontos->buscar($dados);
?>
<section class="white-section-card cards-gerais">
    <div class="cada-bloco-fifty">
        <section class="white-section-card cards-gerais ponto-dia-corrente">
        <h4 class="titulo-card">Marcações de hoje</h4>
        <hr/>
        <?php
            for($i=0;$i<count($marcacoes_dia);$i++){
                $dataFormatadaCadastradoEm[$i] = (new DateTime($marcacoes_dia[$i]['cadastrado_em']))->format('H:i:s');
                if($marcacoes_dia[$i]['entrada_saida'] == 'E'){
                    $cor_timeline = "timeline-blue";
                    $tipo_marcacao = "Entrada";
                }else{
                    $cor_timeline = "timeline-red";
                    $tipo_marcacao = "Saída";
                }
                echo "
                <ul class=\"".$cor_timeline."\">
                    <li>
                        <span class=\"p-card-bold\">".$tipo_marcacao.": </span> 
                        <span class=\"p-card\">".$dataFormatadaCadastradoEm[$i]."</span><br/>
                        <span class=\"p-card-bold\">Observação: </span>
                        <span class=\"p-card\">".$marcacoes_dia[$i]['observacao']."</span>
                    </li>
                </ul>
                ";       
            }
        ?>
        </section>
    </div>
</section>