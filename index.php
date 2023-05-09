<form action="" method="GET">
    <label for="name">Name : </label>
    <input type="text" name="name" id="name" placeholder="name">
    <input type="submit" value="Envoyer">
</form>

<?php 

if ($_GET) {
    echo $_GET['name'];
}

?>