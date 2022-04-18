<?php

 class Post 
 {
     
  // DB
  private $conn;
  private $table = 'posts';

  // Post properties
  public $id;
  public $category_id;
  public $category_name;
  public $title;
  public $body;
  public $author;
  public $created_at;


  // contructor
  public function __construct($db){
      $this->conn = $db;
  }
   
  //Get Post

  public function read() {
      // create query
      $query = 'SELECT 
                c.name as category_name,
                p.id,
                p.category_id,
                p.title,
                p.body,
                p.author,
                p.created_at
                FROM
                '.$this->table.' p
                LEFT JOIN
                  categories c ON p.category_id = c.id
                ORDER BY
                  p.created_at DESC';


        //prepare    
        $stmt = $this->conn->prepare($query);    
        
        // Execute query
        $stmt ->execute();

        return $stmt;
  }




 }
 


?>