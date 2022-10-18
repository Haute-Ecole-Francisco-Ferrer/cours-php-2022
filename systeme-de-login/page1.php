<?php include("header.php"); ?>
<?php 


if(isset($_SESSION['username'])){ 
    
?>


<h1>Page 1</h1>
    <h2>Bienvenue <?php echo $_SESSION['username'];  ?></h2>
</body>
</html>

<?php } else { 

header('location: index.php?msg=paslogue');


 } 

?>