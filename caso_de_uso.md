# Documentação de Caso de Uso

## 1. Nome do sistema

Sistema de Gestão de Estoque para Mercado

---

## 2. Objetivo

O sistema tem como objetivo permitir que um funcionário controle os produtos disponíveis no estoque de um mercado.

O funcionário pode cadastrar, visualizar, editar e excluir produtos.

---

## 3. Ator

### Funcionário

O funcionário é o principal ator do sistema.

Ele é responsável por realizar as operações de gerenciamento dos produtos.

---

## 4. Casos de Uso

O funcionário pode realizar as seguintes ações:

- Cadastrar produto
- Visualizar produtos
- Editar produto
- Excluir produto

---

## 5. Cadastrar Produto

### Ator
Funcionário

### Objetivo
Cadastrar um novo produto no estoque.

### Fluxo principal

1. O funcionário acessa a opção "Cadastrar produto".
2. O sistema apresenta o formulário.
3. O funcionário informa:
   - Nome
   - Categoria
   - Descrição
   - Preço
   - Quantidade em estoque
   - Data de validade
4. O funcionário envia o formulário.
5. O sistema verifica se os campos foram preenchidos.
6. O sistema cadastra o produto no banco de dados.
7. O sistema retorna para a lista de produtos.

### Resultado

O novo produto fica disponível no estoque.

---

## 6. Visualizar Produtos

### Ator
Funcionário

### Objetivo
Visualizar os produtos cadastrados no sistema.

### Fluxo principal

1. O funcionário acessa a página inicial.
2. O sistema consulta os produtos cadastrados.
3. O sistema apresenta os produtos em uma tabela.
4. O funcionário pode visualizar as informações dos produtos.

### Resultado

Os produtos cadastrados são apresentados na tela.

---

## 7. Editar Produto

### Ator
Funcionário

### Objetivo
Alterar as informações de um produto já cadastrado.

### Fluxo principal

1. O funcionário acessa a lista de produtos.
2. O funcionário seleciona a opção "Editar".
3. O sistema identifica o produto pelo ID.
4. O sistema apresenta os dados atuais do produto.
5. O funcionário altera as informações desejadas.
6. O funcionário salva as alterações.
7. O sistema atualiza os dados no banco de dados.
8. O sistema retorna para a lista de produtos.

### Resultado

As informações do produto são atualizadas.

---

## 8. Excluir Produto

### Ator
Funcionário

### Objetivo
Remover um produto do estoque.

### Fluxo principal

1. O funcionário acessa a lista de produtos.
2. O funcionário seleciona a opção "Excluir".
3. O sistema solicita uma confirmação.
4. O funcionário confirma a exclusão.
5. O sistema exclui o produto do banco de dados.
6. O sistema retorna para a lista de produtos.

### Resultado

O produto é removido do sistema.

---