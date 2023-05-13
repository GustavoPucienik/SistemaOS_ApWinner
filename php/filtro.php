<?php function filtrodados($caminho, $titulo, $btn){?>
<div class="filtro" id="filtro">
    <form class="filtrar" method="POST" action="<?php echo($caminho); ?>" id="filtro">
        <h2><?php echo $titulo ?></h2>
        <div>
        <h4>Setor</h4>
        <select name="setorFiltro" id="setorFiltro" required>
        <option disabled selected>Selecione sua linha</option>
            <option value="Administrativo">Administrativo</option>
            <option value="Almoxarifado">Almoxarifado</option>
            <option value="Expedição">Expedição</option>
            <option value="Formulação">Formulação</option>
            <option value="Predial">Predial</option>
            <option value="Produção">Produção</option>
            <option value="Qualidade">Qualidade</option>
            <option value="Segurança do Trabalho">Segurança do Trabalho</option>
            <option value="Serviços Gerais">Serviços Gerais</option>
        </select>
        </div>
        <div id="linhaProd" style="display: none;">
        <h4>Linha</h4>
        <select name="linhaFiltro">
        <option disabled selected >Selecione sua linha</option>
            <option value="Linha 1 (Promaquina)">Linha 1 (Promaquina)</option>
            <option value="Linha 2 (Antiga arla)">Linha 2 (Antiga arla)</option>
            <option value="Linha 3 (Serac)">Linha 3 (Serac)</option>
            <option value="Linha 4 (Álcool/Cosméticos)">Linha 4 (Álcool/Cosméticos)</option>
            <option value="Linha 5 (Multiuso)">Linha 5 (Multiuso)</option>
            <option value="Linha 6 (LPB)">Linha 6 (LPB)</option>
            <option value="Linha 7 (Sachê)">Linha 7 (Sachê)</option>
            <option value="Linha 8 (Tecnoenvase/ 12 bicos)">Linha 8 (Tecnoenvase/ 12 bicos)</option>
            <option value="Linha 9 (Bosch)">Linha 9 (Bosch)</option>
            <option value="Linha 10 (Nannini)">Linha 10 (Nannini)</option>
            <option value="Linha 11 (Kalix)">Linha 11 (Kalix)</option>
            <option value="Linha 12 (Horse)">Linha 12 (Horse)</option>
            <option value="Linha 13 (Terco 1)">Linha 13 (Terco 1)</option>
            <option value="Linha 14 (Terco 2)">Linha 14 (Terco 2)</option>
            <option value="Linha 15 (UNA 1)">Linha 15 (UNA 1)</option>
            <option value="Linha 16 (UNA 2)">Linha 16 (UNA 2)</option>
            <option value="Linha 17 (Aeromanual/ Graxa)">Linha 17 (Aeromanual/ Graxa)</option>
            <option value="Linha 18 (Blister)">Linha 18 (Blister)</option>
            <option value="Linha 19 (Envase Grafite)">Linha 19 (Envase Grafite)</option>
        </select>
        </div>
        <div>
            <h3>Intervalo de tempo</h3>
            <label>Data Inicio</label>
            <input type="date" name="intDataInicio">
            <label>Data Final</label>
            <input type="date" name="intDataFim">
        </div>
        <input type="submit" value="<?php echo $btn?>">
    </form>
</div>
<?php
    }
?>