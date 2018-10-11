<?php include 'includes\header.php'; ?>
    <!--sidebar start-->
<?php include 'includes\sidebar.php'; ?>

<?php include 'includes\admin_db.php'; ?>
    <!--sidebar end-->



    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Welcome to your dashboard, <?php echo $_SESSION['username']; ?></h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Admin Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="container-fluid">
            <img src="img/banner1.jpg"  />
          </div>
        </div>

        <div class="row">

            <?php
                if (isset($_SESSION['username'])) {
                  // code...
                  $query = "SELECT * FROM users WHERE user_role = 'user'";

                  $select_users_query = mysqli_query($connection, $query);

                  echo "<div class='container'>";
                    echo "<h2>Users Table</h2>";
                    echo "<table class='table table-bordered'>";
                      echo "<thead>";
                          echo "<tr>";
                            echo "<th>userID</th>";
                            echo "<th>username</th>";
                            echo "<th>email</th>";
    //                        echo "<th>credit_card_no</th>";

                          echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";

                  while($rows = mysqli_fetch_array($select_users_query) ){
                              echo "<tr>";
                              echo "<td>";
                                echo $rows['userID'];
                              echo "</td>";

                              echo "<td>";
                                echo $rows['username'];
                              echo "</td>";
                              echo "<td>";
                                echo $rows['email'];
                              echo "</td>";
  /*                            echo "<td>";
                                echo $rows['credit_card_no'];
                              echo "</td>";
                              */
                              echo "<td><a href='index.php?delete={$rows['userID']}'>Delete</a></td>";
                              echo "</tr>";
                  }

                          echo "</tbody>";
                          echo "</table>";
                    echo "</div>";

                    if (isset($_GET['delete'])) {
                      // code...
                      $the_user_id = $_GET['delete'];

                      $query = "DELETE FROM users WHERE userID = {$the_user_id}";

                      $delete_query = mysqli_query($connection, $query);

                      header("Location: index.php");
                    }
                }

             ?>



        </div>
        <!-- project team & activity end -->

<!--
        <div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
-->
      </section>

  </section>

    <?php include 'includes\footer.php'; ?>
