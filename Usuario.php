
<?php include'parts/header.php';
	require_once 'php/consulta.php';
	require_once 'php/verifica_sessao.php';

	verifica_conectado(1);
?>

	<section>
		<form method="post" action="php/salva_requisitante.php" id="requisitanteForm">
			<h2>Formulario de ordem de serviço</h2>
			<div class="setor">
				<div><label>Requisitante</label></div>
				<div><input type="text" name="nome" id="nome" required autocomplete="off"></div>
			</div>
			<div class="setor">
				<div><label>Setor</label></div>
				<div>
					<select id="setorReq" name="setor[]" required>
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
				<div id="linhaReq" style="display: none">
				<div><label>Linha</label></div>
					<select name="linha[]" required>
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
			</div>
			<div class="setor">
				<div><label>Motivo da requisição(Descrição da ocorrencia)</label></div>
				<div><textarea name="descricao" id="descricao" placeholder="digite a descrição do problema aqui..." ></textarea></div>
			</div>
			<div class="setor">
				<input type="submit" value="enviar">
				<!---->
				<input type="reset">
			</div>
		</form>
	</section>
<?php include'parts/footer.php'?>