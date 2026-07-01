<?php

// 1 

$categories = [

   0 =>      [
            "code" => "1234",
            "nom" => "categorie0",
            "produits" => [
                  0 => [
                    "nom" => "produit1",
                    "reference" => "reference1",
                    "prix" => 1500,
                    "quantite" => 5 
                  ],
                  1 => [
                    "nom" => "produit2",
                    "reference" => "reference2",
                    "prix" => 2500,
                    "quantite" => 3 
                  ]
            ]
         ],
   1 =>      [
            "code" => "2222",
            "nom" => "categorie1",
            "produits" => []
         ]
];



// 2

 function afficheCategorieSansProduit(array $categories): void{
    foreach ($categories as  $categorie ) {
        if (empty($categorie["produits"])) {
            echo $categorie["nom"]."\n";
        }
    }
 }
 afficheCategorieSansProduit($categories);