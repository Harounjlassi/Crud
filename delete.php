<?php


require_once'personne.php';
require_once'connexion.php';

if(isset($_POST['id']))
{
$id=$_POST['id'];
 

 try {
/*  $sql = "SELECT * FROM `crud` WHERE id=:id";
 $c =  config::getConnexion();
 $query = $c->prepare($sql);
if($query->execute(['id' => $personne1->getid()] )){


    echo "ssss";}
 
 
 } catch (PDOException $e) {
 $e->getMessage();
 }
 */
$sql = 'DELETE FROM `crud` WHERE  id=:id';
;
$c =  config::getConnexion();
$query = $c->prepare($sql);
$query->execute([

'id' => $id


] );
$count =$query->rowCount();
 if($count>0  ){


   echo "ssss";}else{
     echo "erro" ; } } catch (PDOException $e) { $e->getMessage();
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Title Page-->
  <title>Delete</title>


  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title">Delete</h2>
          <form method="POST">

            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">ID</label>
                  <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="number" name="id">
                  </div>
                </div>
              </div>



              <div class="p-t-15">
                <button class="btn btn--radius-2 btn--violet" type="submit">delete</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- Main JS-->
  <script src="js/global.js"></script>
  <script>
  var jsVariable = "<?php echo $count; ?>";

  if (jsVariable == 0) {

    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
      footer: '<a href="">Why do I have this issue?</a>'
    })
  } else {
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: true,
      /*       timer: 1500
       */
    })


  }
  </script>
</body>

</html>
<!-- end document-->