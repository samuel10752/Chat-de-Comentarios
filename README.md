# Chat de Comentários

Este é um projeto simples de chat de comentários que permite aos usuários adicionar e visualizar comentários em tempo real. A aplicação utiliza **PHP** para o backend e **JavaScript** para o frontend, armazenando os comentários em um arquivo de texto.

---

## 🛠️ Funcionalidades

- **Adição de Comentários**: Usuários podem adicionar comentários por meio de um formulário.
- **Exibição em Tempo Real**: Comentários enviados são exibidos na página principal sem necessidade de recarregar.
- **Armazenamento Persistente**: Os comentários são armazenados em um arquivo de texto.

---

## 📋 Pré-requisitos

- Um servidor web com suporte a **PHP** (ex.: XAMPP, WAMP ou outro).
- Navegador web para acessar a aplicação.

---

## 🚀 Como executar

1. **Clone este repositório** para o diretório do servidor web:
   ```bash
   git clone https://github.com/samuel10752/Chat-de-Comentarios.git
2. **Configure as permissões de arquivo** Certifique-se de que o arquivo comments.txt tem permissão de escrita para o servidor:
   ```bash
   chmod 666 comments.txt
3. **Inicie o servidor web** Certifique-se de que o Apache está em execução.
4. **Acesse a aplicação:** Abra o navegador e vá para:
   ```bash
   http://localhost/Chat-de-Comentarios

---

📂 Estrutura do Projeto

- **index.php**: Página principal que exibe os comentários existentes e fornece um formulário para adicionar novos.
- **add_comment.php**: Script responsável por processar e armazenar os novos comentários.
- **get_comments.php**: Script para recuperar e exibir os comentários armazenados.
- **comments.txt**: Arquivo de texto onde os comentários são persistidos.
- **icons/**: Contém ícones utilizados na interface da aplicação.
- **lib/**: Pasta destinada a bibliotecas ou scripts auxiliares utilizados pelo projeto.

---
📚 Exemplo de Uso
1. **Adição de Comentários:**

- Insira um comentário no campo do formulário.
- Clique no botão "Enviar".
- O comentário será exibido imediatamente na lista de comentários.
2. **Visualização de Comentários:**

- Todos os comentários enviados são exibidos na página principal.
  
---

🔮 Melhorias Futuras
- **Validação de Entrada:**

- Implementar validações para evitar comentários maliciosos ou mensagens vazias.

- **Persistência com Banco de Dados:**

- Migrar o armazenamento de comments.txt para um banco de dados relacional, como MySQL ou SQLite.
  
- **Aprimoramento da Interface:**

- Melhorar o design para torná-lo mais moderno e responsivo.

- **Notificações em Tempo Real:**

- Implementar tecnologias como WebSocket para exibição instantânea de novos comentários.

---

📝 Licença
Este projeto está sob a licença MIT. Consulte o arquivo LICENSE para mais detalhes.


---

🤝 **Contribuições**
Contribuições são bem-vindas! Para colaborar:

- Crie um fork do repositório.
- Envie um pull request com as suas alterações

---


Se precisar de ajustes ou um estilo diferente, é só avisar! 🚀




   
