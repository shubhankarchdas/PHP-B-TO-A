<!-- why needed?
html : static web page + php : dynamic web page -->


<!-- php with html  -->
<?php
$h2 = "blue"; // variable declaration
echo "<h1>Welcome to my website</h1>";
echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sint quibusdam aliquam ullam nulla assumenda. Modi, facilis alias? Ratione unde sint, sapiente cumque voluptatem maxime temporibus ullam eum soluta et repudiandae dolores id ipsa, amet dignissimos accusamus excepturi iusto placeat voluptatibus hic tempore quaerat. Enim odio quisquam itaque voluptates nostrum.

</p>";

echo "<h3 style = 'color:red'>This is a heading</h3>";

$name = "John Doe";

?>




<!-- php with html -->
<h1 style = 'color:<?php echo $h2; ?>'>
<?php 
echo "Hello, $name!"; 
?>
</h1>

<h2 style = 'color:<?php echo $h2; ?>'>
<?php 
echo "Hello, $name!"; 
?>
</h2 style = 'color:<?php echo $h2; ?>'>

<h2 style = 'color:<?php echo $h2; ?>'>
<?php 
echo "Hello, $name!"; 
?>
</h2>