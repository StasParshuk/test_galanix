
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


<?php

use config\ORM;

 $row = ORM::all();
 dump($row);
echo "page 2";
?>
<a href="/">main page</a>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">Uid</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Gender</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($row as  $item): ?>
        <tr>
            <th scope="row"><?=$item->uid ?></th>
            <td><?=$item->Name ?></td>
            <td><?=$item->Age ?></td>
            <td><?=$item->Email ?></td>
            <td><?=$item->Phone ?></td>
            <td><?=$item->Gender ?></td>
        </tr>
    <?php endforeach; ?>


    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>