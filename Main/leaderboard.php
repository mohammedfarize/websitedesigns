<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">
        <title>Leaderboard</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
<!--        <link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">  
        <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet'>  

        <!-- Custom styles for this template -->
        <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>
         
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>


       
      <div class="navbody">    
       <div class="container">   
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                   
                       
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    
                    <a class="navbar-brand" href="/index.html">Interstellar</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="#play">Play</a></li>
                        <li class="active"><a href="..//Main/leaderboard.html">Leaderboard</a></li>
                        <li><a href="rules.html">Rules and regulations</a></li>
                        <li><a href="#about">About</a></li>
                    
                        
                    </ul>
                </div>     
            </div>
        </nav>
        </div>       
        </div> 
        
        
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-9 col-sm-offset-3 col-md-0 col-md-offset-2 main">
<!--          <h1 class="page-header">Leaderboard</h1>-->
            <h1 class="ledBoard" style="padding:30px; font-family:Electrolize; color:#8b8b8b;">Leaderboard</h1>
          <div class="row placeholders">
<!--        <div class="col-xs-6 col-sm-3 placeholder">-->
            <div id="leader">
<!--           <img class="img-circle" src="i/led.jpg">-->
              </div>
          </div>
          </div>
    
<!--            
        <div class="leaderTable">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Position</th>
                  <th>Name</th>
                  <th>Question</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Jishnu</td>
                  <td>20</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Sudhin</td>
                  <td>18</td>
                </tr>
               <tr>
                  <td>2</td>
                  <td>Sudhin</td>
                  <td>18</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    -->
    
    
 <div class="tableclass" style="font-family:Electrolize;">   
    <?php
echo "<link rel= 'stylesheet' type= 'text/css' href='bootstrap.css' />";
$connection = mysql_connect ("localhost","root","") or die(mysql_error());
mysql_select_db("cec",$connection)or die(mysql_error());
$select_query="select * from top;";
$query_executed=mysql_query($select_query);

 echo "<table class='table table-hover'>";
    echo "<caption> Leader Board</caption";
    echo "<thead>";
     echo "<tr>";
      echo "<th>Name</th>";
      echo "<th>Point</th>";
     echo "</tr>";
     echo "</thead>";
     echo "<tbody>";
while($result =mysql_fetch_array($query_executed))
{
     echo "<tr>";
        echo"<td>";
        echo $result['NAME'];
         echo "</td>";
         echo "<td>";
       echo $result['POINT'];
       echo "</td>";
       echo "</tr>";
}
 echo "</tbody>";
echo "</table>";

?>
</div>

    
     <footer>
				<div class="container">
						<div class="footer-ribon">
				        <span>Contact</span>
						</div>
						<div class=footer-info>
						<p style="font-size:20px; padding-left:38%;">College of engineering Chengannur</p>
						<p style="font-size:20px; padding-left:42%;">interstellar@gmail.com</p>
						</div>
						
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							
							<div class="span7">
								<p style="font-size:20px; padding-left:40%;">© Copyright 2014 by FoCES</p>
							</div>
							
						</div>
					</div>
				</div>
  </footer>
    
    
    
    
    

		                                              
       
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <!-- compiled and minified Bootstrap JavaScript -->
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    
    
    
    
</html>
