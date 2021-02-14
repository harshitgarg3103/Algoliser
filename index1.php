<?php
    include 'header1.php' ;
?>
<html>
<body>
 

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>
<!-- 
<h1>Front page</h1> -->
<h1>All blogs: </h1>

<div class="article-container">
    <?php
        $sql = "SELECT * FROM article" ;
        $result = mysqli_query($conn,$sql);
        $queryResults =mysqli_num_rows($result);
        
        if($queryResults > 0){
            while ($row = mysqli_fetch_assoc($result )) {
                echo "<div class = 'article-box'>
                <h2>".$row['a_title']."</h2>
                <p>".$row['a_text']."</p>
                <p>".$row['a_date']."</p>
                <p>".$row['a_author']."</p>
                
                </div>";
            }
        }
    ?>

</div>



</body>
</html>