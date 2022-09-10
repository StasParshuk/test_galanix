
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


<?php
echo "page 1";
?>
<form method="POST" action="/import"  enctype="multipart/form-data">
<div class="mb-3">
    <label for="formFile" class="form-label">Default file input example</label>
    <input  name="CSV" class="form-control" type="file" id="formFile">
    <input class="btn btn-primary" type="submit" value="Load Csv">
</div>
</form>
<form method="post" action="/clear" >
<input class="btn btn-primary" type="submit" value="Clear All result">
</form>
<form action="/result" method="get">
<input class="btn btn-primary" type="submit" value="View Result">
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>