<?php


require_once'personne.php';
require_once'connexion.php';

if(isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['id'])&&isset($_POST['gender'])&&isset($_POST['email'])&&isset($_POST['phonenumber']))
{
  $personne1=new personne($_POST['last_name'],$_POST['first_name'],$_POST['id'],$_POST['gender'],$_POST['email'],$_POST['phonenumber']);
  $personne1->afficher();
 

 try {
 $sql = "INSERT INTO crud VALUES (:id,:last_name, :first_name,:gender,:email,:phonenumber)";
 $c =  config::getConnexion();
 $query = $c->prepare($sql);
 $query->execute([
  'last_name' => $personne1->getnom(),
  'first_name' => $personne1->getprenom(),
  'id' => $personne1->getid(),
  'gender'=>$personne1->getgender(),
  'email'=>$personne1->getmail(),
  'phonenumber'=>$personne1->getphonenumber()
]);
 
 
 /*  $list = $query->fetchAll();
 */ } catch (PDOException $e) {
 $e->getMessage();
 }



 }



 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <!-- Title Page-->
  <title>Au Register Forms by Colorlib</title>


  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title">Add</h2>
          <form method="POST">
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">first name</label>
                  <input class="input--style-4" type="text" name="first_name">
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">last name</label>
                  <input class="input--style-4" type="text" name="last_name">
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">ID</label>
                  <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="number" name="id">
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Gender</label>
                  <div class="p-t-10">
                    <label class="radio-container m-r-45">Male
                      <input type="radio" checked="checked" name="gender">
                      <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Female
                      <input type="radio" name="gender">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Email</label>
                  <input class="input--style-4" type="email" name="email">
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Phone Number</label>
                  <input class="input--style-4" type="text" name="phonenumber">
                </div>
              </div>
            </div>

            <div class="p-t-15">
              <button class="btn btn--radius-2 btn--violet" type="submit">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- Main JS-->
  <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->