<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Sobre o Laravel

Laravel é um framework de aplicações web com sintaxe expressiva e elegante. Acreditamos que o desenvolvimento deve ser uma experiência agradável e criativa para ser verdadeiramente gratificante. O Laravel simplifica o desenvolvimento facilitando tarefas comuns usadas em muitos projetos da web.

O Laravel é acessível, poderoso e fornece as ferramentas necessárias para aplicativos grandes e robustos.

## API 

Esta é uma API RESTfull básica em 	PHP para gerenciamento de tarefas.
Ela tem a capacidade de criar, listar, obter detalhes, atualizar os dados e excluir uma tarefa. 
Ela foi desenvolvida em PHP na versão 8.2.4 utilizando o Laravel 10.X.
O Laravel é um framework PHP e de código aberto, utilizado no desenvolvimento de sistemas para web. Algumas de suas principais características são permitir a escrita de um código mais simples e legível, e suporte a recursos avançados que agilizam o processo de desenvolvimento. 
Para servidor, foi utilizado o Apache e para banco de dados, MySQL.  

----

### GET ALL
`localhost:8000/api/tasks `

----
### GET BY ID
`localhost:8000/api/tasks/{id} `

404

| Nome  | Descrição  | 
| :------------ |:---------------:| 
|  invalidId   | Task não encontrada | 

----
### POST

`localhost:8000/api/tasks `

```javascript
{
"title": "",
"description": "",
"status": ""
}
```

201

|     Field         |Tipo                       |Descrição                 |
|----------------|-------------------------------|-----------------------------|
|title|String          |'Título da Tarefa'            |
|description        |String            |"Descrição da Tarefa"            |
|status          |String|"Concluída" ou "Não concluída"|


400

| Nome  | Descrição  | 
| :------------ |:---------------:| 
| errors    | Campos Inválidos| 

----

### PUT

`localhost:8000/api/tasks/{id} `

```javascript
{
"title": "",
"description": "",
"status": ""
}

```

201

|     Field         |Tipo                       |Descrição                 |
|----------------|-------------------------------|-----------------------------|
|title|String          |'Título da Tarefa'            |
|description        |String            |"Descrição da Tarefa"            |
|status          |String|"Concluída" ou "Não Concluída"|

400

| Nome  | Descrição  | 
| :------------ |:---------------:| 
| errors    | Campos Inválidos| 

----
### DELETE

`localhost:8000/api/tasks/{id} `

404

| Nome  | Descrição  | 
| :------------ |:---------------:| 
|  invalidId   | Task não encontrada | 


