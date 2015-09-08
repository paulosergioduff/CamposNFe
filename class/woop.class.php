<?php
	// Nunca confundir a sintaxe da classe com a sintaxe da função . Classe = Class nome {}  ; função = function nome () {}; 
		Class criarpagina 
			{
				public $pagina;
				public $conteudo;

				public function  EscreveNoFinal()
										{
											// abre o arquivo colocando o ponteiro de escrita no final
											$arquivo = fopen($this->pagina, 'a+');
													if ($arquivo) {
														if (!fwrite($arquivo, $this->conteudo)) die('Não foi possível atualizar o arquivo.');
											echo 'Arquivo atualizado com sucesso';
											fclose($arquivo);
																	}
										}

				public function EscreveNoInicio()
										{
											$arquivo = fopen($this->pagina, 'r+');
													if ($arquivo) {
														// move o ponteiro para o inicio do arquivo
													rewind($arquivo);
														if (!fwrite($arquivo, $this->conteudo)) die('Não foi possível atualizar o arquivo.');
														echo 'Arquivo atualizado com sucesso';
											fclose($arquivo);
																}
										}
				public function Substituir()
										{
											// abre o arquivo colocando o ponteiro de escrita no final
$arquivo = fopen($this->pagina,'r+');
if ($arquivo) {
	while(true) {
		$linha = fgets($arquivo);
		if ($linha==null) break;
		
		// busca na linha atual o conteudo que vai ser alterado
		if(preg_match('/José da Silva: 27 anos/', $linha)) {
			$string .= str_replace('José da Silva: 27 anos', 'José da Silva: 28 anos', $linha);
		} else {
			// vai colocando tudo numa nova string
			$string.= $linha;
		}
	}
	// move o ponteiro para o inicio pois o ftruncate() nao fara isso
	rewind($arquivo);
	// truca o arquivo apagando tudo dentro dele
	ftruncate($arquivo, 0);
	// reescreve o conteudo dentro do arquivo
	if (!fwrite($arquivo, $string)) die('Não foi possível atualizar o arquivo.');
	echo 'Arquivo atualizado com sucesso';
	fclose($arquivo);
}
										}										

				public function Update()
										{
											$arquivo = fopen($this->pagina,'w+');
												if ($arquivo) {
													if (!fwrite($arquivo, $this->conteudo)) die('Não foi possível atualizar o arquivo.');
													echo 'Arquivo atualizado com sucesso';
													fclose($arquivo);
								   							}
										}

				public function LeArquivoCompleto()
										{
											$arquivo = fopen($this->pagina,'r');
											$string = file_get_contents($this->pagina);
												echo $string;
												fclose($arquivo);	
										}

				public function LeAteOFinal()
										{
											$arquivo = fopen($this->pagina,'r');
												if ($arquivo == false) die('Não foi possível abrir o arquivo.');
												// imprime linha por linha ate detectar o final
													while(!feof($arquivo)) {
												echo fgets($arquivo). '<br />';
																			}
											fclose($arquivo);	
										}

				public function LeLinhaPorLinha()
										{
											$arquivo = fopen($this->pagina,'r');
												if ($arquivo == false) die('Não foi possível abrir o arquivo.');
													while(true) {
															$linha = fgets($arquivo);
															if ($linha==null) break;
															echo $linha;
																}
											fclose($arquivo);	
										}

				public function LerBytes()
										{
											$arquivo = fopen($this->pagina,'r');
												if ($arquivo == false) die('Não foi possível abrir o arquivo.');
											$linha = fgets($arquivo, 64);
											echo $linha;
												fclose($arquivo);
										}

				public function LeLinha()
										{
											$arquivo = fopen($this->pagina,'r');
												if ($arquivo == false) die('Não foi possível abrir o arquivo.');
													$linha = fgets($arquivo);
													echo $linha;
											fclose($arquivo);
										}

				public function AdcionarNoArquivo()
										{
										$arquivo = fopen($this->pagina,'a');
										if ($arquivo == false) die('Não foi possível criar o arquivo.');	
										}

				public function  RescreverArquivo()
										{
											$arquivo = fopen($this->pagina,'r');
											if ($arquivo == false) die('O arquivo não existe.');
										}

				public function  FuncaoEmAberto()
										{
										$arquivo = fopen($this->pagina,'r');
										if ($arquivo == false) die('O arquivo não existe.');	
										}

				public function Apagar()
						{
							$arquivo = fopen($this->pagina,'w+');
							if ($arquivo == false) die('Não foi possível criar o arquivo.');
						}

	/* Classes de testes			

				public function ImprimirTela()
							{
								echo "$this->pagina";
								echo "$this->conteudo"; // O $this->variavel SEMPRE imprime o atributo do objeto

							}

				public function ImprimirTelaXML()
							{
								$tag1 = htmlspecialchars('<tag1>');
								$fimtag1 = htmlspecialchars('</tag1>');
								echo "<p>";
								echo "$tag1" . $this->pagina . "$fimtag1";
								echo '<tag2>' . $this->conteudo . '</tag2>'; // O $this->variavel SEMPRE imprime o atributo do objeto

							} */
			}


/* Agradecimentos :http://www.samuelcorradi.com.br/manipulando_arquivos_php.html 

