# BlastMail

Um sistema completo para envio de e-mails marketing  
➡️ Baseado no curso **PHP/Laravel da Rocketseat** - Aplicado em projetos reais

---

## 🧩 Tecnologias e Ferramentas Utilizadas

Este projeto foi desenvolvido com foco em boas práticas modernas do ecossistema Laravel:

- ✅ **Laravel 10+**
- ✉️ **Disparo de e-mails marketing com filas (queues)**
- 📧 **Verificação de e-mail de usuário autenticado**
- 🎨 **Blade Components** para construção de interfaces reutilizáveis
- 💨 **TailwindCSS** para estilização rápida e responsiva
- 🧵 **Laravel Breeze** como starter kit de autenticação
- ⏳ **Filas (queues)** para envio assíncrono de e-mails
- 📈 **Trackeamento de cliques em links de e-mails**
- 🔐 Proteção via autenticação e autorização

---

## 🚀 Funcionalidades

- Cadastro e autenticação de usuários com verificação de e-mail
- Importação de listas de e-mails via CSV
- Criação de campanhas com conteúdo HTML via editor
- Disparo em massa de e-mails utilizando filas
- Monitoramento de cliques em links enviados
- Interface moderna e responsiva com Tailwind CSS
- Separação clara de componentes com Blade

---

## 📦 Instalação e Uso

```bash
git clone https://github.com/LucasEduardo122/blastmail.git
cd blastmail
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan queue:work
