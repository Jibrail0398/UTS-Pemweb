<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../plugin/css/bootstrap.min.css">
    <title>Edit Data</title>
</head>
<body>
<div style="border: none !important" class="card m-1">
<div class="card-body">
<form method="post" enctype="multipart/form-data">
    <h2>Edit Data</h2>
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="Name" aria-describedby="emailHelp" required value="<?php echo $row['name']; ?>">
  </div>
  <div class="mb-3">
    <label for="Price" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" id="Price" aria-describedby="emailHelp" required value="<?php echo $row['price']; ?>">
  </div>
  <div class="mb-3">
    <label for="Image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="Image" aria-describedby="emailHelp" required>
  </div>
  <a class="btn btn-danger" href="show.php">Cancel</a>
  <input type="submit" name="update" class="btn btn-primary" value="Edit">
</form>
</div>
</div>
</body>
</html>