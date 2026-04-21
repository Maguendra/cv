# Devlog — CV en forme

## À faire
- [X] régler le github Actions pour une mise à jour automatique du site quand je commit
- [ ] Vérifier que la vidéo est sur alwaysdata et Push les derniers changements et tester la vidéo (voir si le lien fonctionne)


---


## [21-04-26] Titre de la session
### Ce qui a été fait
- travail sur l'historique git pour supprimer la vidéo, car ne peut pas être commiter
- ajout du lien pour la vidéo 

### Problèmes rencontrés
- impossible de commiter même avec git revert, car l'historique comprenait le fichier presentation.mp4

### Solution
- suppression de presentation.mp4 de l'historique git
--> commande : git filter-branch --tree-filter 'rm -f presentation.mp4' -- --all 2>&1
- nettoyage git objetcs après filter -branch
--> commande : git reflog expire --expire=now --all && git gc --prune=now --aggressive 2>&1
- Forcer le push de l'historique
--> commande : git push origin master --force 2>&1

### À faire

## [2026-04-19] Correction de cv_en_forme
### Ce qui a été fait
- maj cv_en_forme

### Problèmes rencontrés
- La bordure `border-top` des articles barrait le titre h2
### Solution
- Ajout de `background: #fff` sur `section article h2` pour masquer la ligne derrière le texte

---


## [YYYY-MM-DD] Titre de la session
### Ce qui a été fait
- 

### Problèmes rencontrés
- 

### Solution
- 

### À faire