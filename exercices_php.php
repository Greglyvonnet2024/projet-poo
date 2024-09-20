<?php
/*
Exercices sur les tableaux
Tableau simple : Créez un tableau contenant les noms de 5 villes, puis affichez-les avec une boucle.
*/

echo 'Exerice 1'; 
echo '<pre>';
echo '<br>';


$villes = ['Paris', 'Montreal', 'San Sebastian', 'Split'];

foreach ($villes as $v ) {
    var_dump($v);
}


echo'<br>';
echo '</pre>';



/*
Tableau associatif : Créez un tableau associatif avec les clés étant des noms de pays et les valeurs étant leurs capitales, puis affichez chaque pays et sa capitale.
*/

echo 'Exerice 2'; 
echo '<pre>';
echo '<br>';


$capitales = [ 'france' => 'paris',
'italie' => 'rome',
'portugal' =>'lisbonne',
'espagne' =>'madrid',
'royaume-uni'=> 'Londres',
];

var_dump ($capitales);


echo '<br>';
echo '</pre>';


/*
Ajout dans un tableau : Créez un tableau vide et ajoutez-y 5 prénoms en utilisant une boucle.
*/

echo 'Exerice 3';
echo '<pre>';
echo '<br>';

// $prenoms = [];
//     for( $i = 0; $i <5; $i++ ) {
// $prenoms = 'prenoms' . $i +1;
// }







/*
Accès à un élément de tableau : Créez un tableau avec les jours de la semaine et affichez le troisième jour.
*/

echo 'Exerice 4';
echo '<pre>';
echo '<br>';


$jours = ['lundi', 'mardi','mercredi','jeudi','vendredi','samedi','dimanche'];

var_dump ($jours['3']);


echo '<br>';
echo '</pre>';


/*
Modification d’un élément dans un tableau : Modifiez le dernier élément d’un tableau de nombres pour qu’il devienne 0.
*/

echo 'Exerice 5';
echo '<pre>';
echo '<br>';


// $num = ["0",'1','2','3','4','5'];

// $remplace = $num ('6' => '0');

// var_dump($num);

echo '<br>';
echo '</pre>';

/*
Suppression d’un élément de tableau : Créez un tableau de 5 fruits, puis supprimez-en un fruit spécifique et affichez le tableau.
*/


echo 'Exerice 6';
echo '<pre>';
echo '<br>';

$fruits = ['raisins','poires', 'cerises','fraises','framboise'];

$remplace = $fruits [ 1 => 'mûres'];



echo '<br>';
echo '</pre>';



/*
Taille d'un tableau : Créez un tableau de 10 éléments aléatoires et affichez la taille du tableau.
*/


echo 'Exerice 7';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';

/*
Tableaux imbriqués : Créez un tableau qui contient trois autres tableaux de noms d’animaux par catégorie (mammifères, oiseaux, poissons), puis affichez tous les animaux avec une boucle.
*/


echo 'Exerice 8';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';


/*
Recherche dans un tableau : Créez un tableau contenant des nombres, puis vérifiez si un nombre spécifique est présent dans ce tableau.
*/


echo 'Exerice 9';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';


/*
Tri d’un tableau : Créez un tableau de nombres non triés, puis triez-le en ordre croissant et affichez-le.
*/


echo 'Exerice 10';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';


/*
Exercices sur les boucles
Boucle for : Utilisez une boucle for pour afficher les nombres de 1 à 10.

Boucle while : Créez une boucle while qui affiche les nombres de 1 à 10.

Boucle foreach sur tableau associatif : Créez un tableau associatif de pays et capitales, puis utilisez une boucle foreach pour afficher chaque pays avec sa capitale.
*/


echo 'Exerice 11';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';


/*
Somme avec boucle for : Créez un tableau de nombres, puis calculez et affichez la somme des éléments à l’aide d’une boucle for.
*/


echo 'Exerice 12';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';



/*
Nombre pair/impair avec boucle while : Créez un compteur dans une boucle while qui affiche si chaque nombre de 1 à 10 est pair ou impair.

*/


