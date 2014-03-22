<?php 
//redirection section
if(isset($_GET['redirect'])) 
{ 
  require_once 'function.php';
  $url = get_URL($_GET['redirect']);
  header("Location: $url");
  exit();
} 
?>
<?php 
//API section
if(isset($_GET['api'])) 
{ 
  require_once 'function.php';
  echo api($_GET['api']);
  exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Link Short</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    #result{width:100%;top:20%;}
    #loading
    {
    width:100%; 
    height: 100px;
    margin-top: -100px; 
    background-image:url('loading.gif'); 
    background-repeat:no-repeat;
    background-position: center center;
    display: none;
    }
    .center{
    width:100%;
    margin: auto;
    }
    .footer{
    position: fixed;
    bottom: 10px;
    text-align: center;
    width: 100%;
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="center" style="margin-top:10px;">
      <div align="center" style="text-align:center;">
      <div id="result">
        <div id="loading"></div>
      </div>
        <form class="form-inline" role="form" id="myUrl">
          <div class="form-group">
            <input type="text" class="form-control" id="url" data-validation="url" style="width:450px;" required >
            <button type="submit" class="control-label btn btn-success" name="short">Short</button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.form-validator.min.js"></script>
    <script src="js/script.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <footer class="footer">
      &copy <?php echo date('Y'); ?> saiful.im
    </footer>
  </body>
</html>
