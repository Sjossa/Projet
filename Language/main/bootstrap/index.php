
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
</head>
<body>
<header>
<?php
include_once "../../header.php";
?>
</header>

<main class="container-fluid">
    <div class="row">
        <h1 class="text-center">Les different modification de texte</h1>
        <div class="col-6 mt-3">
            <h3 class="text-muted">Les couleur</h3>
            En utilisant Bootstrap,nous pouvons modifier la couleur du texte et le fond grâce aux préfixes 'text' et 'bg' suivis de la couleur voulue.
            nous devons d'abord connaître les couleur que bootstrap a implémenter les voici:
            <div class="col"> 
                <ul>
                    <li>Pour la couleur bleue, on utilise le suffixe <em class="text-primary">primary</em></li>
                    <li>Pour la couleur grise claire, on utilise le suffixe <em class="text-secondary">secondary</em></li>
                    <li>Pour la couleur verte, on utilise le suffixe <em class="text-success">success</em></li>
                    <li>Pour la couleur rouge, on utilise le suffixe <em class="text-danger">danger</em></li>
                    <li>Pour la couleur jaune/orange, on utilise le suffixe <em class="text-warning">warning</em></li>
                    <li>Pour la couleur cyan, on utilise le suffixe <em class="text-info">info</em></li>
                    <li>Pour la couleur blanche, on utilise le suffixe <em class="text-light bg-dark">light</em></li>
                    <li>Pour la couleur noire, on utilise le suffixe <em class="text-dark">dark</em></li>
                    <li>Pour la couleur bleue foncée, on utilise le suffixe <em class="text-body">body</em></li>
                    <li>Pour la couleur grise foncée, on utilise le suffixe <em class="text-muted">muted</em></li>
                    <li>Pour une couleur de lien, on utilise le suffixe <em class="text-link">link</em></li>
                </ul>
            </div>
            <div class="col">
                Par exemple, en utilisant la classe 'text-primary', le texte sera en bleu :
                <div class="col text-primary">le texte en bleu</div>
            </div>
            <div class="col">
                Pour modifier le fond, on utilise le préfixe 'bg' au lieu de 'text', ce qui donne 'bg-primary' :
                <div class="col bg-primary text-white">le fond sera en bleu</div>
            </div>
            <div class="col">a votre droite vous pourrez vous essayer a ces different préfixe</div>
        </div>
        <div class="col-6 mt-1">
            <h3>Pour vous entraînez :</h3>
            <div class="row">
            <div class="col col-6">
                <div id="editor" style="height: 400px; width: 100%;"></div>
                    <button onclick="runCode()">Exécuter le Code</button>
                </div>
                    <div class="col col-6"><pre id="output"></pre></div>
            </div>


        </div>
    </div>

<div class="row mt-3">
    <h3 class="text-secondary">les Tailles</h3>
    <div class="col col-6">
    <p>Après avoir vu comment changer les couleurs du texte et du fond, nous allons maintenant voir comment modifier la taille  de votre texte.
    en premier lieu ils nous faut connaître leur préfixe qui  sont '<em class="fw-bold">fs</em> pour la taille du texte et 'display' pour la taille des titre  et '<em class="fw-bold">fw</em>' pour le poids.</p>
    <div class="col bd-example">
        <p>les suffixe qui accompagne les different préfixe de taille sont les nombre de '1' à '5':</p>
        <div class="row">
        <div class="col col-6">
        <ul>
            <li class="fs-1">ceci est un texte avec un texte de taille fs-1</em></li>
            <li class="fs-2">ceci est un texte avec un texte de taille fs-2</em></li>
            <li class="fs-3">ceci est un texte avec un texte de taille fs-3</em></li>
            <li class="fs-4">ceci est un texte avec un texte de taille fs-4</em></li>
            <li class="fs-5">ceci est un texte avec un texte de taille fs-5</em></li>
        </ul>
            </div>
            <div class="col col-6 fs-5">
                <ul>
            <li> titre de taille <em class="display-1">display-1</em></li>
            <li> titre de taille <em class="display-2">display-2</em></li>
            <li> titre de taille <em class="display-3">display-3</em></li>
            <li> titre de taille <em class="display-4">display-4</em></li>
            <li> titre de taille <em class="display-5">display-5</em></li>
        </ul>
        </div>
        </div>
    </div>
    </div>
    <div class="col col-6">

    </div>

</div>


   
</main>


<script>
                var editor = ace.edit("editor");
                editor.setTheme("ace/theme/dracula");
                editor.session.setMode("ace/mode/html");

                    function runCode() {
                        var code = editor.getValue();
                        try {
                        document.getElementById('output').innerHTML = code;
                            } catch (error) {
                        document.getElementById('output').innerText = error;
                        }
                }

            </script>
</body>
</html>
