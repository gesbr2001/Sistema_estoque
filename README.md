# 📦 Sistema de Estoque & Requisições (GESBR)

Este projeto é um sistema de gerenciamento de estoque desenvolvido com **CodeIgniter 4**, rodando em um ambiente profissional isolado com **Docker**. Esta arquitetura resolve conflitos comuns de portas (como o erro de PID 4 do Windows) e garante que o sistema funcione da mesma forma em qualquer computador, seja na empresa ou em casa.

---

## 🚀 Tecnologias e Ambiente

* **PHP 8.2 (Apache)**: Configurado especificamente para as necessidades do CI4.
* **MySQL 8.0**: Banco de dados relacional para persistência de dados.
* **phpMyAdmin**: Interface web para gerenciamento visual do banco de dados.
* **Docker & Docker Compose**: Orquestração completa do ambiente.

---

## 🛠️ Como Rodar o Projeto

Siga estes passos sempre que baixar o projeto em uma nova máquina para garantir que tudo suba corretamente:

### 1. Clonar e Acessar
```bash
git clone [https://github.com/gesbr2001/Sistema_estoque.git](https://github.com/gesbr2001/Sistema_estoque.git)
cd Sistema_estoque
```
###2. Configurar o arquivo .env
O arquivo .env contém as credenciais de conexão. Certifique-se de que ele está configurado para o ambiente Docker:
```bash
database.default.hostname = db
database.default.database = sistema_estoque
database.default.username = root
database.default.password = root
database.default.DBDriver = MySQLi
database.default.port = 3306
```

###3. Subir os Containers
```bash
docker compose up -d --build
```

###4. Finalizar Configuração (Apenas na primeira vez)
Execute os comandos abaixo para preparar as dependências e o banco de dados:
```Bash
# Instalar dependências do Composer
docker exec -it ci4_app composer install

# Rodar as Migrations (Criar as tabelas automaticamente)
docker exec -it ci4_app php spark migrate

# Dar permissão de escrita para logs e cache
docker exec -it ci4_app chmod -R 777 writable
```

####🔗 Acessos Locais
Serviço	        Endereço	                Credenciais
Sistema (Web)	  http://localhost:8080	    (Tela de Login)
phpMyAdmin	    http://localhost:8081	    Servidor: db / User: root / Pass: root


#####📝 Comandos Úteis do Docker
No dia a dia, você usará estes comandos no terminal da pasta do projeto:
Parar o sistema:
```docker compose stop```
Reiniciar tudo:
```docker compose restart```
Ver logs em tempo real: 
```docker logs -f ci4_app```
Limpar volumes e resetar banco:
```docker compose down -v```