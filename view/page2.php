<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

<?php


use Controller\ControllerCSV;

if (empty($row)){
    echo ' <div class="alert alert - primary" role="alert"> База данных пуста </div> ';
}

?>

<a href="/">main page</a>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th  scope="col"><a href="http://localhost/clear/filter/uid">Uid</a><a href="http://localhost/clear/filter/reverse/uid"> rev</a></th>
        <th scope="col"><a href="http://localhost/clear/filter/name">Name</a><a href="http://localhost/clear/filter/reverse/name"> rev </a></th>
        <th scope="col"><a href="http://localhost/clear/filter/age">Age</a><a href="http://localhost/clear/filter/reverse/age"> rev</a></th>
        <th scope="col"><a href="http://localhost/clear/filter/email">Email</a><a href="http://localhost/clear/filter/reverse/email"> rev</a></th>
        <th scope="col"><a href="http://localhost/clear/filter/phone">Phone </a><a href="http://localhost/clear/filter/reverse/phone"> rev</a></th>
        <th scope="col"><a href="http://localhost/clear/filter/gender">Gender</a><a href="http://localhost/clear/filter/reverse/gender"> rev</a></th>
    </tr>
    </thead>
    <tbody>
    <?php if(!empty ($row)):?>
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
<?php endif;?>

    </tbody>
</table>

<form method="POST" action="/export"   enctype="multipart/form-data">
    <div class="mb-3">
        <label for="formFile" class="form-label">Загрузите CSV </label>
        <input datatype="csv" name="CSV" class="form-control" type="file" id="formFile">
        <input class="btn btn-primary" type="submit" value="Load Csv">
    </div>
</form>
