Vamos continuar com a aula 3 de PHP puro, explorando mais a fundo algumas funcionalidades importantes da linguagem, como manipulação de formulários, sessões e cookies, além de introduzirmos o conceito de funções e como trabalhar com arquivos. Esses tópicos são fundamentais para o desenvolvimento de aplicações web mais dinâmicas e robustas.

### 1. Manipulação de Formulários

Formulários são uma das formas mais comuns de interação entre o usuário e a aplicação web. PHP permite capturar e processar os dados enviados por formulários HTML.

#### Exemplo de formulário HTML:
```html
<form action="processa.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <button type="submit">Enviar</button>
</form>
```

Neste exemplo, os dados são enviados para o arquivo `processa.php` via método POST.

#### Processamento do formulário (processa.php):
```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email;
}
?>
```
Aqui, verificamos se o método de envio foi `POST` e utilizamos `htmlspecialchars()` para evitar injeções de código HTML ou JavaScript (XSS).

### 2. Sessões

As sessões são usadas para manter dados temporários de um usuário enquanto ele navega no site. Isso é útil, por exemplo, para gerenciar o login de usuários.

#### Iniciando uma sessão:
```php
<?php
session_start();
$_SESSION['usuario'] = 'Breno';
echo "Usuário salvo na sessão.";
?>
```

#### Acessando dados da sessão:
```php
<?php
session_start();
if (isset($_SESSION['usuario'])) {
    echo "Bem-vindo, " . $_SESSION['usuario'];
} else {
    echo "Nenhum usuário logado.";
}
?>
```

### 3. Cookies

Cookies são pequenos arquivos armazenados no navegador do usuário. Eles podem ser usados para armazenar informações por um tempo mais longo do que uma sessão, como preferências de idioma ou carrinhos de compras.

#### Definindo um cookie:
```php
<?php
setcookie("usuario", "Breno", time() + 3600); // Expira em 1 hora
echo "Cookie definido.";
?>
```

#### Acessando um cookie:
```php
<?php
if (isset($_COOKIE['usuario'])) {
    echo "Usuário: " . $_COOKIE['usuario'];
} else {
    echo "Cookie não definido.";
}
?>
```

### 4. Funções

Funções em PHP permitem modularizar o código, tornando-o mais reutilizável e organizado.

#### Exemplo de função simples:
```php
<?php
function saudacao($nome) {
    return "Olá, " . $nome;
}

echo saudacao("Breno");
?>
```

### 5. Trabalhando com Arquivos

PHP também facilita a manipulação de arquivos, o que é útil para sistemas que precisam salvar logs, armazenar dados ou processar uploads.

#### Leitura de arquivos:
```php
<?php
$conteudo = file_get_contents("meu_arquivo.txt");
echo $conteudo;
?>
```

#### Escrita em arquivos:
```php
<?php
$arquivo = fopen("meu_arquivo.txt", "w");
fwrite($arquivo, "Este é o conteúdo do arquivo.");
fclose($arquivo);
?>
```

### Exercício Prático

1. Crie um formulário HTML que aceite nome e idade do usuário.
2. Use PHP para processar esses dados, salvando o nome em uma sessão e a idade em um cookie.
3. Em uma outra página, exiba os dados armazenados na sessão e no cookie.

### Próximos Passos

Na próxima aula, podemos explorar a conexão com bancos de dados, segurança em aplicações web (sanitização de dados e SQL injection), e também a manipulação de APIs com PHP.