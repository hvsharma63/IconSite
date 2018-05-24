<?php include 'include/header.php'?>
<?php include 'include/sidebar.php'?>
<?php

    if (isset($_POST['submit'])) 
    {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $outlineimage = $_FILES['outline']['name'];
        $coloredimage = $_FILES['colored']['name'];
        $glyphiconimage = $_FILES['glyphicon']['name'];
        $coverimage = $_FILES['coverimage']['name'];
        $link = $_POST['link'];

        $target_outlineimage = "../uploads/".basename($outlineimage);
        $target_coloredimage = "../uploads/".basename($coloredimage);
        $target_glyphiconimage = "../uploads/".basename($glyphiconimage);
        $target_coverimage = "../uploads/".basename($coverimage);

        $quary = "INSERT INTO user (coverimage,outlineimage,coloredimage,glyphiconimage,title,subtitle,downloadlink) VALUES ('$coverimage','$outlineimage','$coloredimage','$glyphiconimage',' $title','$subtitle','$link')";
        echo $quary;
        exit();
        //mysqli_query($conn,$quary);
    }


?>
<div class="container-fluid" >
    
    <div class="col-md-8 col-md-offset-1" id="addPack">
        <form method="POST" enctype="multipart/form-data">
            <center>
                <h1>Image Upload</h1>
            </center>
            <div class="row" style="margin-top:50px;">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-btn ">
                            <button class="btn btn-lg" type="button">Title</button>
                        </span>
                        <input class="form-control input-lg" name="title" placeholder="The Title describes your artistic work" rows=1></input>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-lg" type="button" style="margin-bottom:72px;">Go!</button>
                        </span>    
                        <textarea class="form-control input-lg" name="subtitle" placeholder="Describe about your work in few words!" rows=4></textarea>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div>
            <div class="row" style="margin-top:30px">
                <div class="col-md-4">
                    <div class="panel-content panel-default">
                        <div class="panel-heading panel-heading-custom">
                            <h3 class="panel-title">Outline Image</h3>
                        </div>
                        <div class="panel-body">
                            <input type="file" name="outline" id="img1">
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="panel-content panel-default">
                        <div class="panel-heading panel-heading-custom2">
                            <h3 class="panel-title">Coloured Image</h3>
                        </div>
                        <div class="panel-body">
                            <input type="file" name="colored" id="img1">
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="panel-content panel-default">
                        <div class="panel-heading panel-heading-custom3">
                            <h3 class="panel-title">Glyphicon Image</h3>
                        </div>
                        <div class="panel-body">
                            <input type="file" name="glyphicon" id="img1">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel-content panel-default">
                        <div class="panel-heading panel-heading-custom4">
                            <h3 class="panel-title">Cover Image</h3>
                        </div>
                        <div class="panel-body">
                            <input type="file" name="coverimage" id="img1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-btn ">
                            <button class="btn btn-md" type="button">Title</button>
                        </span>
                        <input type="text "class="form-control" placeholder="Paster the link here" name="link">
                    </div><!-- /input-group -->
                </div>
            </div> 
            <div class="row" style="margin-top:10px">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-success btn-lg" value="Submit" name="submit">
                </div>
            </div>
        </form>
    </div>

<?php include 'include/footer.php'?>