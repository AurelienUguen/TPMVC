<?php

$animes = ["Jojo's Bizarre Adventure", "Death Note", "My Hero Academia", "Akira", "Dragon Ball"];

?>

<table>
    <thead>
        <tr>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($animes as $anime) { ?>
        <tr>
            <td><?php echo $anime?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>