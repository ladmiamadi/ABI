<?php
require('header.php');
require_once('./functions.php');
?>
<section class='container'>

<?php


$parfum=[
    'fraise'=> 4,
    'chocolat'=> 6,
    'vanille'=>3
];

$quantite=[
    'cornet'=>2,
    'pot'=>4
];

$supplement=[
    'pepite'=>2,
    'caramel'=>3
];


?>
<h1>composez votre glace:</h1>

<form action='./demo.php' method='GET' >

  <?php
  foreach($parfum as $perfum=>$prix)
  {
      
      ?>
      <div class='checkbox'>
    <label> 
    
    <?php echo checkbox('parfum', $perfum, $_GET) ?>
        <?php echo $perfum ?>--<?php echo $prix?>€
    </label>
      <?php
  }
  $ingredient=[];
  $total=0;

if(isset($_GET['parfum']))
{
    foreach($_GET['parfum'] as $parfums)
    {
        if(isset($parfum[$parfums])){
        $total +=$parfum[$parfums];
        $ingredient[]=$parfums;
        };
    }
}
  ?>  
</div>

<?php 
foreach($quantite as $quantity=>$price)
{


?>
<div class='radio'>
    <label>
        <?php
        echo radio('quantite', $quantity, $_GET);
        ?>
    
    <?php  echo $quantity ?>--<?php echo $price; ?>€
    </label>
 <?php
}
 ?>   
   
    
</div>


<?php 
foreach($supplement as $plus=>$price)
{


?>
<div class='checkbox'>
    <label>
    <?php echo checkbox('supplement', $plus, $_GET); ?>
    <?php echo $plus ?>--<?php echo $price; ?>--€
    
</label>
    <?php
}
 ?> 
</div>


<button classe='btn btn-primary' type='submit'>Calculer le prix</button>
</form>
<?php  

?>
<div class='alert alert-success'>
    <p>le prix total: <?php echo $total; ?> €</p>

</div>
</section>

<?php
require('footer.php')
?>