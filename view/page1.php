
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


<?php
if  (!empty($error)){
   echo ' <div class="alert alert - primary" role="alert">' . $error . '  </div> ';

}
unset($error);
?>
<form method="POST" action="/import"   enctype="multipart/form-data">
<div class="mb-3">
    <label for="formFile" class="form-label">Загрузите CSV </label>
    <input datatype="csv" name="CSV" class="form-control" type="file" id="formFile">
    <input class="btn btn-primary" type="submit" value="Load Csv">
</div>
</form>
<form method="post" action="/clear" >
<input class="btn btn-primary" type="submit" value="Clear All result">
</form>
<a href="/result">result</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>