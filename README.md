# learning-php

Repository for learning the basics off PHP.

This repository, will contain my first contact with PHP, with a lot of code, and annotations.

Most of the annotation will be written in Portuguese Brazilian.

Roadmap of Learning:

 1. Learn basics of PHP.
 2. Learn the framework Symfony

My references to learn the language will be:
 - [PHP Documentation](https://www.php.net/manual/pt_BR/)
 - [PT-BR PHP Guide](https://www.youtube.com/watch?v=XwpsxPmQN2E&list=PLwXQLZ3FdTVEITn849NlfI9BGY-hk1wkq)
 - [EN PHP Guider](https://www.youtube.com/watch?v=m52ljs78S24&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih)

## O que é PHP?
PHP que é um acrônimo recursivo de PHP: Hypertext Preprocessor, é uma linguagem de script open source de uso geral. Sua sintaxe se baseia em C, Java e Perl.
O objetivo do PHP é o desenvolvimento dinâmico e rápido de páginas web, ela é amplamente utilizada para desenvolvimento web e pode ser incorporada no HTML. Como por exemplo:
``` PHP
<!DOCTYPE html>
<html>   
	<head>   
		<title>Exemplo</title>
	</head>
	<body>
		<?php
			echo "Olá, eu sou um script PHP!";
		?>      
	</body>
</html>
```
Como mostrado no exemplo acima, as páginas contem HTML e PHP mesclado, como no exemplo acima mostra uma mensagem.
O código PHP é delimitado pelas notação `<?php` e  `?>`. Que permitem que você entre e saia do modo PHP.
Depois de olhar este exemplo, você fica se perguntando. Isto não parece com JavaScript? Pode parecer mas PHP e JavaScript funcionam de forma diferente. O código de PHP é executado no servidor antes de ser gerado o HTML e assim enviado para o navegador. O navegador recebe os resultado da execução do script, mas não sabe qual era o código fonte. Isso faz com que seus usuários não saibam como foi feito seu html.
## O que o PHP pode fazer?
O foco do PHP é na execução de scripts do lado do servidor (server side). Ele pode fazer o que qualquer outro programa pode fazer, como coletar dados de formulários, gerar conteúdos dinâmicos ou enviar e receber cookies. Alem disso ele pode fazer muito mais.
O PHP tem 3 áreas em que ele pode ser usado:
 - Scripts server side: É o mais tradicional e principal campo do PHP. Precisa de 3 coisas para fazer funcionar: o interpretador PHP ([CGI](https://pt.wikipedia.org/wiki/Common_Gateway_Interface) ou Módulo do Servidor), um servidor web (Apache, Nginx), e um navegador web. Você roda o servidor web e o conecta ele a uma instalação PHP, depois você pode acessar os resultados em um navegador web.
 - Scripts de CMD: É possível criar um arquivo e executar-lo sem precisa de um navegador ou servidor. A única coisa necessária no caso é o interpretador PHP. É ideal usar estas aplicações junto com o cron ou o Agendador de Tarefas.
 - Criar aplicação desktop: PHP não é uma das melhorar para desempenhar esta tarefa, mas é possível. É interessante por causa que você cria uma aplicação multi-plataforma.
O PHP é uma linguagem que possui uma grande liberdade na hora de você utiliza-la:
- Tem suporte para quase todas os sistemas operacionais.
- Tem suporte para quase todos servidores web.
- Você pode escolher entre usar programação estruturada ou orientada a objetos.
Ele também não é limitado em apenas gerar HTML, ele também é capaz de gerar outros tipos de arquivos, como imagens, PDF, JSON, XML, criptografar dados, enviar emails.
Também suporta quase todos os banco de dados usando várias formas de conexão, como PDO, ODBC, cURL e sockets.

## Sintaxe Básica:
### Tags PHP:
Quando um arquivo PHP é processado, ele procura pelas tags de abertura e fechamento `<?php` e `?>`, que dizem ao interpretador para começar a interpretar o código entre estas tags. Isto permite que o PHP seja incluído em todo tipo de documento, pois tudo que estiver fora destas tags será ignorado pelo interpretador PHP.
Exemplo da Tags:
```php
<?php echo 'Se quiser usar PHP em documento XML ou XHTML.'; ?>
```

```php
A tag echo curta <?= 'imprima este string' ?> pode ser usada.
Ela é equivalente a  <?php echo 'imprima essa string' ?>
```

```php
<? echo 'Este código está estre tags curtas, mas só funcionará'
		'se a diretiva short_open_tag estivar habilitada'; ?>
```

Se você fazer um código PHP puro, é preferível omitir a tag de fechamento do PHP no final do arquivo. Isso evita você colocar código PHP depois do fechamento da tag.
```php
<?php
echo "Olá Mundo";

// Código de PHP

echo "Última declaração";
// Script termina aqui sem a tag de fechamento.
```
### Escapando o HTML
Tudo fora do par de tags é ignorado pelo interpretador PHP, permitindo que tenham conteúdo misto, permitindo que o PHP seja incluído em documentos HTML.
```php
<p>Isso será ignorado pelo PHP e exibido pelo navegador.</p>
<?php echo 'Isto vai ser interpretado'; ?>
<p>Isso também será ignorado pelo PHP.</p>
```
Exemplo #1 Escape avançado usando condições:
```php
<?php if ($expression == true): ?>
	Isso irá aparecer se a expressão for verdadeira.
<?php else: ?>
	Senão isso irá aparecer.   
<?php endif; ?>
```
### Separação de Instruções
