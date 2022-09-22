<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
        solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
        0.19);"> 

    <div class="body d-flex justify-content-between">
        <h4>Edit MOVIE</h4>
        <a href="../page/listMoviesPage.php"> 
    <i style="color: red" class="fa fa-arrow-left fa-2x"></i></a>
    </div>
    <hr>

    <?php 
        include ('../db.php');
        $id = $_GET['id'];
        $query_mysql = mysqli_query($con, "SELECT * FROM movies WHERE id='$id'")
        or die(mysqli_error());
        $nomor = 1;
        while($row = mysqli_fetch_array($query_mysql)){
	?>

    
<form action="../process/editMovieProcess.php" method="post">
    <div class="mb-3">
        <label for="movie" class="form-label" >Name</label>
        <input class="form-control" id="name" name="name" placeholder="Nama Movie" value="<?php echo $row['id'] ?>">  
        <input class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>" >
    </div>

    <div class="mb-3">
        <label for="movie" class="form-label" >Genre</label>
        <select class="form-select" aria-label="Default select example" name="genre" id="genre">
            <option value="Action" <?php if(str_contains($row['genre'], 'Action')) echo "selected" ?>>Action</option>
            <option value="Romance" <?php if(str_contains($row['genre'], 'Romance')) echo "selected" ?>>Romance</option>
            <option value="Comedy" <?php if(str_contains($row['genre'], 'Comedy')) echo "selected" ?>>Comedy</option>
            <option value="Fantasty" <?php if(str_contains($row['genre'], 'Fantasty')) echo "selected" ?>>Fantasty</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="movie" class="form-label" >Release</label>
        <input class="form-control" id="realese" name="realese" placeholder="Year Movie" value="<?php  echo  $row['realese'] ?>"> 
    </div>

    <div class="mb-3">
        <label for="movie" class="form-label" >Season</label>
        <input class="form-control" id="season" name="season" placeholder="Season Movie" value="<?php echo $row['season'] ?>"> 
    </div>

    value="<?php echo $row['season'] ?>"
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary" name="add">Save</button>
    </div>
</form>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    
    
    