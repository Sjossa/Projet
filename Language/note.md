<!-- 
# La structuration de base

### Balise d'ouverture

Pour commencer, nous devons mettre en place un conteneur principal où tout notre contenu sera organisé. Nous utilisons deux classes principales pour cela :

- **La classe "container"** : Cette classe permet à notre contenu d'être réactif, ce qui signifie qu'il s'ajuste automatiquement en fonction de la taille de l'écran grâce aux breakpoints définis par Bootstrap.
  
- **La classe "container-fluid"** : Cette classe assure que notre contenu occupe toujours 100% de la largeur disponible de la page, sans aucune marge fixe.

## Les Breakpoints

Les breakpoints sont des points de rupture où le design d'un site web réagit en modifiant sa mise en page pour s'adapter à différentes tailles d'écrans, comme celles des smartphones, tablettes et ordinateurs de bureau. Bootstrap utilise plusieurs breakpoints prédéfinis :

- **xs** : Pour les smartphones en mode portrait (<576px).
- **sm** : Pour les smartphones en mode paysage et les tablettes en mode portrait (576px - 768px).
- **md** : Par défaut, pour les tablettes en mode paysage et les ordinateurs portables (768px - 992px).
- **lg** : Pour les ordinateurs de bureau (992px - 1200px).
- **xl** : Pour les grands écrans d'ordinateurs de bureau (>1200px).
- **xxl** : Extrêmement grand (≥ 1320px) - Largeur maximale de 1320px.

Bootstrap utilise un système de grille composé de 12 colonnes, basé sur les propriétés de Flexbox. L'axe principal défini par Bootstrap est l'axe horizontal, où les lignes servent de conteneurs pour les colonnes. Pour créer une ligne, nous utilisons la classe `.row`, qui représente une ligne de contenu. Il est important de noter que les lignes `.row` peuveut etre  à l'intérieur de conteneurs (`.container` ou `.container-fluid`) mais ne dehors aussi . Les lignes agissent comme des conteneurs flexibles et peuvent accueillir jusqu'à 12 colonnes.

### Les ligne row et leurs enfants 

Pour personnaliser nos lignes, nous pouvons créer des enfants `.col` qui vont créer des colonnes personnalisées dans la ligne.

```html
<div class="container">
   <div class="row">
      <div class="col">Je</div>
      <div class="col">m'appelle</div>
      <div class="col">Johnny</div>
   </div>
</div>
```

Pour gérer la taille des colonnes dans une ligne `.row`, nous utilisons le système de grille de Bootstrap où le total des colonnes est toujours de 12. Chaque colonne peut être dimensionnée en utilisant des classes telles que `.col-X`, où "X" est un nombre de 1 à 12, indiquant la proportion de l'espace disponible sur les 12 colonnes que la colonne doit occuper.

Par exemple :

```html
<div class="container">
   <div class="row">
      <div class="col-5">Je</div>
      <div class="col-3">m'appelle</div>
      <div class="col-4">Johnny</div>
   </div>
</div>
```

Dans cet exemple, nous avons trois colonnes. La première colonne utilise `col-5`, ce qui signifie qu'elle occupe 5/12ème de l'espace disponible sur la ligne. La deuxième colonne utilise `col-3`, occupant ainsi 3/12ème de l'espace, et la troisième colonne utilise `col-4`, occupant 4/12ème de l'espace. Ensemble, ces colonnes totalisent 12/12ème. Si une colonne dépasse 12, elle revient à la ligne et emmène avec elle les colonnes suivantes.

Voici un exemple :

```html
<div class="container">
   <div class="row">
      <div class="col-5">Je</div>
      <div class="col-8">m'appelle</div>
      <div class="col-4">Johnny</div>
   </div>
</div>
``` 

Grâce aux breakpoints, nous pouvons décider de la taille que feront nos colonnes selon la taille de l'écran. Il faut d'abord utiliser :

- **.col-xs** : Très petit (< 576px) - Largeur maximale de 540px.
- **.col-sm** : Petit (≥ 576px) - Largeur maximale de 540px.
- **.col-md** : Moyen (≥ 768px) - Largeur maximale de 720px.
- **.col-lg** : Grand (≥ 992px) - Largeur maximale de 960px.
- **.col-xl** : Très grand (≥ 1200px) - Largeur maximale de 1140px.
- **.col-xxl** : Extrêmement grand (≥ 1320px) - Largeur maximale de 1320px.
- **.col-auto** : Ajuste la taille selon le contenu.

Ensuite, ajoute un nombre. Cela modifiera la colonne selon le breakpoint choisi. Sinon, elles agiront comme des colonnes normales.

exemple : 

```html
<div class="container">
   <div class="row">
      <div class="col-sm-">Je</div>
      <div class="col-lg-5">m'appelle</div>
      <div class="col-xl">Johnny</div>
   </div>
</div>
``` -->
 

### 

<!-- Pour aligner une colonne verticalement, on utilise soit : 

- **align-items-*** pour cibler chaque colonne.
- **align-self-*** pour cibler une seule colonne.

Pour aligner une colonne horizontalement, on utilise soit : 

- **justify-content-*** (* = start, center, end, around (équitablement), between (équitablement avec start, center, end)).

Pour supprimer les marges et les espacements, on utilise **.g-0**.

Pour forcer un retour à la ligne, on utilise la classe **.w-100** dans une div sans contenu.

Pour ordonner les classes, on peut se servir de **order** suivi d'un **nombre** ou des **breakpoints**.

Pour créer des lignes qui se suivent, on peut mettre des colonnes dans des colonnes.

