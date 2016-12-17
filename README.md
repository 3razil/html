# Html engine (PHP)

Gerador e gerenciador de HTML para projetos web em PHP.

* &copy;NeoTags para adicionar funcionalidades extras ao HTML;

* Minificador, obfuscador e unificador para asrquivos Javascript e CSS;

* Compactação da requisição de dados (GZip);

* Cache dinâmico para HTML, CSS e Javascript;

## Instalação

```
Composer require devbr/html
```

## Uso

```
$html = new Lib\Html;
$html->render('index')->send();
```

O argumento 'index', em "render" refere-se a um arquivo HTML localizado no diretório de templates de HTML (configurável). Não é necessário indicar a extensão (.html).

Esse código produz uma saída HTML, depois de "renderizar" o template indicado.

&copy;NeoTags podem ser usadas no arquivo de template para adicionar funcionalidades dinâmicas do PHP.

Veja alguns exemplos:

```
<x:menu class="menu" id="topmenu" tag="nav"/>
```
Isso gera o seguinte código (dependendo do que for programado no PHP):

```
<nav class="menu" id="topmenu">
  <a href="home">Home</a>
  <a href="docs">Documents</a>
    ... etc
</nav>
```

Módulos (objetos PHP) podem ser criados para adicionar funções autônomas ao seu template. 

```
<x::article/>
```

Gera o código HTML (CSS & Javascript) necessário para mostrar o conteúdo de um blog, por exemplo:

```
<article>
  ... conteúdo do artigo do blog ...
</article>
```

Muitas outras facilidades podem ser programadas para utilização com as &copy;NeosTags - ajude a desenvolver!
