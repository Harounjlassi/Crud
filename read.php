<?php

require_once'connexion.php';
require_once'personne.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Display</title>
</head>

<body>


  <div class="content">

    <div class="container">
      <h2 class="mb-5">Display</h2>


      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>

              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox" class="js-check-all" />
                  <div class="control__indicator"></div>
                </label>
              </th>

              <th scope="col">ID</th>
              <th scope="col">First Name </th>
              <th scope="col">Last Name </th>
              <th scope="col">Phone Number</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>



            </tr>
          </thead>
          <tbody>
            <?php try { $c=new config(); $query=$c->getConnexion()->query('select * from crud');
  $list = $query->fetchAll();
  } catch (PDOException $e) {
  $e->getMessage();
  }
  

            foreach($list as $crud){

            ?>
            <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox" />
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td>
                <?=$crud['id']?>
              </td>
              <td><a href="#"><?=$crud['firstname']?></a>
              </td>
              <td>
                <?=$crud['lastname']?> </td>
              <td><?=$crud['phonenumber']?></td>
              <td><?=$crud['gender']?></td>
              <td><?=$crud['email']?></td>



            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>


    </div>

  </div>




</body>

</html>