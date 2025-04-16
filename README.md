
Criar Controller
```
php artisan make:controller CourseController
```

Criar view
```
php artisan make:view nome
```
```
php artisan make:view courses/shows

Executar as migration
```
php artisan migrate
```
Criar Models
```
php artisan make:model User
```
Criar um arquivo request com validações
```
```
php artisan make:request UserRequest
```
Sistema de Gerenciamento de Participantes de Evento Corporativo
Este projeto foi desenvolvido com o objetivo de atender às necessidades do setor de Recursos Humanos, representado por Maria Beatriz, responsável pelo controle dos colaboradores participantes de um evento corporativo promovido pela empresa.

A aplicação possibilita o cadastro, visualização, edição e exclusão de participantes, garantindo uma interface intuitiva e segura, com acesso restrito a usuários autenticados.

---

🎯 Objetivos da Aplicação
Permitir o cadastro de colaboradores participantes do evento.
Exibir listagens detalhadas com todos os dados cadastrados.
Possibilitar a edição e atualização de informações dos colaboradores.
Oferecer a funcionalidade de exclusão de registros quando necessário.
Restringir o acesso às funcionalidades somente a usuários autenticados por meio de e-mail e senha.

---

🛠️ Tecnologias Utilizadas
Laravel 12 — Framework PHP para desenvolvimento web
Laravel Breeze — Sistema simples e leve de autenticação
MySQL (ou outro banco de dados relacional) — Armazenamento de dados

---

📋 Campos do Formulário de Cadastro
O cadastro de cada colaborador deve conter os seguintes dados:

Nome completo (campo obrigatório)
Setor (seleção entre: Tecnologia, Administrativo, Projeto)
Cidade (campo de seleção com todas as capitais brasileiras)
Data e hora de check-in (registro obrigatório da chegada ao evento)

