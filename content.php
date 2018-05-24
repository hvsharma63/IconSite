<?php
    include 'header.php';
    include 'inc/db.php';

   
?>

<div class="jumbotron stats">
    <center>
    <?php
        // $quary = "SELECT `title`,`subtitle` from addcatagary where id = $id ";
        // $result = mysqli_query($conn,$quary);
        
        // $row = mysqli_fetch_array($result)
        
            
    ?>
        <h1>27 Customisable Icons</h1>
        <p >A premium library of SVG icons for iOS, Android & web projects.</p>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
    </center>
</div>

<div class="row">
    <br>
    <div class="col-md-1"></div>
    <div class="col-md-10" id="navbar1">
        <center>
        <div class="col-md-1 btn btn-info btn-sm button">
            <a href="#"><span class="glyphicon glyphicon-chevron-left"></span>Go Back</a>
        </div>
        <!-- navigation start -->
        <div class="col-md-10" >
            <ul class="nav1">
                <li class="active">
                    <a data-toggle="tab" href="#outline "><span><img src="img/outline.svg" alt="outline"></span> Outline</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#colored"><span><img src="img/colored.svg" alt="colored"></span> Colored</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#glyphicon"><span><img src="img/glyph.svg" alt="glyph"></span> Glyphicon</a>
                </li>
            </ul>

        </div>
        <!-- navigation ends -->
        <div class="col-md-1 btn btn-info btn-sm button">
            <a href="#"><span class="glyphicon glyphicon-download-alt"></span> Download</a>
        </div>
        </center>   
    </div>
    <div class="col-md-1"></div>
</div>

<div class="tab-content">
    <div id="outline" class="tab-pane fade in active">
        <center><h1>Gride Size: 48px</h1></center>
        <center><img src="img/icons1.png" alt="user-interface" class="img-responsive"></center>
    </div>
    <div id="colored" class="tab-pane fade">
        <center><h1>Gride Size: 48px</h1></center>
        <center><img src="img/icons2.png" alt="user-interface" class="img-responsive"></center>
    </div>
    <div id="glyphicon" class="tab-pane fade">
        <center><h1>Gride Size: 48px</h1></center>
        <center><img src="img/icons3.png" alt="user-interface" class="img-responsive"></center>
    </div>
</div>

<?php
    include 'footer.php';
?>