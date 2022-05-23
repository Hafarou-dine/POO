<?php 
    class Article{
        /* --------------------------------------- ATTRIBUTS --------------------------------------- */
        private $id;
        private $nom;
        private $content;


        /* --------------------------------------- CONSTRUCTEUR --------------------------------------- */
        public function __construct()
        {
            
        }


        /* --------------------------------------- GETTERS & SETTERS --------------------------------------- */
        /**
         * Get the value of id
         */ 
        public function getId():int
        {
            return $this->id;
        }

        /**
         * Set the value of id
         */ 
        public function setId($id):void
        {
            $this->id = $id;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom():string
        {
            return $this->nom;
        }

        /**
         * Set the value of nom
         */ 
        public function setNom($nom):void
        {
            $this->nom = $nom;
        }

        /**
         * Get the value of content
         */ 
        public function getContent():string
        {
            return $this->content;
        }

        /**
         * Set the value of content
         */ 
        public function setContent($content):void
        {
            $this->content = $content;
        }


        /* --------------------------------------- METHODES --------------------------------------- */
        // Fonction qui renvoie la liste des articles
        public function showAllArticle($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM article;');
                $req->execute();
                return $req->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
        
    }
?>

