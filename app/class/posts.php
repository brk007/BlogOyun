<?php
    class posts{

        // Connection
        private $conn;

        // Table
        private $db_table = "posts";

        // Columns
        public $id;
        public $user_id;
        public $topic_id;
        public $title;
        public $image;
        public $body;
        public $published;
        public $created_at;
        public $steam;
        public $offical;

        

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getPost(){
            $sqlQuery = "SELECT id, user_id, topic_id, title, image, body, published, created_at, steam, offical FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createPost(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        user_id = :user_id, topic_id = :topic_id, title = :title, image = :image, 
                        body = :body, 
                        published = :published, 
                        steam = :steam, 
                        offical = :offical";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->user_id=htmlspecialchars(strip_tags($this->user_id));
            $this->topic_id=htmlspecialchars(strip_tags($this->topic_id));
            $this->title=htmlspecialchars(strip_tags($this->title));
            $this->image=htmlspecialchars(strip_tags($this->image));
            $this->body=htmlspecialchars(strip_tags($this->body));
            $this->published=htmlspecialchars(strip_tags($this->published));
            $this->steam=htmlspecialchars(strip_tags($this->steam));
            $this->offical=htmlspecialchars(strip_tags($this->offical));
        
            // bind data
            $stmt->bindParam(":user_id", $this->user_id);
            $stmt->bindParam(":topic_id", $this->topic_id);
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":image", $this->image);
            $stmt->bindParam(":body", $this->body);
            $stmt->bindParam(":published", $this->published);
            $stmt->bindParam(":steam", $this->steam);
            $stmt->bindParam(":offical", $this->offical);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // READ single
        public function getSinglePost(){
            $sqlQuery = "SELECT
                        id, 
                        user_id, 
                        topic_id, 
                        title, 
                        image, 
                        body, 
                        published, 
                        created_at, 
                        steam,
                        offical
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->user_id = $dataRow['user_id'];
            $this->topic_id = $dataRow['topic_id'];
            $this->title = $dataRow['title'];
            $this->image = $dataRow['image'];
            $this->body = $dataRow['body'];
            $this->published = $dataRow['published'];
            $this->created_at = $dataRow['created_at'];
            $this->steam = $dataRow['steam'];
            $this->offical = $dataRow['offical'];
        }        

        // UPDATE
        public function updatePost(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    topic_id = :topic_id, 
                    title = :title,  
                    body = :body,
                    published = :published, 
                    steam = :steam, 
                    offical = :offical
                    WHERE 
                    id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->topic_id=htmlspecialchars(strip_tags($this->topic_id));
            $this->title=htmlspecialchars(strip_tags($this->title));
            $this->body=htmlspecialchars(strip_tags($this->body));
            $this->published=htmlspecialchars(strip_tags($this->published));
            $this->offical=htmlspecialchars(strip_tags($this->offical));
            $this->steam=htmlspecialchars(strip_tags($this->steam));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":topic_id", $this->topic_id);
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":body", $this->body);
            $stmt->bindParam(":published", $this->published);
            $stmt->bindParam(":steam", $this->steam);
            $stmt->bindParam(":offical", $this->offical);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function deletePost(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>