<?php
    include './header.php';
    include './config.php';
?>



<div class="container">
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




    <div class="mt-4">
        <table class="table">
            <thead>
                <?php
                $id = $_GET['id'];
                $select = "SELECT * FROM cars where vehice_id = $id";
                $result = mysqli_query($conn, $select);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <!-- <th scope="col">Details</th> -->
                        <h3>Details</h3>
                    </tr>
                    <tr>
                        <th scope="col">Mã phương tiện: <?php echo $row['vehice_id']; ?></th>
                    </tr>
                    <tr>
                        <th scope="col">Biển số xe: <?php echo $row['license_no']; ?></th>
                    </tr>
                    <tr>
                        <th scope="col">Model: <?php echo $row['model']; ?></th>
                    </tr>
                    <tr>
                        <th scope="col">Ngày sản xuất: <?php echo $row['year']; ?></th>
                    </tr>
                    <tr>
                        <th scope="col">Kiểu oto: <?php echo $row['ctype']; ?></th>
                    </tr>
                    <tr>
                        <th scope="col">Giá cho thuê theo ngày (VNĐ): <?php echo $row['drate']; ?></th>
                    </tr>
                    <tr>
                        <th scope="col">Giá cho thuê theo tuần (VNĐ): <?php echo $row['wrate']; ?></th>
                    </tr>
                    <tr>
                        <th scope="col">Trạng thái: <?php echo $row['status']; ?></th>
                    </tr>
                    <tr>
                        <th scope="col">
                            <a href="./details.php?id=<?php echo $row['vehice_id']; ?>"><i class="far fa-edit"></i></a>
                            <a href="../action/action_del.php?id=<?php echo $row['vehice_id']; ?>"><i class="far fa-trash-alt" style="color: red;"></i></a>
                        </th>
                    </tr>
                <?php 
                } 
                ?>
            </thead>
        </table>
    </div>
</div>