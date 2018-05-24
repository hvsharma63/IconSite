
<?php
    session_start();
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="img/logo1.jpg">
            <img src="img/logo1.jpg" alt="MythicsDesign" srcset="">
        </a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="include/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<nav class="col-sm-4 navbar navbar-inverse navbar-fixed-left ">
    <div class="nav navbar-nav">
        <div class="panel-group">
            <div class="panel panel-sidebar">
                <div class="panel-heading panel-heading-sidebar">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Icon Packs</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="addPack.php">Add</a></li>
                        <li class="list-group-item"><a href="showAll.php">Show All</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
