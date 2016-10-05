<html>
<head>
     <script type="text/javascript" src="js/ivank.js"  ></script>
     <script type="text/javascript" src="js/flipr.js"></script>
     <script type="text/javascript">
          function Go()
          {
               var width  = 480;
               var height = 640;
               var pages  = [  <?
                    $dir  = $_GET["dir"];
                    $imgs = scandir($dir);
                    for($i=2; $i<sizeof($imgs); $i++)
                    {
                    	echo("\"" . $dir . "/" . $imgs[$i] . "\"");
                    	if($i != sizeof($imgs)-1) echo(", ");
                    }
               ?>  ];
               var book = new Book("c", width, height, pages);
          }
     </script>
</head>
<body onload="Go();"><canvas id="c"></canvas></body>
</html>