# Toshiro Shibakita

Projeto de estudo com foco em boas práticas de backend usando PHP, Docker e Nginx.

## Tecnologias
- PHP 8.x
- Docker
- Docker Compose
- Nginx
- Composer

## Arquitetura
- Separação de responsabilidades (Controller / Service)
- Autoload PSR-4
- Ambiente dockerizado

## Como rodar o projeto

```bash
git clone https://github.com/douglasferreirag/toshiro-shibakita
cd toshiro-shibakita
cp .env.example .env
docker-compose up --build
