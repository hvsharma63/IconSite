<?php include 'include/header.php'?>
<?php include 'include/sidebar.php'?>
<?php
    
?>
<div class="container-fluid" >
    
    <div class="col-md-8 col-md-offset-1" id="addPack">
        <center>
            <h1>.:: Records ::.</h1>
        </center>
    <div class="row">
        <div class="col-md-4">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
                <input type="text" class="form-control" placeholder="Search for...">
            </div><!-- /input-group -->
        </div>
    </div>
    <table id="table" class="table table-striped table-bordered" style="width:100%; margin-top:10px;">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            
        </tbody>
        
    </table>
</div>

<?php include 'include/footer.php'?>