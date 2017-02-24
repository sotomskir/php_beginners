<?php
function changeColor($buffer)
{
  return (str_replace("Blue", "Red", $buffer));
}
//ob_start() function in PHP5
ob_start("changeColor");
?>
<html>
<tile>Ob_start() funtion Tutorials,Examples in Php5</title>
<body>
<span>Blue Car</span>
</body>
</html>
<?php
//ob_end_flush() function in PHP5
ob_end_flush();
?>
