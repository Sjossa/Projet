
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
</head>
<body>
    <header>
        <?php include_once "../../header.php"; ?>
    </header>

    <main class="container-fluid fs-5">
        <h1 class="text-center">Les different modification de texte</h1>
        <div class="row">
            <div class="col-5 border border-black ms-2">
                <h3 class="text-muted">Les couleur</h3>
                <p>En utilisant Bootstrap, il est possible de modifier la couleur du texte et du fond en utilisant les préfixes 'text' et 'bg', puis la couleur voulue.Avant toute chose, il est essentiel de comprendre les couleurs que Bootstrap a mises en place.</p>
                <p>Voici les différents couleur que bootstrap propose:</p>
                <ul class=" border border-danger">
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
                <p>Par exemple, en utilisant la classe 'text-primary', <span class="text-primary">le texte est en bleu</span>.</p>
                <p>Pour modifier le fond, on utilise le préfixe 'bg' au lieu de 'text', ce qui donne 'bg-primary' : <span class="bg-primary text-white">le fond sera en bleu</span>.</p>
            </div>
            <div class="col col-3">
                <div id="editor" class="w-100 h-100">entre votre code ici...</div>
            </div>
            <div class="col-3">
                <button onclick="runCode()">Exécuter le Code</button>
                <h4>Zone de texte</h4>
                <div id="output" class="w-100 h-100">Le résultat s'affichera ici...</div>
            </div>
        </div>
        <hr>
        <div class="row">
            <h3 class="text-secondary">les Tailles</h3>
    <div class="col col-6   border border-black">
    <p>Après avoir vu comment changer les couleurs du texte et du fond, nous allons maintenant voir comment modifier la taille  de votre texte.
    en premier lieu ils nous faut connaître leur préfixe qui  sont '<em class="fw-bold">fs</em> pour la taille du texte et 'display' pour la taille des titre  et '<em class="fw-bold">fw</em>' pour le poids.</p>
    <div class="col bd-example">
        <p>les suffixe qui accompagne les different préfixe de taille sont les nombre de '1' à '5':</p>
        <div class="row">
        <div class="col col-4">
        <ul>
            <li >ceci est un texte avec un mot de taille :<span class="fs-1"> fs-1</span></li>
            <li>ceci est un texte avec un mot de taille : <span class="fs-2"> fs-2</span></li>
            <li>ceci est un texte avec un mot de taille : <span class="fs-3">fs-3</span> </li>
            <li>ceci est un texte avec un mot de taille : <span class="fs-4">fs-4</span> </li>
            <li>ceci est un texte avec un mot de taille : <span class="fs-5">fs-5</span> </li>
            <li> titre de taille <span class="display-1">display-1</span></li>
            <li> titre de taille <span class="display-2">display-2</span></li>
            <li> titre de taille <span class="display-3">display-3</span></li>
            <li> titre de taille <span class="display-4">display-4</span></li>
            <li> titre de taille <span class="display-5">display-5</span></li>
        </ul>
        
        </div>
    </div>
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
                        }}
</script>
</body>
</html>
