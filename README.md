# Login System 🔐
Sistema de login e cadastro feito em **PHP puro**, criado como projeto de estudo para treinar PHP.
A ideia foi entender, na prática, como funcionam sessões, rotas e autenticação de usuários sem usar framework.

> 🚧 Projeto de aprendizado: o foco foi estudar, não entregar um produto pronto para produção.

## O que eu quis praticar
- Controle de sessão com `session_start()` e `$_SESSION`
- Roteamento simples em um único arquivo de entrada (`index.php`)
- Separação do código em pastas (páginas públicas, lógica e estilos)
- Proteção de páginas: quem não está logado é mandado para o login
- Cadastro, login e logout de usuários

## Como funciona
Todas as requisições passam pelo `index.php`, que decide qual página mostrar:

| Rota       | Arquivo                | O que faz                                   |
|------------|------------------------|---------------------------------------------|
| `login`    | `public/login.php`     | Tela de login                               |
| `register` | `public/register.php`  | Tela de cadastro                            |
| `home`     | `public/homepage.php`  | Página inicial (só para usuário logado)     |
| `logout`   | `src/logout.php`       | Encerra a sessão                            |

Regras principais:
- Se não há usuário na sessão, a rota é sempre `login`
- Se o usuário já está logado e tenta abrir o `login`, ele vai para a `home`
- Rotas que não existem na lista retornam "Acesso Negado!"

## Tecnologias
- PHP
- HTML e CSS

## Estrutura do projeto
```
Login-System/
├── index.php   # ponto de entrada e roteador
├── public/     # páginas (login, cadastro, home)
├── src/        # lógica do sistema (ex.: logout)
├── style/      # arquivos CSS
└── data/       # dados do sistema
```

## Como rodar

1. Clone o repositório:
```bash
   git clone https://github.com/th4ylor/Login-System.git
   cd Login-System
```

2. Com o PHP instalado, suba o servidor embutido:
```bash
   php -S localhost:8000
```

3. Abra `http://localhost:8000` no navegador.

## Próximos passos

- Melhorar a segurança (validação dos campos, `password_hash` e `password_verify` para as senhas)
- Mensagens de erro mais claras no login e no cadastro
- Recuperação de senha

## Autor

Feito por [th4ylor](https://github.com/th4ylor) como projeto de estudo.