echo 'Exerice 13';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';



/*
Table de multiplication : Créez un programme qui affiche la table de multiplication de 7 en utilisant une boucle for.
*/


echo 'Exerice 14';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';



/*
Boucle imbriquée : Utilisez deux boucles for imbriquées pour créer une grille de 5x5 avec des étoiles (*).
*/


echo 'Exerice 15';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';


/*
Éclatement d'un tableau avec foreach : Créez un tableau de prénoms et utilisez une boucle foreach pour afficher chaque prénom en majuscules.
*/


echo 'Exerice 16';
echo '<pre>';
echo '<br>';




echo '<br>';
echo '</pre>';


/*
Boucle avec condition break : Créez une boucle for qui affiche les nombres de 1 à 20 mais s’arrête dès qu’un nombre supérieur à 15 est rencontré.
*/





/*
Boucle avec condition continue : Créez une boucle qui affiche les nombres de 1 à 10 sauf le 5, en utilisant continue.
*/

/*
Exercices sur les fonctions
Fonction simple : Créez une fonction bonjour() qui affiche "Bonjour tout le monde !" et appelez-la.
*/

/*
Fonction avec un paramètre : Créez une fonction qui prend un nom en paramètre et affiche "Bonjour [nom]".
*/

/*
Fonction avec plusieurs paramètres : Créez une fonction qui prend deux nombres et retourne leur somme.
*/

/*
Retourner une valeur : Créez une fonction qui prend un nombre et retourne le carré de ce nombre.
*/

/*
Fonction avec condition : Créez une fonction qui prend un nombre et retourne "Pair" si le nombre est pair, et "Impair" sinon.
*/

/*
Utilisation de valeurs par défaut : Créez une fonction qui prend deux paramètres : un nom et un âge, avec un âge par défaut de 18. Affichez une phrase comme "Nom: [nom], Âge: [âge]".
*/

/*
Passage de tableau à une fonction : Créez une fonction qui prend un tableau de nombres et retourne la somme de ses éléments.
*/

/*
Fonction avec boucle : Créez une fonction qui prend un tableau de chaînes de caractères et retourne la chaîne la plus longue.
*/

/*
Fonction anonymes (closures) : Créez une fonction anonyme qui prend deux nombres et retourne leur produit.
*/

/*
Exercices sur les classes et objets (POO)
Instanciation et modificateurs d’accès
Classe simple : Créez une classe Voiture avec une propriété marque, puis créez une instance de cette classe.
*/

/*
Classe avec constructeur : Ajoutez un constructeur à la classe Voiture pour initialiser la marque lors de l’instanciation.
*/

/*
Propriétés privées : Modifiez la propriété marque de Voiture pour qu’elle soit private et ajoutez des méthodes getter et setter.
*/

/*
Méthodes publiques : Ajoutez une méthode publique demarrer() à la classe Voiture qui affiche un message indiquant que la voiture démarre.
*/

/*
Méthode privée : Ajoutez une méthode privée verificationMoteur() à la classe Voiture et appelez-la à l’intérieur de la méthode publique demarrer().
*/

/*
Propriétés protégées : Créez une propriété protégée dans une classe Animal, puis créez une sous-classe Chien et accédez à cette propriété depuis la sous-classe.
*/

/*
Héritage
Classe parent et enfant : Créez une classe Animal avec une méthode parler(), puis créez une sous-classe Chien qui redéfinit la méthode parler() pour afficher "Le chien aboie".
*/

/*
Constructeur avec héritage : Créez une classe Personne avec un constructeur prenant un nom. Créez une sous-classe Etudiant qui hérite de Personne et ajoute une propriété école.
*/

/*
Appel au constructeur parent : Créez une classe Employe qui hérite de Personne et utilise le constructeur parent pour initialiser le nom tout en ajoutant une méthode travailler().
*/






/*
Polymorphisme avec héritage : Créez une classe Vehicule avec une méthode demarrer(), puis créez deux sous-classes Voiture et Moto qui redéfinissent cette méthode avec des messages spécifiques pour chaque type de véhicule.

*/




?>