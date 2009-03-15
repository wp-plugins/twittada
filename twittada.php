<?php
/*
Plugin Name: Twittada
Plugin URI: http://leobaiano.com/download
Description: Plugin que exibe as mensagens do Twitter no blog. Depois de ativar voc&ecirc; acessa a op&ccedil;&atilde;o <strong>"Configura&ccedil;&otilde;es/Twittada"</strong> para informar o nome de usu&aacute;rio, em seguida acesse o menu <strong>"widgets"</strong> para inclui-lo no seu blog ou incluia o c&oacute;dido <code>&lt;?php twittada(); ?&gt;</code> no local desejado do seu tema. Informa&ccedil;&otilde;es no <a href="/wp-content/plugins/twittada/leia-me.txt">arquivo leia-me</a>, agradecimentos a <a href=http://www.rodrigofante.com/>Rodrigo Fante</a> - Plugin Desenvolvido
Version: 1.0
Author: Leo Baiano
Author URI: http://leobaiano.com/
*/

// Cabeçalho em UTF para não dar erro nos caracteres
header('Content-type: text/html; charset=UTF-8');

// Seto valor padrão nas variaveis globais de configuração
$twittada_largura = '200';
$twittada_cor = 'FF0000';
$twittada_user = 'twittada';
$twittada_views = '5';
$twittada_borda = 'c2c2c2';
// Adciono as variaveis a tabela de opções do WP
add_option('TwittadaLargura', $twittada_largura);
add_option('TwittadaCor', $twittada_cor);
add_option('TwittadaUser', $twittada_user);
add_option('TwittadaViews', $twittada_views);
add_option('TwittadaBorda', $twittada_borda);

$largura = stripslashes(get_option('TwittadaLargura'));
$cor = stripslashes(get_option('TwittadaCor'));
$user = stripslashes(get_option('TwittadaUser'));
$views = stripslashes(get_option('TwittadaViews'));
$borda = stripslashes(get_option('TwittadaBorda'));

// Apago os campos criados na tabela de opções (quando desativar plugin)
function delete_opt() {
delete_option('TwittadaLargura');
delete_option('TwittadaCor');
delete_option('TwittadaUser');
delete_option('TwittadaViews');
delete_option('TwittadaBorda');
}

// Função para criar a folha de estilos
function twittada_css() {
	global $largura, $cor, $borda;
	
	echo "\n".'<!-- Folha de Estilo do Plugin Twittada -->'."\n";
	echo '<style type="text/css">'."\n";
	echo '.twittada_geral {'."\n";
	echo 'width: '.$largura.'px;'."\n";
	echo 'padding: 5px;'."\n";
	echo 'border: 1px solid #'.$borda.';'."\n";
	echo '}'."\n";
	echo '.twittada_topo {'."\n";
	echo 'text-align: center;'."\n";
	echo '}'."\n";
	echo '.twittada_topo img {'."\n";
	echo 'border: 0px;'."\n";
	echo '}'."\n";	
	echo '.twittada_texto {'."\n";
	echo 'word-wrap:break-word;'."\n";
	echo 'text-align: left;'."\n";
	echo 'color: #'.$cor.';'."\n";
	echo 'border-bottom: 1px solid #'.$borda.';'."\n";
	echo 'padding-bottom: 10px;'."\n";
	echo 'margin-bottom: 10px;'."\n";
	echo '}'."\n";
	echo '.twittada_des {'."\n";
	echo 'font-size: 10px;'."\n";
	echo 'word-wrap:break-word;'."\n";
	echo 'text-align: left;'."\n";
	echo 'color: #'.$cor.';'."\n";
	echo 'border-bottom: 1px solid #'.$borda."\n";
	echo 'padding-bottom: 10px;'."\n";
	echo 'margin-bottom: 10px;'."\n";
	echo '}'."\n";
	echo '#rodape {'."\n";
	echo 'padding: 5px;'."\n";
	echo '}';
	echo '</style>'."\n";
	echo '<!-- FIM -->'."\n";
}

