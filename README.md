# Toshiro Shibakita - Docker Microsserviços (Fork & Improved)

Projeto faz parte dos desafios propostos pelo curso "Accenture - Desenvolvimento Java & Cloud", módulo "Docker: Utilização Prática no Cenário de Microsserviços", da qual foi feita uma cópia do projeto, denilsonbonatti/toshiro-shibakita, hospedado no GitHub.
Objetivo: reproduzir e melhorar a estrutura mínima para execução local usando Docker Compose,
seguindo boas práticas de separação entre serviços (nginx + php-fpm + db) e com instruções para extender
para microsserviços.

## Conteúdo do pacote
- docker-compose.yml   -> define serviços: app (PHP-FPM), web (nginx), db (MySQL)
- dockerfile           -> imagem personalizada para o serviço PHP (extensível)
- nginx.conf           -> configuração nginx para enviar PHP-FPM
- index.php            -> exemplo simples exibindo conexão ao banco
- banco.sql            -> script SQL com tabela `usuarios` e exemplo de dados
- .gitignore
- README.md (este arquivo)

## Como usar (local)
1. Instale Docker e Docker Compose.
2. Na raiz do projeto execute:
   `docker compose up --build`
3. Acesse `http://localhost:8080`

## Notas de implementação e melhorias
- Separei nginx, php-fpm e banco em serviços distintos (boa prática).
- Inclusão de healthchecks e variáveis de ambiente para facilitar deploy.
- Arquitetura preparada para conversão em microsserviços (cada serviço em seu repositório/container).

## Referências
- Repositório original usado : https://github.com/denilsonbonatti/toshiro-shibakita
