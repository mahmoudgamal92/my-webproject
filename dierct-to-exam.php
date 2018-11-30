<?php


$exam = $_POST['exam'];
if($exam=='c++')
header("location:c++.html?q=1");
else if($exam=='java')
header("location:java.html?q=1");

else if($exam=='graphics')
header("location:graphics.html?q=1");

else if($exam=='network')
header("location:network.html?q=1");

else if($exam=='paython')
header("location:paython.html?q=1");

else if($exam=='software-development')
header("location:software-development.html?q=1");

else if($exam=='web')
header("location:web.html?q=1");

else if($exam=='csharp')
header("location:csharp.html?q=1");


?>