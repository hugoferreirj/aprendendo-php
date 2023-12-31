# VS12 - Formação Complementar em PHP - Aula01

Introdução ao PHP: Comandos básicos + PHP na web + PHP com orientação a objetos.

## PHP - Hypertext preprocessor

Uma linguagem que se tornou muito popular na WEB contando com inúmeros frameworks, integração com banco de dados euma comunidade bem extensa.

## Tópicos de destaque

- Sintaxe similar ao C

- Tipagem dinâmica (apesar de ser possível tipar como funciona com JS e TS).

- Pode ser orientada a objetos ou funcional, apesar da orientação a objetos ser mais recomendada em aplicações que utilizam de banco de dados por trazer uma arquitetura mais bem definida, organização e segurança do projeto.

- Linguagem interpretada -> Código fonte executado linha-a-linha.

- Para trabalhar com o PHP na web é necessário ter um servidor que interprete a linguagem,

- O PHP é utilizado na WEB em um formato SSR (server-side-rendering), ou seja, tem um servidor que intepreta a linguagem e devolve para o client (browser) no formato em que é esperado.

---

## Servidores que rodam PHP

- Apache
- NginX
- Servidor nativo do PHP ao instalar na máquina (em ambiente de desenvolvimento).

## Pacotes conhecidos

- Xamp
- Wampp
- Laragon

> PHP é multiplataforma. Ou seja, funciona em Linux, Windows ou MacOS.

## Frameworks PHP

Alguns dos frameworks que aparecem na comunidade PHP

## Lavaravel \*

**Eloquent ORM:** O Laravel inclui um poderoso ORM (Object-Relational Mapping) chamado Eloquent, que simplifica a interação com bancos de dados relacionais. Ele permite que você trabalhe com seus dados usando objetos e consultas em vez de escrever código SQL diretamente.

**Roteamento Simples:** O Laravel fornece um sistema de roteamento simples e expressivo que ajuda a mapear URLs para controladores e métodos de forma clara e organizada.

**Blade Templates:** Blade é o mecanismo de template do Laravel, que oferece uma sintaxe elegante e intuitiva para criar views HTML. Ele suporta herança de templates, inclusões e muito mais.

**Migrations:** As migrações do Laravel permitem que você defina e versione o esquema do banco de dados de forma programática, o que facilita a colaboração em equipe e a implantação de alterações no banco de dados.

**Autenticação e Autorização:** O Laravel fornece recursos integrados para autenticação de usuário e autorização. Isso inclui formulários de login, registro, redefinição de senha e controle de acesso baseado em funções.

**Biblioteca de Tarefas Agendadas:** O Laravel possui uma biblioteca chamada "Task Scheduling" que permite agendar tarefas recorrentes em seu aplicativo, como envio de e-mails automáticos ou execução de tarefas de manutenção em segundo plano.

**Middleware:** Middleware no Laravel é uma camada intermediária que permite executar código antes ou depois das requisições HTTP. Isso é útil para autenticação, registro de log, verificação de CORS e outras tarefas.

**Integração com o Composer:** O Laravel usa o Composer, uma ferramenta de gerenciamento de dependências para PHP, para gerenciar suas dependências e facilitar a inclusão de pacotes de terceiros em seu projeto.

### Outros frameworks PHP

- Symfony
- CodeIgniter
- Yii
- CakePHP

## Gerenciador de pacotes e dependências

- Composer -> O Composer permite que os desenvolvedores do PHP declarem as dependências de seus projetos em um arquivo especial chamado "composer.json" e, em seguida, instalem automaticamente essas dependências, bem como suas próprias dependências, com apenas um comando.

Além disso:

- Autoloading de classes:
  O Composer gera automaticamente um autoloader de classes (geralmente chamado "autoload.php") que permite que você carregue automaticamente classes e arquivos das bibliotecas instaladas, economizando tempo e esforço no gerenciamento de inclusões manualmente.

- Plugins e Extensões: O Composer é altamente extensível e suporta plugins que adicionam funcionalidades adicionais, como integração com ambientes de desenvolvimento específicos ou sistemas de integração contínua.

> Ao instalar o PHP na máquina já temos algumas extensões comentadas no arquivo `php.ini`, para utilizá-las basta procurar o arquivo no computador e descomentar a extensão que deseja ser utilizada.
