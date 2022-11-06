<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Player Search</title>
    <link rel="stylesheet" href="../CSS/style8.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
  <form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">

    <div class="wrapper">
      <div class="search-input">
        <input type="text" placeholder="Type to search.." id="uname" onkeyup="search()">

        <div class="icon"><i class="fas fa-search"></i></div>

      </div>
    </div>
    <div class="header" id="c1">
        <h1>Player Info </h1>
    </div>
    <p id="showdata"></p> 



    <script src="../JS/player_search.js"></script>

</form>
  </body>
</html>





  
