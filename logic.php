

<?php
$conn= new mysqli('localhost','root','','data');









    // Destroy if not possible to create a connection
  

    // Get data to display on index page
    $sql = "SELECT * FROM blog";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO blog(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);
        
        

       
    }
    


    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blog WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    

   

?>