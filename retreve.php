
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>register</title>
     
        
    </head>
    
    <body style="background-color:light; color:dark">
        <div class="container-fluid" style="max-height: 1000px; overflow: auto;">
            <div class="row">
                <div class="col-md-3 col-lg-2" style="border-left:2px solid white;">
               
                
                <div class="col-lg-8 col-md-6  mt-2">
                   
                    <h3 class="my-4 text-center">register</h3>
                    
                    
                    <!-- Retrieve data -->
                    <?php
                        if (isset($_GET["success"]) && $_GET["success"] == "true") {
                           echo '<div class="text-center alert alert-success mt-3" role="alert">
                                    Data Created successfully!
                                </div>';
                        }
                    ?>

                    <?php
                        if (isset($_GET["update"]) && $_GET["update"] == "success") {
                            echo '<div class="text-center alert alert-warning mt-3" role="alert">
                                    Data updated successfully!
                                </div>';
                        }

                        if (isset($_GET["delete"]) && $_GET["delete"] == "success") {
                            echo '<div class="text-center alert alert-danger mt-3" role="alert">
                                    Data deleted successfully!
                                </div>';
                        }
                    ?>
                    <i style="text-align:right">
                      <a href="register.php" class="btn btn-primary float-end">register</a>
                    </i>
                <div class="row">
                    <?php require_once "connect.php"; ?>
                
                    <?php
                    $query = "SELECT * FROM register";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) { ?>
                    
                   <table>
                                   <th>
                                    <td><?php echo $row['UserName'] ?></td> 
                                
                               
                                        <td><?php echo $row['service'] ?></td>

                                        <td><p><?php echo $row['phone'] ?></td>
                                         

                                            <cite title="Source Title">
                                            <td>
                                                    <?php echo $row['amount'] ?>
                                               </td>
                                            </cite>

                                            <a href="update.php?id=<?php echo $row['UserName'];?>">Update</a>
                                        </footer>
                                    </blockquote>
                                </div>
                        </div>
                        </th>
                        </table>
                    </div>
                        <?php } }?>

                         <table class="table table-bordered table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>UserName</th>
                                <th>service</th>
                                <th>phone</th>
                                <th>amount</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          
                            try { require_once "connect.php";

                                $query = "SELECT * FROM register";
                                $result = mysqli_query($connect, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['UserName'] . "</td>";
                                        echo "<td>" . $row['service'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['amount'] . "</td>";
                                     
                                        // echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['phone']) .
                                        // "' width='50' height='50' alt='Avatar'></td>";

                                        echo '<td>';

                                        echo '<a href="update.php?UserName=' . $row['UserName'] . '";
                                        class="btn btn-sm btn-success">;
                                        <i class="fas fa-pencil"></i></a>';

                                        
                                        echo '<a class="btn btn-sm btn-danger 
                                        href="includes/process_delete.php?UserName=' . $row['UserName'] . '"                                
                                        onclick="return confirm(\'sure\')">
                                            <i class="fas fa-trash-alt"></i></a>';


                                        echo '</td>';

                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No data found.</td></tr>";
                                }
                            } catch (Exception $e) {
                                die("Query failed: " . $e->getMessage());
                            }
                            ?>

                        </tbody>
                    </table>
                    <!-- <canvas id="courseChart" width="100" height="50"></canvas> -->
                </div>

                        <!-- <canvas id="courseChart" width="100" height="50"></canvas> -->
                </div>
                </div>


                <!-- <div class="col-lg-2 mt-10">
                    <?php
                        include 'register.php';
                    ?>
                </div> -->
                
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <?php
            
            // $query = "SELECT * FROM register;";
            // $result = mysqli_query($connect, $query);

            // $courseData = array(); 
            // if (mysqli_num_rows($result) > 0) {
            //     while ($row = mysqli_fetch_assoc($result)) {
            //         $course = $row['course'];
                    
                   
            //         if (isset($courseData[$course])) {
            //             $courseData[$course]++;
            //         } else {
            //             $courseData[$course] = 1;
            //         }
            //     }
            // }

            // ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script>
    const courseData = <?php echo json_encode($courseData); ?>;

    
    const courseNames = Object.keys(courseData);
    const studentCounts = Object.values(courseData);


    const canvas = document.getElementById("courseChart");
    const ctx = canvas.getContext("2d");

    const courseChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: courseNames,
            datasets: [{
                label: 'Number of Students',
                data: studentCounts,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]  
        },
        options: {
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Courses'
                    }
                },
                y: {
                    beginAtZero: true,
                    display: true,
                    title: {
                        display: true,
                        text: 'Registration'
                    }
                }
            }
        }
    });
</script>


        </div> -->
<!--         
            <div class="modal fade" UserName="confirmDeleteModal" tabindex="-1"
            role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title" UserName="confirmDeleteModalLabel" style="color:black">Confirm Delete</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center" style="color:black">
                            Are you sure you want to delete this record?
                        </div>
                        <div class="modal-footer text-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" UserName="confirmDeleteBtn">Confirm Delete</button>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <script>
            $(document).ready(function() {
                
                $('.delete-btn').on('click', function(e) {
                    e.preventDefault();

                    
                    var id = $(this).data('id');


                    $('#confirmDeleteModal').modal('show');

                   
                    $('#confirmDeleteBtn').on('click', function() {
                       
                        window.location.href = 'process.php?id=' + UserName;
                    });
                });
            });
        </script> -->
    </body>
</html>