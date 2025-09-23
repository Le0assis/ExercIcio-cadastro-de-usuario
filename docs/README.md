>Leoanrdo Ribeiro de Assis
>1995764

### Como rodar o projeto

Para executar o projeto, você precisa de um servidor web local com PHP. Depois de configurar o servidor, coloque os arquivos do projeto no diretório raiz. O projeto pode ser acessado pelo seu navegador em: 

`http://localhost/ExercIcio-cadastro-de-usuario/src/index.php`.

---

### Funcionalidades implementadas

O sistema de gerenciamento de usuários tem as seguintes funcionalidades:

* **Cadastro de Usuário**: Cadastra um novo usuário, validando se o e-mail é único e o formato é válido. A senha deve ser forte, contendo no mínimo 8 caracteres, uma letra maiúscula e um número.
* **Login de Usuário**: Acessa a conta de um usuário após a validação do e-mail e da senha.
* **Redefinição de Senha**: Permite alterar a senha de um usuário existente, validando se a nova senha atende aos critérios de segurança.

---

### Casos de uso (cenários de teste)

Aqui estão cinco cenários de teste baseados no arquivo `index.php`:

#### 1. Cadastro de usuário com sucesso

* **Ação**: Cadastrar um usuário com dados válidos: 
    `registerUser('Eustaquio', 'eustaquio@gmail.com', 'Senhaforte1')`.
* **Resultado esperado**: O usuário é cadastrado com sucesso. O sistema deve retornar a mensagem: 
    `<p> usuário cadastrado com sucesso. </p>`.

#### 2. Cadastro de usuário com e-mail duplicado

* **Ação**: Tentar cadastrar um usuário com um e-mail já existente: 
    `registerUser('Maria Oliveira', 'eustaquio@gmail.com', 'Senha123')`.
* **Resultado esperado**: O cadastro falha porque o e-mail já está em uso. O sistema deve retornar a mensagem: 
    `<p> Email duplicado </p>`.

#### 3. Cadastro de usuário com e-mail inválido

* **Ação**: Tentar cadastrar um usuário com um e-mail sem formatação correta: 
    `registerUser('Pedro', 'pedro@@gmail.com', 'Senha123')`.
* **Resultado esperado**: O cadastro falha devido ao formato de e-mail inválido. O sistema deve retornar a mensagem: 
    `<p> Email invalido </p>`.

#### 4. Cadastro de usuário com senha inválida

* **Ação**: Tentar cadastrar um usuário com uma senha que não atende aos requisitos de segurança: 
    `registerUser('Maria Oliveira', 'maria@gmail.com', 'Senha123')`.
* **Resultado esperado**: O cadastro falha porque a senha é inválida. O sistema deve retornar a mensagem: 
    `<p> Senha invalida </p>`.

#### 5. Login com senha incorreta

* **Ação**: Tentar fazer login com o e-mail correto, mas a senha incorreta: 
    `login('maria@gmail.com', 'Errada123')`.
* **Resultado esperado**: O login falha devido à senha incorreta. O sistema deve retornar a mensagem: 
    `<p> Senha errada </p>`.
