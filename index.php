<?php
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>curl_copy_handle</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:200'>
  <link rel="stylesheet" href="css/style0.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="all">
    <div id="myDiv" onclick="redirectToPage()" class="lefter">
      <div class="text">Create</div>


    </div>

    <div id="myDivread" onclick="redirectToPageread()" class="left">
      <div class="text">Read</div>
    </div>
    <div class="center">
      <div class="explainer"><span>Crud</span></div>
      <div class="text">Crud</div>
    </div>
    <div id="myDivupdate" onclick="redirectToPage()" class="right">
      <div class="text">Update</div>
    </div>
    <div id="myDivdelete" onclick="redirectToPage()" class="righter">
      <div class="text">Delete</div>
    </div>
  </div>
  <!-- partial -->

  <!-- <a href="" style="color:red">@haroun.jlassi</a>
 -->
</body>

<script>
// JavaScript
const myDiv = document.getElementById("myDiv");
const myDivread = document.getElementById("myDivread");
const myDivupdate = document.getElementById("myDivupdate");
const myDivdelete = document.getElementById("myDivdelete");



myDiv.addEventListener("click", redirectToPage);

function redirectToPage() {
  window.location.href = "add.php";
}

myDivread.addEventListener("click", redirectToPageread);

function redirectToPageread() {
  window.location.href = "read.php";
}

myDivupdate.addEventListener("click", redirectToPageupdate);

function redirectToPageupdate() {
  window.location.href = "update.php";
}
myDivdelete.addEventListener("click", redirectToPagedelete);

function redirectToPagedelete() {
  window.location.href = "delete.php";
}
</script>

</html>