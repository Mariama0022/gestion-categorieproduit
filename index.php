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

  foreach ($categories as  $categorie ) {
    if (empty($categorie["produits"])) {
         echo $categorie["nom"]."\n";
    }
 }

  // 3

    

    $codeIsValid = true;
    
   do { 
        
        $code = readline("saisir le code :");
        if (empty($code)) {
            echo "le code est obligatoire \n";
             $codeIsValid = false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["code"]) === $code) {
                $codeIsValid = false;
                echo "le code existe deja ...\n"; 
         }
       }  
}
        


    } while (!$codeIsValid);
    
     $nomIsValid = true;
  do { 
        
        $nom = readline("saisir le nom : ");
        if (empty($nom)) {
            echo "le nom est obligatoire";
             $nomIsValid= false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["nom"]) === $nom) {
                $nomIsValid = false;
                echo "le nom existe deja ..."; 
         }
       }  
}
    } while (!$nomIsValid);



    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" => []
         ];

         $categories[] = $categorie;
