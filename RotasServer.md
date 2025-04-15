Boa! Se você está construindo um sistema de rotas manualmente e quer que o comando:

```php
header('Location: /home');
```

funcione corretamente **com rotas amigáveis**, você precisa garantir duas coisas:

---

### ✅ 1. **Que a requisição para `/home` passe por seu `index.php`**

Isso só acontece se você tiver um roteador, como mencionei antes.

#### Se estiver usando o servidor embutido do PHP:

Crie um arquivo `router.php` no mesmo diretório do seu `index.php` com o seguinte conteúdo:

```php
<?php
// router.php

// Se o arquivo requisitado existe, serve ele diretamente
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = __DIR__ . $path;

    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/index.php';
```

E execute o servidor assim:

```bash
php -S localhost:8000 router.php
```

Agora a URL `/home` será redirecionada corretamente e processada pelo `index.php`, que vai incluir o `home.php`.

---

### ✅ 2. **Uso correto do redirecionamento com `header()`**

Suponha que você esteja dentro de um script como `login.php` e queira redirecionar para a home após o login:

```php
<?php
// login.php

// Após validação de login
header('Location: /home');
exit;
```

> **Importante:** sempre use `exit;` depois de `header('Location: ...')` para interromper a execução do script.

---

### 🔄 Exemplo de fluxo completo

Suponha essa estrutura:

```
/projeto/
├── index.php
├── router.php
├── home.php
├── login.php
```

No `index.php`, seu código de roteamento já faz:

```php
$route = explode('/', trim($_SERVER['REQUEST_URI'], '/'))[0];
$route = $route ?: 'home';

switch ($route) {
    case 'home':
        include 'home.php';
        break;
    // ...
}
```

No `login.php`, você pode redirecionar assim:

```php
// login.php
// ... autenticação feita

header('Location: /home');
exit;
```

Agora tudo funciona com rotas amigáveis!

---

Se quiser, posso te passar um exemplo funcional completo zipado ou o código base de um mini framework com isso pronto. Quer?