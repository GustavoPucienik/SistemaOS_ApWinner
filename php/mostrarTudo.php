<?php 
    include 'config.php';//inicia o banco de dados

    $id = $_GET['id'];//pega o id da ordem de serviço

    $sql = "SELECT * FROM `relatoriotecnico` WHERE id_requisicao = $id LIMIT 1";//query que pega os dados onde a coluna id='$id'
    $result = mysqli_query($conn, $sql);//executa a query e atribui o valor a variavel '$result'
    $linha = mysqli_fetch_array($result);//atribui os dados da variavel '$result' a variavel '$linha'

    $dataI= explode(" ",$linha['dataInicio']);
    $dataT= explode(" ",$linha['dataTermino']);

    //adiciona os dados de '$linha' a um formulario para que possam ser editados pelo usuario
?>
<div class="OS">
<form class="relatorio" method="POST" action="php/edita_requisicao.php">
        <input type="text" name="id" value="<?php echo $linha['id']; ?>" style="display: none;">
        <div class="Tipo_manutencao">
            <h2>Tipo de manutenção</h2>
            <select name="tipo_manutencao[]" disabled>
                <option value="C. emergencial" <?php $linha['tipoManutencao']=='C. emergencial'?print('selected'):print('');?>>C. emergencial</option>
                <option value="C. programada" <?php $linha['tipoManutencao']=='C. programada'?print('selected'):print('');?>>C. programada</option>
                <option value="Ajuste operacional" <?php $linha['tipoManutencao']=='Ajuste operacional'?print('selected'):print('');?>>Ajuste operacional</option>
                <option value="Melhoria" <?php $linha['tipoManutencao']=='Melhoria'?print('selected'):print('');?>>Melhoria</option>
                <option value="Predial" <?php $linha['tipoManutencao']=='Predial'?print('selected'):print('');?>>Predial</option>
                <option value="preventiva" <?php $linha['tipoManutencao']=='preventiva'?print('selected'):print('');?>>preventiva</option>
            </select>
        </div><!--Tipo_manutencao-->
        <div class="terceiros">
            <h2>Terceiros</h2>
                <div>
                    <label>Manutenção realizada com 3°</label>
                    <input type="radio" value="sim_t" name="opt" disabled <?php $linha['nomeTerceiros']!=""?print'checked':''?>><label>sim</label>
                    <input type="radio" value="nao_t" name="opt" disabled <?php $linha['nomeTerceiros']==""?print'checked':''?>><label>não</label>
                </div>
                <div>
                    <label>Empresa/ Profissional</label>
                    <input type="text" name="terceiros" value="<?php echo $linha['nomeTerceiros']?>" readonly>
                </div>
        </div><!--terceiros-->
        <div class="tempoRequisicao">
            <h2>Intervalo de Tempo</h2>
            <div>
                <h4>data de inicio</h4>
                <input type="date" name="dataInicio" value="<?php echo($dataI[0])?>" readonly>
                <input type="time" name="horaInicio" value="<?php echo($dataI[1])?>" readonly>
            </div>
            <div>
                <h4>data de termino</h4>
                <input type="date" name="dataTermino" value="<?php echo($dataT[0])?>" readonly>
                <input type="time" name="horaTermino" value="<?php echo($dataT[1])?>" readonly>
            </div>
		</div><!--tempoRequisicao-->
        <div class="relatorio_tecnico">
            <h2>Relatório Técnico</h2>
            <div class="topico">
                <label>Nome do(s) Técnico(s)</label>
                <input type="text" name="nome_funcionario" value="<?php echo $linha['nomeManutencao']?>" readonly>
            </div>
            <div class="topico">
                <label>Equipamento</label>
                <input type="text" name="equipamento" value="<?php echo $linha['parteProblema']?>" readonly>
            </div>
            <div class="topico">
                <label>Motivo da falha</label>
                <input type="text" name="motivo_falha" value="<?php echo $linha['motivoProblema']?>" readonly>
            </div>
            <div class="parada_maquina">
                <label>Parou a Maquina?</label>
                <div class="conteiner-parada">
                    <input type="radio" value="sim_p" name="h_parada" disabled <?php $linha['tempoParada']!="00:00:00"?print'checked':''?>><label>Sim</label >
                    <input type="radio" value="nao_p" name="h_parada" disabled <?php $linha['tempoParada']=="00:00:00"?print'checked':''?>><label>Não</label >
                    <input type="time" name="tempo_parada" value="<?php echo $linha['tempoParada']?>" readonly>
                </div><!--conteiner-parada-->
            </div>
        </div><!--relatorio_tecnico-->
        <div class="descricao-servico">
            <h2>Descrição do serviço realizado</h2>
            <textarea placeholder="digite aqui..." name="solucao" readonly><?php echo $linha['solucao']?></textarea>
        </div><!--descricao-servico-->
    </form><!--relatorio-->
</div><!--OS-->

<?php
?>
