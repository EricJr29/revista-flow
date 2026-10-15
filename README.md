# 📰 Revista Flow — Portal de Conteúdo e Revista Eletrônica Escolar

O **Revista Flow** é uma plataforma web completa desenvolvida para ambiente acadêmico, projetada para funcionar como um portal de notícias, artigos e publicações estudantis. O sistema conta com fluxos completos de submissão, moderação, revisão, engajamento social (curtidas e comentários) e controle hierárquico de acesso.

---

## 🎯 Sobre o Projeto

Criado inicialmente como um projeto educacional robusto, o sistema resolve a necessidade de centralizar a produção de conteúdos dos alunos (como reportagens sobre artes, matemática, história, inglês e atualidades), permitindo que os professores e administradores façam a curadoria, revisão e publicação dos materiais de forma organizada e segura.

---

## 👥 Níveis de Acesso e Permissões (RBAC)

O sistema possui uma tabela dedicada de permissões que gerencia rigidamente o que cada perfil de usuário pode fazer na plataforma:

| Perfil | Postar | Editar | Solicitar Post | Editar Usuários | Visionar Post |
| :--- | :---: | :---: | :---: | :---: | :---: |
| **Visitante** | ❌ N | ❌ N | ❌ N | ❌ N | ❌ N |
| **Aluno** | ❌ N | ❌ N | ✔️ S | ❌ N | ❌ N |
| **Professor** | ✔️ S | ✔️ S | ❌ N | ❌ N | ✔️ S |
| **Admin** | ✔️ S | ✔️ S | ❌ N | ✔️ S | ❌ N |

---

## ⚙️ Funcionalidades Principais

* **📝 Submissão e Solicitação de Posts:** Os alunos podem redigir e enviar seus artigos (como reportagens sobre Frida Kahlo, desastres naturais, matemática financeira, etc.) para avaliação.
* **🔍 Moderação e Revisão:** Os posts passam por status dinâmicos (`pendente`, `aprovado`, `rejeitado`, `revisar`) permitindo que professores e administradores filtrem e corrijam o conteúdo antes de ir ao ar.
* **❤️ Engajamento Social:** Sistema integrado de curtidas (`likes`)[cite: 1] e comentários interativos onde os usuários podem interagir com as postagens da comunidade escolar.
* **📢 Quadro de Avisos:** Módulo para fixar comunicados importantes da escola ou da redação da revista com data de expiração.
* **🖼️ Gestão de Mídia:** Suporte a imagens ilustrativas associadas diretamente aos artigos publicados.

---

## 🗄️ Arquitetura do Banco de Dados (MySQL)

O sistema roda sobre um banco de dados relacional bem estruturado (`revista_flow`) composto por tabelas essenciais:

1. **`usuarios` / `permissoes`:** Gerenciamento de identidades e níveis de acesso granular.
2. **`posts` (Solicitações):** Armazena o conteúdo completo das reportagens, títulos, subtítulos, temas, imagens, grupos responsáveis e o status de moderação.
3. **`comentarios`:** Registro de interações textuais vinculadas aos posts e autores.
4. **`likes`:** Tabela relacional de curtidas entre usuários e publicações[cite: 1].
5. **`avisos`:** Mural de recados e avisos institucionais com controle de validade.

---

## 🛠️ Tecnologias Utilizadas

* **Backend:** PHP (orientado a banco de dados e manipulação de requisições).
* **Banco de Dados:** MySQL / MariaDB (gerenciado via phpMyAdmin).
* **Frontend:** HTML5, CSS3 e JavaScript para uma interface responsiva e dinâmica.
* **Servidor Local:** Compatível com ambientes como XAMPP, WampServer ou Docker.

---

## 🚀 Como Executar o Projeto Localmente

1. **Pré-requisitos:**
   * Ter um ambiente PHP instalado com suporte a MySQL (ex: XAMPP).

2. **Clone o repositório:**
   ```bash
   git clone [https://github.com/EricJr29/revista-flow.git](https://github.com/EricJr29/revista-flow.git)
