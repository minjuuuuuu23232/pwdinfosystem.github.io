<?php
    require 'connection.php';
    include('checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <style>

        .logout-button {
    margin-bottom: 20px;
    }

    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Persons With Disabilities Information System</title>
  </head>
  <body>

  <div class="container mt-2">
            <div class="row">
                    <div class="col-md-12">
                    <div class="text-end mt-3">
                        <a href="logout.php" class="btn btn-danger logout-button">Logout</a>
                    </div>

                    <?php 

                        include('message.php');

                    ?>
                       
                    <div class="card mt-1">
                        <div class="card-header">
                        <a href="pwdinfoadd.php" class="btn btn-success float-end">Add PWD</a>
                        <a href="printindex.php" class="btn btn-primary float-end" style="margin-right: 10px;">Print List</a>
                        <h3 class="mb-0">PWD Informations</h3>
                        </div>
                        <div class="card-body">
                        <form method="GET" action="" class="mb-3">
                            <div class="row">
                            <div class="col-md-3">
                                <label for="barangayFilter" class="form-label">Filter by Barangay:</label>
                                <?php
                                $filterBarangay = isset($_GET['barangayFilter']) ? $_GET['barangayFilter'] : '';
                                ?>
                                <select name="barangayFilter" class="form-select">
                                    <option <?php if ($filterBarangay == 'All') echo 'selected'; ?>>All</option>
                                    <option <?php if ($filterBarangay == 'Abuno') echo 'selected'; ?>>Abuno</option>
                                    <option <?php if ($filterBarangay == 'Acmac-Mariano Badelles Sr.') echo 'selected'; ?>>Acmac-Mariano Badelles Sr.</option>
                                    <option <?php if ($filterBarangay == 'Bagong Silang') echo 'selected'; ?>>Bagong Silang</option>
                                    <option <?php if ($filterBarangay == 'Bonbonon') echo 'selected'; ?>>Bonbonon</option>
                                    <option <?php if ($filterBarangay == 'Bunawan') echo 'selected'; ?>>Bunawan</option>
                                    <option <?php if ($filterBarangay == 'Buru-un') echo 'selected'; ?>>Buru-un</option>
                                    <option <?php if ($filterBarangay == 'Dalipuga') echo 'selected'; ?>>Dalipuga</option>
                                    <option <?php if ($filterBarangay == 'Del Carmen') echo 'selected'; ?>>Del Carmen</option>
                                    <option <?php if ($filterBarangay == 'Digkilaan') echo 'selected'; ?>>Digkilaan</option>
                                    <option <?php if ($filterBarangay == 'Ditucalan') echo 'selected'; ?>>Ditucalan</option>
                                    <option <?php if ($filterBarangay == 'Dulag') echo 'selected'; ?>>Dulag</option>
                                    <option <?php if ($filterBarangay == 'Hinaplanon') echo 'selected'; ?>>Hinaplanon</option>
                                    <option <?php if ($filterBarangay == 'Hindang') echo 'selected'; ?>>Hindang</option>
                                    <option <?php if ($filterBarangay == 'Kabacsanan') echo 'selected'; ?>>Kabacsanan</option>
                                    <option <?php if ($filterBarangay == 'Kalilangan') echo 'selected'; ?>>Kalilangan</option>
                                    <option <?php if ($filterBarangay == 'Kiwalan') echo 'selected'; ?>>Kiwalan</option>
                                    <option <?php if ($filterBarangay == 'Lanipao') echo 'selected'; ?>>Lanipao</option>
                                    <option <?php if ($filterBarangay == 'Luinab') echo 'selected'; ?>>Luinab</option>
                                    <option <?php if ($filterBarangay == 'Mahayahay') echo 'selected'; ?>>Mahayahay</option>
                                    <option <?php if ($filterBarangay == 'Mainit') echo 'selected'; ?>>Mainit</option>
                                    <option <?php if ($filterBarangay == 'Mandulog') echo 'selected'; ?>>Mandulog</option>
                                    <option <?php if ($filterBarangay == 'Maria Cristina') echo 'selected'; ?>>Maria Cristina</option>
                                    <option <?php if ($filterBarangay == 'Pala-o') echo 'selected'; ?>>Pala-o</option>
                                    <option <?php if ($filterBarangay == 'Panoroganan') echo 'selected'; ?>>Panoroganan</option>
                                    <option <?php if ($filterBarangay == 'Poblacion') echo 'selected'; ?>>Poblacion</option>
                                    <option <?php if ($filterBarangay == 'Puga-an') echo 'selected'; ?>>Puga-an</option>
                                    <option <?php if ($filterBarangay == 'Rogongon') echo 'selected'; ?>>Rogongon</option>
                                    <option <?php if ($filterBarangay == 'San Miguel') echo 'selected'; ?>>San Miguel</option>
                                    <option <?php if ($filterBarangay == 'San Roque') echo 'selected'; ?>>San Roque</option>
                                    <option <?php if ($filterBarangay == 'Santa Elena') echo 'selected'; ?>>Santa Elena</option>
                                    <option <?php if ($filterBarangay == 'Santa Filomena') echo 'selected'; ?>>Santa Filomena</option>
                                    <option <?php if ($filterBarangay == 'Santiago') echo 'selected'; ?>>Santiago</option>
                                    <option <?php if ($filterBarangay == 'Santo Rosario') echo 'selected'; ?>>Santo Rosario</option>
                                    <option <?php if ($filterBarangay == 'Saray') echo 'selected'; ?>>Saray</option>
                                    <option <?php if ($filterBarangay == 'Suarez') echo 'selected'; ?>>Suarez</option>
                                    <option <?php if ($filterBarangay == 'Tambacan') echo 'selected'; ?>>Tambacan</option>
                                    <option <?php if ($filterBarangay == 'Tibanga') echo 'selected'; ?>>Tibanga</option>
                                    <option <?php if ($filterBarangay == 'Tipanoy') echo 'selected'; ?>>Tipanoy</option>
                                    <option <?php if ($filterBarangay == 'Tomas L. Cabili (Tominobo Proper)') echo 'selected'; ?>>Tomas L. Cabili</option>
                                    <option <?php if ($filterBarangay == 'Tominobo Upper') echo 'selected'; ?>>Tominobo Upper</option>
                                    <option <?php if ($filterBarangay == 'Tubod') echo 'selected'; ?>>Tubod</option>
                                    <option <?php if ($filterBarangay == 'Ubaldo Laya') echo 'selected'; ?>>Ubaldo Laya</option>
                                    <option <?php if ($filterBarangay == 'Upper Hinaplanon') echo 'selected'; ?>>Upper Hinaplanon</option>
                                    <option <?php if ($filterBarangay == 'Villa Verde') echo 'selected'; ?>>Villa Verde</option>
                                    </select>
                                        </div>
                                            <div class="col-md-2 align-self-end">
                                        <button type="submit" class="btn btn-primary">Apply Filter</button>
                                    </div>
                                       <label for="search" class="form-label">Search by Name</label>
                                    <div class="col-md-3 align-self-end">
                                <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                            </div>
                            <div class="col-md-3 align-self-end">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>

                <?php

                    // limit sa table
                    $limit = 10;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $limit;

                    // generate og query para sa search, filter, pagination
                    $query = "SELECT * FROM pwd_info";

                    // para sa filter
                    if (!empty($filterBarangay) && $filterBarangay !== 'All') {
                        $query .= " WHERE barangay = '$filterBarangay'";
                    }

                    // para sa search
                    $search = isset($_GET['search']) ? $_GET['search'] : '';
                    if (!empty($search)) {
                        if (strpos($query, 'WHERE') === false) {
                            $query .= " WHERE";
                        } else {
                            $query .= " AND";
                        }
                        $query .= " (firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR id LIKE '%$search%')";
                    }

                    $query .= " LIMIT $start, $limit";
                    $query_run = mysqli_query($conn, $query);

                    // total records sa pagination
                    $total_records = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pwd_info"));

                    if ($total_records > 0) { }
                        // pag ma kuan ang data e kuan sa table

                        ?>
                        <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Date Registered</th>
                                        <th>Full Name</th>
                                        <th>Age</th>
                                        <th>Sex</th>
                                        <th>Barangay</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($query_run as $pwd) {
                                        // display ang data every time mag run ang query
                                        ?>
                                        <tr>
                                            <td><?php echo $pwd['join_date']; ?></td>
                                            <td><?php
                                                echo $pwd['lastname'] . ', ';
                                                echo $pwd['firstname'] . ' ';
                                                echo substr($pwd['middlename'], 0, 1); ?>.
                                            </td>
                                            <td><?php echo $pwd['age']; ?></td>
                                            <td><?php echo $pwd['gender']; ?></td>
                                            <td><?php echo $pwd['barangay']; ?></td>
                                            <td><?php echo $pwd['emergencycontact']; ?></td>
                                            <td>
                                                <a href="pwdinfoview.php?id=<?php echo $pwd['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="pwdedit.php?id=<?php echo $pwd['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }

                                    //  tiga check if wala bay data nakita
                                    if (mysqli_num_rows($query_run) == 0) {
                                        ?>
                                        <tr>
                                            <!-- error message-->
                                            <td colspan="8" class="text-center">
                                                No data found.
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                    <?php

                    // para sa pagination

                    $total_pages = ceil($total_records / $limit);
                    ?>

                    <nav>
                        <ul class="pagination offset-md-11">
                            <?php if ($page > 1) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo ($page - 1); ?>&barangayFilter=<?php echo $filterBarangay; ?>">Previous</a>
                                </li>
                            <?php 
                            } 
                        ?>
                            <?php
                            for ($i = 1; $i <= $total_pages; $i++) {
                                ?>
                                <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?>&barangayFilter=<?php echo $filterBarangay; ?>"><?php echo $i; ?></a>
                                </li>
                                <?php
                                }
                            ?>
                            <?php if ($page < $total_pages) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo ($page + 1); ?>&barangayFilter=<?php echo $filterBarangay; ?>">Next</a>
                                </li>
                            <?php 
                            } 
                            
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>