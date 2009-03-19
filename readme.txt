=== Twittada ===
Contributors: @leobaiano, @rodrigofante
Donate link: http://leobaiano.com/donate
Tags: twitter, microblogginng, widget twitter
Requires at least: 2.5
Tested up to: 2.7
Stable tag: twittada

O plugin twiitada serve para exibir seus posts do twitter no seu blog.

== Description ==

O twittada &eacute; um plugin que serve para exibir, no seu blog, um widget que mostra os &uacute;ltimos posts que voc&ecirc; fez no twitter. O Twittada possui um painel de administra&ccedil;&atilde;o onde voc&ecirc; pode modificar o tamanho, as cores do texto e linhas, pode tamb&eacute;m definir a quantas mensagens deve aparecer de forma a adaptar o widget ao design do seu blog.

A equipe de desenvolvimento do plugin Twittada n&atilde;o se responsabiliza por nenhum problema ocasionado pela instala&ccedil;&atilde;o do mesmo e, apesar
de ajudar a resolver problemas com instala&ccedil;&atilde;o, n&atilde;o tem obriga&ccedil;&atilde;o de prestar suporte.

== INSTALLATION ==

Para instalar o plugin Twittada voc&ecirc; deve seguir os passos b&aacute;sicos de intala&ccedil;&atilde;o, ativa&ccedil;&atilde;o, de plugins WordPress que,
basicamente, consiste no upload do plugin para a pasta wp-content/plugins do seu blog e na ativa&ccedil;&atilde;o do mesmo atrav&eacute;s do menu Plugins
do painel administrativo do seu blog.

Abaixo um passo a passo de instala&ccedil;&atilde;o e configura&ccedil;&atilde;o do plugin Twittada:

1 - Acesse o FTP do seu blog e faça o upload da pasta twittada para o diretorio wp-content/plugins do seu blog;

	1.1 - Dentro da pasta twittada devem existir 5 arquivos: a) twittada.php; b) logo_twitter.png c) readme.txt d) leiame-txt e) sreenshot.jpg;

2 - Acesse o painel administrativo do seu blog e v&aacute; at&eacute; o menu Plugins;

3 - Procure o plugin Twittada na lista e ative o plugin;

Ap&oacute;s a instala&ccedil;&atilde;o voc&ecirc; deve configurar o plugin para ele come&ccedil;ar a exibir corretamente no seu blog.

A configura&ccedil;&atilde;o do plugin consiste na escolha do local onde as mensagens dever&atilde;o aparecer no seu blog e em informar ao sistema o nome do usu&aacute;rio Twitter cujas mensagens voc&ecirc; deseja exibir no blog e modificar a largura, cor da fonte e da borda para melhor adequa&ccedil;&atilde;o ao design do seu blog.

Existem duas formas para instalar e configurar o plugin, incluindo o c&oacute;digo diretamente no template do seu blog ou atrav&eacute;s do menu widgets do WordPress.

1 - Ap&oacute;s ativa&ccedil;&atilde;o do plugin acesse o menu Configura&ccedil;&otilde;es >> Twittada;

2 - Preencha o formul&aacute;rio com os dados solicitados e salve as op&ccedil;&otilde;es;

3 - Para incluir no tema voc&ecirc; pode proceder de duas maneiras diferentes:
	
	3.1 - MENU WIDGETS
		
		A - Acesse o menu Design >> Widigets;
		B - Encontre o widget Twittada e adicione na sidebar que desejar;
		C - Salve as altera&ccedil;&otilde;es.

	3.2 - DIRETO NO TEMPLATE
	
		A - Inclua o c&oacute;digo <?php twittada(); ?> no local onde as mensagens devem aparecer;

== FREQUENTLY ASKED QUESTIONS ==

= Instalei o twittada mas as mensagens que est&atilde;o aparecendo no blog n&atilde;o s&atilde;o do meu twitter? =

Voc&ecirc; precisa acessar o Menu Configura&ccedil;&otilde;es >> Twittada para definir o usu&aacute;rio.

= Instalei, configurei e inclui o plugin Twittada no meu blog mas no blog apareceu a mesagem de erro &quot;Warning: simplexml_load_file() [function.simplexml-load-file]: URL file-access is disabled in the server configuration in&quot; =

O erro acontece porque a fun&ccedil;&atilde;o simplexml_load_file esta desabilitada no servidor, a solu&ccedil;&atilde;o &eacute; entrar em contato com a hospedagem solicitando a habilita&ccedil;&atilde;o da fun&ccedil;&atilde;o ou criar um arquivo chamado php.ini, escrever a linha abaixo, e subir o arquivo para a raiz do blog:

allow_url_fopen = On;

== SCREENSHOTS ==

trunk/screenshot.jpg

== CREDIT ==

Este plugin doi desenvolvido por Leo Baiano (http://www.leobaiano.com), agradecimentos a Rodrigo Fante (http://www.rodrigofante.com).

== CONTACT ==

Leo Baiano
http://www.leobaiano.com/contato
E-mail: leobaiano@leobaiano.com