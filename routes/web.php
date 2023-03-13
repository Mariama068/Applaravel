<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;


// Premiere Méthode
// Route::get('/', function () {
//     $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
//     return view('base')->with("jours", $jours);
// });

// Route::get('/about', function () {
//     return view('pages/about')
//     ->with("prenom", "Modou")
//     ->with('nom', "Sarr");
// });


// Deuxieme Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->withPrenom("Gnoror")
//     ->withNom("Sarr");
// });


// Troisime Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom' => "Modou",
//         'nom' => "Sarr"
//     ]);
// });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });


//Route::get('/', function () {
   // $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
   // return view('base')->with("jours", $jours);
//});

Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/contact');
Route::view('/service', 'pages/service');



Route::get('/', function () {
    /* 🌴🌴🌴 Apprendre SQL Brute 🌴🌴🌴
     //Séléctionner la liste des articles
     $articles = DB::select('select * from articles');
     dd($articles);
     return viw('base');*/

    /* Séléctionner le premier article
     $article = DB::select('select * from articles')[0];
     dd($article);*/

    /* Séléctionner le premier article
     $article = DB::select('select * from articles limit 1');
     dd($article);*/

     /*A partir du 2em article, recuperer 1 articles
     $article = DB::select('select * from articles limit 1 offset 2');
     dd($article);*/

    /* Inserer un article : 1ere methode
     $ok = DB::insert("INSERT INTO articles
     values(null,:titre,:contenu,:etat,:date)", [
         'titre'=> 'Titre4',
        'contenu'=> 'Contenu4',
         'etat'=> 1,
         'date'=> date('Y-m-d H:i:s')
    ]);
     dd($ok);*/
   

    /* Inserer un article : 2eme methode

    $ok = DB::insert("INSERT INTO articles
    values(null, :titre, :contenu, :etat,  :date)", [
        'titre'=> 'Titre5',
        'contenu'=> 'Contenu5',
         'etat'=> 1,
         'date'=> date('Y-m-d H:i:s')
    
    ]);
    dd($ok);*/
     

     /* Inserer un article : 3eme methode

     $ok = DB::insert("INSERT INTO articles values(
        null, ?, ?, ?, ?)", [
       
       'titre'=> 'Titre6',
       'contenu'=> 'Contenu6',
        'etat'=> 0,
        'date'=> date('Y-m-d H:i:s')
    
    ]);
    dd($ok);*/
    


    // Modifier le titre du deuxieme article
    // $ok = DB::update("UPDATE articles SET titre='Titre 2 modifié' WHERE id =2");
     //dd($ok);

    // Supprimer l'article dont l'id =6
    // $ok = DB::delete("DELETE from articles WHERE id =6");
     //dd($ok);
    
     //selectionner tous les article 
      // 🌴🌴🌴 Apprendre Fluent Query Builder 🌴🌴🌴
   // $articles = DB::table('articles')->get(['contenu','titre']);
    // dd($article);

     // 🌴🌴🌴 Apprendre Fluent Query Builder 🌴🌴🌴
     /*Selection le premier article
    $article = DB::table('articles')->first();
     dd($article);*/

    /*Afficher le premier article
    $articles = DB::table('articles')->get(['id']);
     dd($article);*/

    /*Selectionner le titre du premier article
     $articles = DB::table('articles')->fisrt()->contenu;
     dd($article);*/
    
    /*Selectionner le titre du premier article
    $article = DB::table('articles')->first();
    dd($article->contenu);*/
   
    //Selectionner l'article qui a pour titre "Titr2"
   /* $article = DB::table('articles')->whereId(2)->get();
    $article = DB::table('articles')->where('id',2)->get();
    dd($article);*/

    /*Selectionner tout les articles dont leur id est >=2
    $article = DB::table('articles')->where('id','>=',2)->get();
    dd($article);*/

    /*Selectionner tout les articles dont leur id est >2
    $article = DB::table('articles')->where('id','>',2)->get();
    dd($article);*/

    /*Selectionner tout les articles dont leur id est !2
    $article = DB::table('articles')->where('id','!',2)->get();
    dd($article);*/

    //Selectionner l'article dont le titre est titre 2
    /* le contenu "contenu2" (Premier méthode)
    $article = DB::table('articles')->whereTitreAndContenu('Article2' ,'Contenu2')
    ->get();
    dd($article);*/

        //Selectionner l'article dont le titre est titre 2
    // le contenu "contenu2" (Premier méthode)
    /*$article = DB::table('articles')
    ->where('titre','Article2')
    ->where('contenu','Contenu2')
    ->get();
    dd($article);*/

    //Selectionner l'article dont le titre est titre 2 ou
     //le contenu "contenu2" (Premier méthode)
   /* $article = DB::table('articles')->whereTitreOrContenu('Article2' ,'Contenu2')
    ->get();
    dd($article);*/


    //Selectionner l'article dont le titre est titre 2 ou
    // le contenu "contenu2" (deuxiéme méthode)
    /*$article = DB::table('articles')
    ->where('titre','Article2')
    ->orwhere('contenu','Contenu2')
    ->get();
    dd($article);*/

    //Selectionner le deuxiéme article
    /*$article = DB::table('articles')->take(2)
    ->get();
    dd($article);*/

    //A partir du deuxiéme Selectionner 3 articles
    /*$article = DB::table('articles')
    ->where('id', '>', '2')
    ->take(3)
    ->get();*/

    //Selectionner tous les articles dans l'ordre ascendant
    /*$articles = DB::table('articles')->orderBy('titre','asc')->get();
    dd($articles);*/

    //Selectionner tous les articles dans l'ordre decendant
   /* $articles1 = DB::table('articles')->orderBy('titre','asc')->get();
    $articles2 = DB::table('articles')->orderBy('titre','desc')->get();
    dump($articles1);
    dd($articles2);*/

    //Selectionner tous les articles dont leur >2 
   /* $articles = DB::table('articles')->where('id', '>', '2')->orderBy('titre','asc')->get();
    dd($articles);

    //Afficher le nombre d'article
    $articles = DB::table('articles')->count();
    dd($articles);*/

    //Inserer deux articles (premiere méthode)
    /*$ok = DB::table('articles')->insert(
        [
            [ 
              'titre' => 'Titre 7',
              'contenu' => 'Contenu 7',
              'etat' => 0,
              'date' => date ('Y_m_d H:i:s'),
            ],
            [
                'titre' => 'Titre 8',
                'contenu' => 'Contenu 8',
                'etat' => 1,
                'date' => date ('Y_m_d H:i:s'),
            ] 
        ]
    );
    dd($ok);*/

    //Modifier le titre et le contenu de l'article dont l'id =2
   /* $ok = DB::table('articles')->whereId(2)->update(
        [ 
         'titre' => 'Article modifié',
         'contenu' => 'Contenu modifié',
        ]
   );
   dd($ok);*/

   // Suprimer l'article d'id 4
  /* $ok = DB::table('articles')->where('id', 4)->delete();
   dd($ok);
    return view('base');
});*/

//Apprendre Eloquoent (ORM)
//Recupere tous les etudiants
 /* $etudiants=Etudiant::get();
  dd($etudiants);*/

//Recuperer l'etudiant qui l'id 1
  /*$etudiants=Etudiant::find(1);
  dd($etudiants);*/

  //Recuperer le nom et le prenom l'etudiant qui a l'id 2
 /* $etudiants=Etudiant::whereId(2)->get(['nom', 'prenom']);
  dd($etudiants);*/

  //Recuperer le nom et le prenom de l'etudiant dont sont
  //prenom est different de "Modou" et sont age > 13
  /*$etudiants=Etudiant::where('prenom', '!=','Modou')
  ->where('age', '>',13)->get(['nom', 'prenom']);
  dd($etudiants);
 //REcuperer le nom du premiere etudiant
  $nomPremierEtudiant =Etudiant::first()->nom;
  dd($nomPremierEtudiantetudiant);*/

  //Ajouter un etudiant (Premier methode)
 /* $etudiant = new Etudiant();
  $etudiant->nom = "Fall";
  $etudiant->prenom = "Fatou";
  $etudiant->matricule = "101012";
  $etudiant->age = 18;
  $ok = $etudiant->save();
  dd($ok);*/

  //Ajouter un etudiant (deuxieme methode)
  /*$etudiant = new Etudiant(
  [
     'nom' => "Fall",
     'prenom' => "Ibrahim",
     'matricule' => "101014",
     'age' => 19,
  ]
  );
  $ok = $etudiant->save();
  dd($ok);*/

  //Ajouter un etudiant (deuxieme methode)
  $/*ok= Etudiant::create(
    [
        'nom' => "Diouf",
        'prenom' => "Aicha",
        'matricule' => "101015",
        'age' => 11,
     ]

    );
    dd($ok);*/

    $nomPremierEtudiant= Etudiant::create(
        [
            'nom' => "Diouf",
            'prenom' => "Aicha",
            'matricule' => "101015",
            'age' => 11,
         ]
    
        );
        dd("L'etudiant " . $etudiant-> prenom . ''.$etudiant->nom . 'a été crée avec succés');
    return view('base');});