// Função para criar o menu de opções
function Twittada_menu() {
		global $largura, $cor, $user, $views, $borda;
		
	// Limpo as opções
	if (isset($_POST['delete_opt'])) {
		delete_opt();
		
		$twittada_largura = '200';
$twittada_cor = 'FF0000';
$twittada_user = 'twittada';
$twittada_views = '5';
$twittada_borda = 'c2c2c2';
// Adciono as variaveis a tabela de opções do WP
add_option('TwittadaLargura', $twittada_largura);
add_option('TwittadaCor', $twittada_cor);
add_option('TwittadaUser', $twittada_user);
add_option('TwittadaViews', $twittada_views);
add_option('TwittadaBorda', $twittada_borda);

$largura = stripslashes(get_option('TwittadaLargura'));
$cor = stripslashes(get_option('TwittadaCor'));
$user = stripslashes(get_option('TwittadaUser'));
$views = stripslashes(get_option('TwittadaViews'));
$borda = stripslashes(get_option('TwittadaBorda'));
	}
	// Recupero os dados do formulário e dou um update
	if (isset($_POST['css_update'])) {					
		if ($_POST['TwittadaLargura'] < '150') {
			echo "<span style='color: red;'>O campo largura n&atilde;o pode ser menor que 150</span>";
		}
		else {
		update_option('TwittadaLargura', stripslashes(trim($_POST['TwittadaLargura'])));
		update_option('TwittadaCor', stripslashes(trim($_POST['TwittadaCor'])));
		update_option('TwittadaUser', stripslashes(trim($_POST['TwittadaUser'])));
		update_option('TwittadaViews', stripslashes(trim($_POST['TwittadaViews'])));
		update_option('TwittadaBorda', stripslashes(trim($_POST['TwittadaBorda'])));
		$largura = stripslashes(get_option('TwittadaLargura'));
		$cor = stripslashes(get_option('TwittadaCor'));
		$user = stripslashes(get_option('TwittadaUser'));
		$views = stripslashes(get_option('TwittadaViews'));
		$borda = stripslashes(get_option('TwittadaBorda'));
			echo '<div>' ."\n";
			echo '<p><strong>' ."\n";
			echo 'Atualizado com sucesso!' ."\n";
			echo '</strong></p>' ."\n";
			echo '</div>';
		}
	}
		
		// Criando o formulário do menu opções
		echo '<div class="wrap">' ."\n";
		echo '<form name="TWITTADA" method="post">' ."\n";
		echo '<h2>Twittada</h2>' ."\n";
		echo '<hr>'."\n";
		echo '<p>Configura&ccedil;&otilde;es do Plugin Twittada<p/>'."\n";
		echo '<div>'."\n";
		echo '<table>' ."\n";
		echo '<tr><td>Largura : </td>' ."\n";
		echo '<td><input type="text" size="10" name="TwittadaLargura" value="'.$largura.'"></td></tr>' ."\n";
		echo '<tr><td>Cor do texto: </td>' ."\n";
		echo '<td><input type="text" size="10" name="TwittadaCor" value="'.$cor.'"></td></tr>' ."\n";
		echo '<tr><td>Cor das linhas: </td>' ."\n";
		echo '<td><input type="text" size="10" name="TwittadaBorda" value="'.$borda.'"></td></tr>' ."\n";
		echo '<tr><td>Usuario no Twitter: </td>' ."\n";
		echo '<td><input type="text" size="20" name="TwittadaUser" value="'.$user.'"></td></tr>' ."\n";
		echo '<tr><td>N&ordm; de twittadas: </td>' ."\n";
		echo '<td><input type="text" size="20" name="TwittadaViews" value="'.$views.'"></td></tr>' ."\n";
		echo '</table>' ."\n";
		echo '</div>' ."\n";  
		echo '<div>' ."\n";
		echo '<input type="submit" name="css_update" value="Salvar op&ccedil;&otilde;es" /> <input type="submit" name="delete_opt" value="Limpar dados" />' ."\n";
		echo '</div>' ."\n";
		echo '</form>' ."\n";
		echo '</div>' ."\n";     
}

// Função para adcionar o menu de opções a administração do WP
function Twittada_option() {
    if (function_exists('add_options_page')) {
		add_options_page('Options', 'Twittada', 5, basename(__FILE__), 'Twittada_menu');
    }
}

