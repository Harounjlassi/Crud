<?php

require_once'../models/personne.php';
require_once'../models/connexion.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="../css/style.css">



  <title>Display</title>

  <style>
  #search-results {
    border: 1px solid #ccc;
    margin-top: 10px;
    padding: 10px;
  }

  #search-results>div {
    margin-bottom: 10px;
  }

  #search-results>div>a {
    font-weight: bold;
  }

  #search-results>div>span {
    margin-left: 10px;
    color: #999;
  }
  </style>

</head>

<body>
  <div class="cont">

    <div class="row height d-flex justify-content-center align-items-center">

      <div class="col-md-6">

        <div class="form">
          <i class="fa fa-search"></i>
          <input type="text" id="search-input" name="search" class="mycomment form-control form-input"
            placeholder="Search anything...">
          <div id="results"></div>

          <span class="left-pan"><i class="fa fa-microphone"></i></span>
        </div>






      </div>

    </div>

  </div>

  <div class="content">

    <div class="container">


      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            <!-- Table rows will be dynamically added here -->
          </tbody>
        </table>

      </div>



      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

      <script>
      $(function() {

        $.ajax({
            //type: 'POST',
            //timeout: 3000,//timeout for the req
            //dataType:'',//data exepected from the server res : default  intelligence guess
            ///username:'',//for the authetication
            // password:'',//for the authetication
            //contentType:'multipart/form-data'//for the upload//content type for the req default is applacation/x-www-form-urlencoded
            method: 'post', //method used for the req
            url: '../models/back.php', //url to send the request , deault is the current url
            //cache:false,// default true
            //async:false,//def true
            data: {
              comment: 'getall',
              lastlogin: '2 days ago'
            }, ///data to send with the request

            success: function(data, status, xhr) { //functiuon to run when request succeeded
              console.log($('.mycomment').val());
              var resultsContainer = document.getElementById('results');
              var result = JSON.parse(data);
              console.log(data);
              document.querySelector('tbody').innerHTML = '';

              // Assume that the AJAX response is stored in the 'data' variable as an array of objects

              for (i = 0; i < result.length; i++) {
                var tr = document.createElement('tr');
                var th = document.createElement('th');
                var td1 = document.createElement('td');
                var td2 = document.createElement('td');
                var td3 = document.createElement('td');
                var td4 = document.createElement('td');
                var td5 = document.createElement('td');
                var td6 = document.createElement('td');

                var label = document.createElement('label');
                label.className = 'control control--checkbox';
                var input = document.createElement('input');
                input.type = 'checkbox';
                var div = document.createElement('div');
                div.className = 'control__indicator';

                label.appendChild(input);
                label.appendChild(div);

                th.appendChild(label);

                td1.textContent = result[i].id;


                td2.textContent = result[i].firstname;
                td3.textContent = result[i].lastname;
                td4.textContent = result[i].phonenumber;
                td5.textContent = result[i].gender;
                td6.textContent = result[i].email;
                console.log(result);
                tr.appendChild(th);
                tr.appendChild(td1);
                tr.appendChild(td2);
                tr.appendChild(td3);
                tr.appendChild(td4);
                tr.appendChild(td5);
                tr.appendChild(td6);

                // Append the table row to the table body element
                document.querySelector('tbody').appendChild(tr);
              }



            },
            error: function(xhr, status, error) { //functiuon to run when request error
              console.log(xhr); //xhr object
              console.log(status); //req status
              console.log(error); //error mshg


            },
            complete: function(xhr, status, ) { //functiuon to run when request error
              // function to run whenreq is complete
              //console.log(xhr);//xhr object
              //console.log(status);//req status



            },
          }),




          $("input").on('keyup', function() {
            var x = $('.mycomment').val();
            if ($.isEmptyObject(x)) {
              x = 'vide';
            } else {
              // input is not empty
            }




            $.ajax({
              //type: 'POST',
              //timeout: 3000,//timeout for the req
              //dataType:'',//data exepected from the server res : default  intelligence guess
              ///username:'',//for the authetication
              // password:'',//for the authetication
              //contentType:'multipart/form-data'//for the upload//content type for the req default is applacation/x-www-form-urlencoded
              method: 'post', //method used for the req
              url: '../models/back.php', //url to send the request , deault is the current url
              //cache:false,// default true
              //async:false,//def true
              data: {
                comment: x,
                lastlogin: '2 days ago'
              }, ///data to send with the request

              success: function(data, status, xhr) { //functiuon to run when request succeeded
                  console.log($('.mycomment').val());
                  var resultsContainer = document.getElementById('results');
                  var result = JSON.parse(data);
                  console.log(data);
                  document.querySelector('tbody').innerHTML = '';

                  // Assume that the AJAX response is stored in the 'data' variable as an array of objects

                  for (i = 0; i < result.length; i++) {
                    var tr = document.createElement('tr');
                    var th = document.createElement('th');
                    var td1 = document.createElement('td');
                    var td2 = document.createElement('td');
                    var td3 = document.createElement('td');
                    var td4 = document.createElement('td');
                    var td5 = document.createElement('td');
                    var td6 = document.createElement('td');


                    var label = document.createElement('label');
                    label.className = 'control control--checkbox';
                    var input = document.createElement('input');
                    input.type = 'checkbox';
                    var div = document.createElement('div');
                    div.className = 'control__indicator';

                    label.appendChild(input);
                    label.appendChild(div);

                    th.appendChild(label);

                    td1.textContent = result[i].id;


                    td2.textContent = result[i].firstname;
                    td3.textContent = result[i].lastname;
                    td4.textContent = result[i].phonenumber;
                    td5.textContent = result[i].gender;
                    td6.textContent = result[i].email;

                    console.log(result);
                    tr.appendChild(th);
                    tr.appendChild(td1);
                    tr.appendChild(td2);
                    tr.appendChild(td3);
                    tr.appendChild(td4);
                    tr.appendChild(td5);
                    tr.appendChild(td6);


                    // Append the table row to the table body element
                    document.querySelector('tbody').appendChild(tr);
                  }
                }




                ,
              error: function(xhr, status, error) { //functiuon to run when request error
                console.log(xhr); //xhr object
                console.log(status); //req status
                console.log(error); //error mshg


              },
              complete: function(xhr, status, ) { //functiuon to run when request error
                // function to run whenreq is complete
                //console.log(xhr);//xhr object
                //console.log(status);//req status



              }

            });
          });
      });
      </script>

</body>

</html>