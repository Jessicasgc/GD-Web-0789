<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);" >
<div class="body d-flex justify-content-between">
<h4>ADD NEW DATA SERIES</h4></div>
<hr>
<a class="navbar-brand fw-bold" href="/gd4_c_0789">PHP - Jessica</a>
            </div></nav>
            <div class="bg bg-light text-dark">
            <div class="container min-vh-100 mt-5 d-flex align-items-center justifycontent-center">
            <div class="card text-white bg-dark ma-5 shadow " style="min-width:
            25rem;">
            <div class="card-header fw-bold">Series</div>
            <div class="card-body">
            <form action="../process/addMoviesProcess.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formlabel">Name</label>
                    <input class="form-control" id="name" name="name"
                    aria-describedby="emailHelp">
                </div>
        
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formlabel">Genre</label>
                    <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                    <option value="Action">Action</option>
                    <option value="Romance">Romance</option>
                    <option value="Fiction">Fiction</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formlabel">Year Realese</label>
                    <input class="form-control" id="year"
                    name="year" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formlabel">Episode</label>
                    <input class="form-control" id="episode"
                    name="episode" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formlabel">Season</label>
                    <input class="form-control" id="season"
                    name="season" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formlabel">Synopsis</label>
                    <input class="form-control" id="synopsis"
                    name="synopsis" aria-describedby="emailHelp">
                </div>
        
        </div>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary"
        name="save">Save</button>
        </div>
        </form>
</div>
</aside>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>