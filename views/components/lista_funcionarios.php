

    <div class="bloco-titulo">
    <h1 class="titulo-card">Lista de Funcionários: </h1>
    </div>
    <?php
    for($i=0;$i<count($funcionarios);$i++): 
        $dataFormatadaCadastradoEm[$i] = (new DateTime($funcionarios[$i]['data_admissao']))->format('d-m-Y');?>
        <section class="white-section-card cards-gerais">
            <div class="white-section-toggle">
                <div>
                    <span class="p-card-bold"><?=$funcionarios[$i]['nome']?></span>
                </div>
                <div class="setinha-toggle">    
                <a data-toggle="collapse" href="#funcionario<?=$i?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-chevron-down"></i>
                </a>  
                </div>
            </div>    
            <div class="collapse" id="funcionario<?=$i?>">
                <hr/>
                <section class="white-section-card cards-gerais">
                    <div class="white-section-toggle">
                        <div>
                            <span class="p-card-bold">Nome: </span><span class="p-card"><?=$funcionarios[$i]['nome']?></span><br/>
                            <span class="p-card-bold">E-mail: </span><span class="p-card"><?=$funcionarios[$i]['email']?></span><br/>
                            <span class="p-card-bold">Tipo acesso: </span><span class="p-card"><?=$funcionarios[$i]['tipo_acesso']?></span><br/>
                            <span class="p-card-bold">CPF: </span><span class="p-card"><?=$funcionarios[$i]['cpf']?></span><br/>
                            <span class="p-card-bold">Telefone: </span><span class="p-card"><?=$funcionarios[$i]['telefone']?></span><br/>
                            <span class="p-card-bold">Data de admissão: </span><span class="p-card"><?=$dataFormatadaCadastradoEm[$i]?></span>
                        </div>
                </section>
            </div>
        </section>
    <?php endfor; ?>