Aqui está a versão atualizada do README, incluindo as futuras funcionalidades de cadastro de usuários e listas individuais/compartilhadas:

---

# Market List

![License](https://img.shields.io/github/license/davydcm/marketlist)
![Laravel Version](https://img.shields.io/badge/Laravel-11.x-brightgreen)
![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.1-blue)

## Descrição

O **Market List** é um aplicativo web desenvolvido em Laravel que facilita a criação e gerenciamento de listas de compras de mercado. O objetivo é ajudar usuários a organizar suas listas de compras de forma eficiente e prática, permitindo adicionar, editar e remover itens de uma lista. As listas são salvas em arquivos de texto (.txt), garantindo simplicidade no armazenamento.

## Funcionalidades

- Criar listas de compras personalizadas.
- Adicionar, editar e remover itens da lista.
- Salvar listas de compras antigas para reutilização em arquivos .txt.
- Interface amigável e intuitiva para uma melhor experiência do usuário.

## Tecnologias Utilizadas

- **Backend**: [Laravel 11](https://laravel.com/docs/11.x)
- **Frontend**: [MaterializeCSS](https://materializecss.com/)
- **Armazenamento de Dados**: Arquivos TXT
- **Linguagem**: PHP 8.1 ou superior

## Requisitos

- PHP 8.1 ou superior
- Composer
- Node.js e npm/yarn (para gerenciar dependências de frontend)

## Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/davydcm/marketlist.git
   ```

2. Acesse o diretório do projeto:

   ```bash
   cd marketlist
   ```

3. Instale as dependências do PHP:

   ```bash
   composer install
   ```

4. Instale as dependências do Node.js:

   ```bash
   npm install
   # ou
   yarn install
   ```

5. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente:

   ```bash
   cp .env.example .env
   ```

6. Gere a chave da aplicação:

   ```bash
   php artisan key:generate
   ```

7. Inicie o servidor de desenvolvimento:

   ```bash
   php artisan serve
   ```

8. Acesse a aplicação em [http://localhost:8000](http://localhost:8000).

## Testes

Para rodar os testes automatizados, use o seguinte comando:

```bash
php artisan test
```

## Próximas Atualizações

- **Cadastro de Usuários**: Implementação de sistema de cadastro e autenticação para permitir que diferentes usuários utilizem a plataforma.
- **Listas Individuais e Compartilhadas**: Suporte para listas privadas (individuais) e listas compartilhadas entre usuários cadastrados.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

## Licença

Este projeto está licenciado sob a licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais detalhes.

## Contato

Para mais informações, entre em contato:

- **GitHub**: [davydcm](https://github.com/davydcm)
- **Linkedin**: [davydmartins](https://www.linkedin.com/in/davydmartins/)

---
