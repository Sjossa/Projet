
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <style>
        iframe{height: auto;}
    </style>

</head>
<body>
    <header>
        <?php include_once "../../header.php"; ?>
    </header>

    <main class="container-fluid fs-5">
        <h1 class="text-center">Les different modification de texte</h1>
        <div class="row">
            <div class="col-xl-6">
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
            <div class="col col-12 col-xl-6"><iframe  style="width: 100%;" scrolling="no" title="Untitled" src="https://codepen.io/Sjossa/embed/mdZygja?default-tab=html&editable=true&theme-id=dark" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true">
  See the Pen <a href="https://codepen.io/Sjossa/pen/mdZygja">
  Untitled</a> by Johnny (<a href="https://codepen.io/Sjossa">@Sjossa</a>)
  on <a href="https://codepen.io">CodePen</a>.
</iframe></div>
        
        
            

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
