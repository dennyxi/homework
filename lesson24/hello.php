<?php
// define variables
$nameErr = $ageErr = $toysErr ="";
$name = $age = "";
$toys = array();
if ($_SERVER['REQUEST_METHOD']=='POST') {
  if (empty($_POST['name'])) {
    $nameErr ='You must enter your name.';
  } else {
    $name = $_POST['name'];
  }
  $agecheck = (isset($_POST['age']) ? $_POST['age']: null);
  if ( !is_numberic($agecheck)){
    $aggErr = "You must enter a valid age.";
  } else {
    $age = $_POST['age'];
  }
  if (empty($_POST['toys'])) {
    $toysErr = 'You must choose at least one toy.';
  } else{
    $toys = $_POST['toys'];
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>homework lesson12</title>
    <link rel="stylesheet" href="css/style.css">

    </style>
  </head>
  <body>

    <h1 class="text">Registation Form</h1>
    <p class="text">Please fill out the form bellow to register for our site.</p>
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <p>
        <label for="name"><b>Name</b></label>
        <br>
        <input  class="name" value="<?php echo htmlspecialchars($name);?>">
        <span class="error"><?php echo $nameErr;?></span>
      </p>
      <p>
        <label for="age"><b>Age:</label></b><br>
        <input  name="age" value="<?php echo $ageErr;?>">
        <span class="error"><?php echo $ageErr;?></span>
      </p>
      <p>
        <label><b>Toys:</b></label>
        <br>

        <?php
          $options = array('Digital Camera','MP3 Player','Tablet');
          foreach ($options as $option){
            echo '<label><input type="checkbox" name="toys[]" >';
            echo 'value="'.$option .'"';
          if (is_array($toys) && in_array($option, $toys)){
            echo "checked";
          }
          echo">".$option . "</label><br>";

          }
        ?>
        <span class="error"><?php echo $toysErr; ?></span>
      </p>
      <p><input type="submit"value="register" /></p>
    </form>







  </body>
</html>