Utiliser **.lead** pour faire ressortir le texte.

Pour le poids du texte :

- **.font-weight-lighter** pour un texte très fin.
- **.font-weight-light** pour un texte fin.
- **.font-weight-normal** pour un texte normal.
- **.font-weight-bold** pour un texte épais.
- **.font-weight-bolder** pour un texte très épais.

Pour le texte en minuscules et majuscules :

- **.text-lowercase** pour afficher un texte en minuscules.
- **.text-uppercase** pour afficher un texte en majuscules.
- **.text-capitalize** pour mettre en majuscules la première lettre de chaque mot.

Pour aligner le texte :

- **.text-left** pour aligner un texte à gauche.
- **.text-center** pour centrer un texte.
- **.text-right** pour aligner un texte à droite.
- **.text-justify** pour justifier un texte.

Dépassement de texte :

- **.text-truncate** pour couper le texte s'il est trop grand par rapport au conteneur.
- **.text-nowrap** pour autoriser le dépassement du texte du conteneur.

Pour afficher une barre de défilement dans un élément pre, on utilise **.pre-scrollable**.

Les couleurs de texte : 

- **.text-primary** : texte bleu ;
- **.text-secondary** : texte gris-bleu ;
- **.text-success** : texte vert ;
- **.text-danger** : texte rouge ;
- **.text-warning** : texte jaune ;
- **.text-info** : nuance de bleu ;
- **.text-light** : texte gris clair ;
- **.text-dark** : texte gris foncé ;
- **.text-body** : texte noir ;
- **.text-muted** : texte gris ;
- **.text-white** : texte blanc ;
- **.text-black-50** : texte noir semi-transparent ;
- **.text-white-50** : texte blanc semi-transparent.

Les couleurs de fond : 

- **.bg-primary**
- **.bg-secondary**
- **.bg-success**
- **.bg-danger**
- **.bg-warning**
- **.bg-info**
- **.bg-light**
- **.bg-dark**
- **.bg-white**
- **.bg-transparent**
- **.bg-primary** (lien).

Si on veut ajouter une couleur non définie par Bootstrap, on peut soit :

- Rajouter les styles manuellement (non recommandé).
- Ajouter de nouvelles classes (recommandé).
- Modifier le fichier Bootstrap (non recommandé).

**Définir la taille d'un élément :**

On peut définir la taille d'un élément soit par rapport à son parent :

- **.w-25** : l’élément a une largeur égale à 25% de celle de son parent.
- **.w-50** : l’élément a une largeur égale à 50% de celle de son parent.
- **.w-75** : l’élément a une largeur égale à 75% de celle de son parent.
- **.w-100** : l’élément a une largeur égale à celle de son parent.
- **.w-auto** : la largeur de l’élément est définie automatiquement.

Pour modifier la hauteur d’un élément, on utilise les classes correspondantes.

Ou par rapport au viewport :

- **.vw-100** : la largeur de l’élément est égale à celle du viewport.
- **.vh-100** : la hauteur de l’élément est égale à celle du viewport.
- **.min-vw-100** : la largeur minimale de l’élément est égale à celle du viewport.
- **.min-vh-100** : la hauteur minimale de l’élément est égale à celle du viewport.

**Les bordures :**

Pour les bordures normales, nous utilisons les classes :

- **.border** : crée la bordure par défaut.
- **.border-top**, **.border-end**, **.border-start**, **.border-bottom** : pour une bordure sur un côté spécifique de l'élément.

Pour supprimer certaines bordures, nous utilisons :

- **.border-0** : supprime toutes les bordures.
- **.border-top-0**, **.border-end-0**, **.border-bottom-0**, **.border-start-0** : supprime la bordure sur le côté spécifié.

Pour colorer la bordure, nous utilisons les classes de couleur vues précédemment.

Pour arrondir les bordures :

- Nous utilisons des classes telles que **.rounded**, **.rounded-top**, **.rounded-end**, **.rounded-bottom**, **.rounded-start**, **.rounded-circle**, **.rounded-pill**, **.rounded-0**.

Pour l'épaisseur et le style, cela nécessite généralement des styles personnalisés.

**Les marges intérieure et extérieure :**

Les marg

es sont écrites comme ceci : {type de marge}{le côté choisi}-{la taille voulue}.

Pour le type de marge, nous avons le choix entre m (margin) et p (padding).
Pour le côté choisi, nous avons t (top), b (bottom), s (right), e (left), x (droite et gauche), y (haut et bas). Si rien n'est spécifié, la marge s'ajustera automatiquement sur tous les côtés.
La taille peut être :

- 0 pour supprimer toutes les marges.
- 1 pour une marge de 0.25rem.
- 2 pour une marge de 0.5rem.
- 3 pour une marge de 1rem.
- 4 pour une marge de 1.5rem.
- 5 pour une marge de 3rem.

Pour centrer un conteneur au milieu, utilisez `mx-auto`.

Les element displays'ecrivent comme ceci d-{valeur} ou d-{breakpoint}-{valeur}
les valuer sont :
none
inline
block
inline-block
table
table-cell
table-row
flex
inline-flex

pour les element dit flex nous pouvons nesuite rajouter une autre class 

.flex-row :la valeur par défaut
.flex-row-reverse : l'inverse du défaut ne fesant commencer par la droite
.flex-collum: place les element en vertical
.flex-collum-reverse : son inverse qui commence parl e bas 
 
 nous pouvons aussi nousservir  des breakpoint comme .flex-{breakpoint}-*
 -->