// Registro o widget
function registrar_widget() {
$widget_id = 'Twittada_01';
$widget_title = 'Twittada';
$output_callback = 'twittada';
$wp_dashboard_empty_callback = 'twittada';
$desc_widget = array( 'all_link' => 'http://www.leobaiano.com', 'feed_link' => 'http://www.leobaiano.com/feed', 'width' => '400', 'height' => '300');
$arg = 'Aqui fica a descrição';

$menu_opt = 'Twittada_menu';
//Crio o menu de opções no widget
wp_register_sidebar_widget($widget_id , $widget_title, $output_callback, $desc_widget, $wp_dashboard_empty_callback, $arg);
register_sidebar_widget($widget_id , 'Twittada_menu', $menu_opt, $desc_widget, $menu_opt, $arg);
register_widget_control($widget_id , 'Twittada_menu', $menu_opt, $desc_widget, $menu_opt, $arg);
}

// Criar links em @, # e URL's - pessoas, tags e links originais
function novo_texto($twittada) {
	// Dou um explode na frase para separar as palavras
	$arr_twittada_palavras = explode(" ",$twittada);
	
	// Passo palavra por palavra para procurar os temos chaves
	foreach($arr_twittada_palavras as $palavras) {
		$string = '@';
		$string2 = '#';
		$string3 = 'http://';
		$palavras_posicao = strpos($palavras,$string);
		$palavras_posicao2 = strpos($palavras,$string2);
		$palavras_posicao3 = strpos($palavras,$string3);
		
		// Se a palavra começar com @ linko para a pessoa
		if (($palavras_posicao !== false) AND ($palavras_posicao == '0')) {
			$char = explode("@",$palavras);
				foreach($char as $n_char) {
					if ($n_char !== '@') {
						$linkar = $n_char;
					}
				}
			$palavras = str_replace($palavras,'<a href="http://www.twitter.com/'.$n_char.'">'.$palavras.'</a>',$palavras);
		}
		
		// Se a palavra começar com # linko para a tag
		if (($palavras_posicao2 !== false) AND ($palavras_posicao2 == '0')) {
			$char = explode("#",$palavras);
				foreach($char as $n_char) {
					if ($n_char !== '#') {
						$linkar = $n_char;
					}
				}
			$palavras = str_replace($palavras,'<a href="http://www.live.yoomp.com/?q='.$n_char.'">'.$palavras.'</a>',$palavras);
		}
		
		// Se for uma URL linko para o original
		if (($palavras_posicao3 !== false) AND ($palavras_posicao3 == '0')) {
			$palavras = str_replace($palavras,'<a href="'.$palavras.'">'.$palavras.'</a>',$palavras);
		}
		
		// Recupero as palavras para transformar em 1 só frase
		$new_twittada = $new_twittada.' '.$palavras;
	}
	return $new_twittada;
}

// Função para exibir as atualizações no twitter
function twittada() {
	global $user, $views;
	
	$url = 'http://twitter.com/statuses/user_timeline/'.$user.'.xml?count='.$views;
	$xml = simplexml_load_file($url);
		echo "<div class='twittada_geral'>";
		echo "<div class='twittada_topo'><img src='".get_option('siteurl')."/wp-content/plugins/twittada/logo_twitter.png'><br></div>";
	foreach($xml->status as $resultados) {
		$data = $resultados->created_at;
		$data = strtotime($data);
		$data_atual = time();
			$data_teste = date("dmY",$data);
			$data_atual_teste = date("dmY",$data_atual);
			if ($data_teste == $data_atual_teste) {
				$data_view = 'Hoje as '.date("H:i",$data);
			}
			else {
				$data_view = 'Dia: '.date("d/m - H:i",$data);
			}
			
		$texto_twittada = novo_texto($resultados->text);
		echo "<div>";
			echo "<p class='twittada_texto'><img src='".get_option('siteurl')."/wp-content/plugins/twittada/tick.png'> ".$texto_twittada." - <a href='http://www.twitter.com/".$user."/status/".$resultados->id."'>".$data_view."</a></p>";
		echo "</div>";
	}
		echo "<div class='twittada_texto'>Siga-me no <a href='http://www.twitter.com/".$user."'>Twitter</a>";
		echo "</div>";
		echo "<div class='twittada_des'>Desenvolvido por <a href='http://www.leobaiano.com'>Leo Baiano</a>";
		echo "</div>";
}

// Endereço do plugin
$base_plugin = substr(strrchr(dirname(__FILE__),DIRECTORY_SEPARATOR),1).DIRECTORY_SEPARATOR.basename(__FILE__);
// Filtros para adicionar o menu de opções e chamar as twittadas
add_action('wp_head', 'twittada_css');
add_action('admin_menu', 'Twittada_option');
add_action('plugins_loaded', 'registrar_widget');
?>