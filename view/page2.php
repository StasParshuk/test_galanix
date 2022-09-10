<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

<?php


use Controller\ControllerCSV;

$row = ControllerCSV::result();
if (empty($row)){
    echo ' <div class="alert alert - primary" role="alert"> База данных пуста </div> ';
}
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
    <?php foreach ($row as $item): ?>
        <tr>
            <th scope="row"><?= $item->uid ?></th>
            <td><?= $item->Name ?></td>
            <td><?= $item->Age ?></td>
            <td><?= $item->Email ?></td>
            <td><?= $item->Phone ?></td>
            <td><?= $item->Gender ?></td>
        </tr>
    <?php endforeach; ?>


    </tbody>
</table>

<form method="POST" action="/export"   enctype="multipart/form-data">
    <div class="mb-3">
        <label for="formFile" class="form-label">Загрузите CSV </label>
        <input datatype="csv" name="CSV" class="form-control" type="file" id="formFile">
        <input class="btn btn-primary" type="submit" value="Load Csv">
    </div>
</form>
