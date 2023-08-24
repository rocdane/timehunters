# timehunters
Time Hunters [info](https://github.com/rocdane/timehunters)

## Description
Time Hunters est un projet qui a pour objectif l'implémentation d'un modèle de gestion de temps. Une prolongation de ce projet est la gestion de projet basé sur la méthode agile. Ce projet n'a pas pour objectif de répondre à tous les besoins en rapport avec la gestion des projets. Néanmoins, le projet permet une gestion optimal du temps basé sur la matrice de Eisenhower.

## Public
Ce projet peut aider tout type d'entrepreneur pour sa simplicité et fiabilité.

## Fonctionnalités
1. En tant que Utilisateur je crée un nouveau projet
2. En tant que Utilisateur, j'ajoute des objectifs à mon projet
3. En tant que Utilisateur, j'ajoute une tâche à mon objectif
4. En tant que Utilisateur, je planifie une tâche

## Concepts

```json
{
	"utilisateur":[
		"username":"string",
		"password":"string|crypto",
		"role":"string:candidat|employeur"
	],
	"profile":[
		"name":"string",
		"legacy":"string",
		"email":"string",
		"phone":"string",
		"address":"string",
		"owner":"utilisateur"
	],
	"project":[
		"title":"string",
		"description":"string",
		"created_at":"timestamp",
		"finished_at":"timestamp",
		"status":"string:TODO|PROGRESS|DONE",
		"author":"profile"
	],
	"milestone":[
		"objective":"string",
		"open_at":"timestamp",
		"close_at":"timestamp",
		"status":"string:TODO|PROGRESS|DONE",
		"project":"project"
	],
	"Task":[
		"title":"string",
		"description":"string",
		"priority":"boolean",
		"urgency":"boolean",
		"start_at":"timestamp",
		"end_at":"timestamp",
		"status":"string"
	]
}
```
