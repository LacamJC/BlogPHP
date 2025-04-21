# BlogPHP

## Objetivo

Este projeto, BlogPHP, é um blog desenvolvido em PHP puro, sem a utilização de frameworks externos. O objetivo principal é servir como um recurso de aprendizado prático para os conceitos fundamentais da linguagem PHP, demonstrando a criação de uma aplicação web básica, porém funcional, seguindo o padrão de arquitetura Model-View-Controller (MVC).

## Funcionalidades

O BlogPHP oferece as seguintes funcionalidades:

* **Página Inicial:** Exibe uma saudação e links para as principais seções do blog.
* **Criação de Artigos:** Permite que usuários cadastrados (atualmente sem sistema de autenticação, focado na funcionalidade) escrevam e publiquem novos artigos no blog. Um formulário simples coleta o título, autor, data e conteúdo do artigo.
* **Listagem de Artigos:** Exibe uma lista dos artigos publicados, apresentando o título, autor e uma breve prévia do conteúdo em formato de cards utilizando a classe `Card`.
* **Visualização de Artigo Único:** Permite aos visitantes ler um artigo completo através de um link na listagem. A URL para visualizar um artigo é dinâmica, utilizando o ID do post (`/post/{id}`).
* **Estrutura MVC:** O projeto segue o padrão MVC para organizar o código em camadas distintas, facilitando a compreensão, manutenção e escalabilidade:
    * **Models (`app/models`):** Representam os dados da aplicação (neste caso, a entidade `Post`) e contêm a lógica de negócios para interagir com esses dados.
    * **Views (`app/views`):** São responsáveis pela apresentação dos dados ao usuário (HTML). Utilizam a classe `Layout` para manter uma estrutura consistente.
    * **Controllers (`app/controllers`):** Atuam como intermediários entre as Models e as Views, recebendo as requisições do usuário, interagindo com os Models para obter os dados necessários e, em seguida, passando esses dados para as Views para serem exibidos.
* **Sistema de Roteamento:** Uma classe `Router` (`app/core/Router.php`) é utilizada para mapear URLs específicas para as actions correspondentes nos Controllers.
* **Gerenciamento de Layout:** A classe `Layout` (`app/core/Layout.php`) permite definir um template padrão para as páginas do blog, facilitando a criação de uma interface de usuário consistente.
* **Conexão com Banco de Dados:** A classe `Connection` (`app/api/Connection.php`) gerencia a conexão com o banco de dados SQLite utilizado para armazenar os artigos.
* **Helpers:** Uma classe `Helper` (`app/services/Helper.php`) fornece funções utilitárias, como a geração de URLs para o projeto.
* **Widgets:** A classe `Card` (`app/widgets/Card.php`) é um componente reutilizável para exibir informações de um artigo em formato de cartão.

## Como Executar (Para Desenvolvimento Local)

1.  **Certifique-se de ter o PHP instalado em seu sistema.**
2.  **Clone este repositório.**
3.  **Configure o servidor web (ex: Apache, Nginx) para apontar a raiz do seu domínio virtual para o diretório `public/` deste projeto.**
4.  **O arquivo de banco de dados SQLite (`database/blog.db`) já está incluído.** A estrutura da tabela `posts` pode ser criada utilizando o arquivo `database/table.db` (execute as instruções SQL em um cliente SQLite).
5.  **Acesse a aplicação através do seu navegador web (ex: `http://localhost/blog/` ou o domínio virtual configurado).**

## Próximos Passos e Melhorias

Este projeto é uma base para aprendizado e pode ser expandido com diversas funcionalidades e melhorias, como:

* Implementação de um sistema de autenticação e autorização de usuários.
* Validação de formulários mais robusta.
* Tratamento de erros mais amigável e logging.
* Funcionalidade de edição e exclusão de artigos.
* Implementação de paginação para a listagem de artigos.
* Melhorias na segurança, como prevenção contra ataques XSS e CSRF.
* Utilização de prepared statements para prevenir SQL Injection (altamente recomendado).
* Separação completa da lógica de apresentação (HTML) dos Controllers.

## Autor

LacamJC <a href="www.linkedin.com/in/joao-ramajo">Linkedin</a>