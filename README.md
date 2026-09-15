# 🔎 Verificador de Idade

Projeto desenvolvido em **PHP** que permite cadastrar um usuário informando seu nome e ano de nascimento. O sistema calcula a idade e verifica se o acesso será permitido ou não.

## 📌 Sobre o projeto

O sistema possui um formulário onde o usuário informa:

* **Nome**
* **Ano de nascimento**

Após o envio, o PHP calcula a idade com base no ano atual e verifica a condição de acesso.

## ⚙️ Funcionamento

O sistema funciona da seguinte maneira:

1. O usuário informa seu nome.
2. Informa seu ano de nascimento.
3. Clica no botão **Cadastrar**.
4. O sistema calcula sua idade.
5. Se a idade for **menor ou igual a 18 anos**, o acesso é permitido.
6. Os dados do usuário são registrados no arquivo `log_acessos.txt`.
7. Caso a idade seja maior que 18 anos, o acesso não é permitido.

## 💻 Tecnologias utilizadas

* **PHP**
* **HTML**
* Arquivo de texto (`.txt`) para armazenamento dos registros

## 📂 Estrutura do projeto

```text
📁 projeto
├── 5a_desafio1.php
└── log_acessos.txt
```

O arquivo `log_acessos.txt` é utilizado para armazenar o nome e o ano de nascimento das pessoas cadastradas
