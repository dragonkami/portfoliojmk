<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css?v=<?= rand() ?>">
	<title>Page de présentation</title>
	<!-- Ajouter ici les liens vers les fichiers CSS et JS -->
</head>
<body>

<?php include 'navbar.php'; ?>

<h1 id="Presentation">Présentation</h1>

<p>
Je m’appelle Jean-Marie Kiangani, j’ai 20 ans et je suis développeur web et mobile.</br>
Je suis actuellement étudiant à l'école INSTA à Paris 5 en première année de BTS Services informatiques 
aux Organisations (BTS SIO) dans la spécialité de Solutions Logicielles et Applications Métier (SLAM). 
</p>

<p>
J’ai toujours été attiré par l’informatique et les nouvelles technologies.</br>
C’est tout naturellement que je me suis intéressé vers ces études, en effectuant mes 2 années d’études en Bac pro Systèmes numériques option C réseaux informatiques et systèmes communicants (RISC),</br>
et que ensuite je me dirige vers une BTS SIO option SLAM.
</p>


<h1 id="Service">Services</h1>

<p>
DÉVELOPPEMENT WEB
Création de site web | Application
sur-mesure repondant aux besoins des clients
</p>

<p>
MAINTENANCE WEB
Gestion d'hébérgement, garanti d'accessibilité, intégration régulière des mises à jour de sécurité
</p>

<p>
ACCOMPAGNEMENT
Je gère entièrement les projets en assurant une communication constante
</p>


<h1 id="Competences">Compétences</h1>

<p>
HTML5 / CSS3 
PHP
JAVASCRIPT  
SQL
MYSQL
SYMFONY  
PHASER 
</p>

<h1 id="Cv">Curriculum Vitae</h1>

<a href="#">Télecharger mon cv</a>

<h1 id="Contact">Contact</h1>

<p>Paris</p>
<p>Tel : 06 05 67 03 14</p>
<p>jeremykiangani@gmail.com</p>

<form action="" method="post">

    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>

    <div>
        <label for="mail">E-Mail&nbsp; :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    
    <div>
        <label for="mail">Sujet :</label>
        <input type="sujet" id="sujet" name="user_sujet">
    </div>

    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>

</form>

<!-- Ajouter ici le code JS -->

</body>
</html>