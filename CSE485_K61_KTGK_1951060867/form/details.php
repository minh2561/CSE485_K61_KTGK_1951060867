<?php
  include './header.php';
  include './config.php';
  $id = $_GET['id'];
  $sql = "SELECT * FROM cars WHERE vehice_id = '$id'";
  $result = mysqli_query($conn, $sql);
  if($result==true){
      $count = mysqli_num_rows($result);
      if ($count == 1){
          $row = mysqli_fetch_assoc($result);
      }
  }
?>



<form class='container' method="POST" class="form" action = "../action/action_update.php">
<div class="tieude"><h3>Update cars</h3></div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Extension</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <div class="mb-3 size">
    <label for="exampleInputEmail1" class="form-label">Mã phương tiện</label>
    <input type="text" class="form-control" id="vehice" name = "vehice"value=<?php echo $row['vehice_id']; ?>>
  </div>
  <div class="mb-3 size">
    <label for="exampleInputPassword1" class="form-label">Biển số xe</label>
    <input type="text" class="form-control" id="lisence" name="lisence" value=<?php echo $row['license_no']; ?>>
  </div>
  <div class="mb-3 size">
    <label for="exampleInputEmail1" class="form-label">Model</label>
    <input type="text" class="form-control" id="model" name="model" value=<?php echo $row['model']; ?>>
  </div>
  <div class="mb-3 size">
    <label for="exampleInputEmail1" class="form-label">Ngày sản xuất</label>
    <input type="date" class="form-control" id="date" name="date" value=<?php echo $row['year']; ?>>
  </div>
  <div class="mb-3 size">
    <label for="exampleInputEmail1" class="form-label">Kiểu oto</label>
    <input type="text" class="form-control" id="ctype" name="ctype" value=<?php echo $row['ctype']; ?>>
  </div>
  <div class="mb-3 size">
    <label for="exampleInputEmail1" class="form-label">Giá thuê theo ngày (VNĐ)</label>
    <input type="text" class="form-control" id="drate" name="drate" value=<?php echo $row['drate']; ?>>
  </div>
  <div class="mb-3 size">
    <label for="exampleInputEmail1" class="form-label">Giá thuê theo tuần (VNĐ)</label>
    <input type="text" class="form-control" id="wrate" name="wrate" value=<?php echo $row['wrate']; ?>>
  </div>
  <div class="mb-3 size">
    <label for="exampleInputEmail1" class="form-label">Trạng thái</label>
    <input type="text" class="form-control" id="status" name="status" value=<?php echo $row['status']; ?>>
  </div>
  <td colspan="2">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="submit" value="Update " class="btn btn-info">
  </td>
</form>





<?php
    include './footer.php';
?>