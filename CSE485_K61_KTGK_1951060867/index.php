<?php
    include './form/header.php';
?>
<div class="container">
  <div class="tieude">
    <h3>Quản lý xe</h3>
  </div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
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
<!-- <div class="container"> -->
    <a href="./form/add.php"><i class="fas fa-plus-circle"> ADD CARS</i></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã phương tiện</th>
                <th scope="col">Model</th>
                <th scope="col">Giá cho thuê theo ngày</th>
                <th scope="col">Giá cho thuê theo tuần</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Chi tiết</th>
                <!-- <th scope="col">Delete</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
                include "./form/config.php";
                $sql = "SELECT * FROM cars";
                $result = mysqli_query($conn, $sql); 
                if(mysqli_num_rows($result) > 0) {       
                  while($row = mysqli_fetch_assoc($result)) {
            ?>
                        <tr>
                          
                            <td><?php echo $row['vehice_id'];?></td>
                            <td><?php echo $row['model'];?></td>
                            <td><?php echo $row['drate'];?></td>
                            <td><?php echo $row['wrate'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <td><a href="./form/full.php?id=<?php echo $row['vehice_id'];?>"><i class="fas fa-info-circle"></i></a></td>
                            <!-- <td><a href="./action/action_del.php?id=<?php echo $row['vehice_id'];?>"><i class="fas fa-eraser"></i></a></td> -->
                        </tr>
                        <?php
                            
                        }
                    }
                ?>
        </tbody>
    </table>
</div>
    
    
    
    
<?php
    include './form/footer.php';
?>