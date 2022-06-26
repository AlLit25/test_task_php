<?php
/** @var array $allFilms */
?>
<div class="mt-5">
    <h1>Main page</h1>
    <div class="py-3 mb-3 border-bottom">
        <div class="container-fluid d-grid  align-items-center" >
            <div class="row">
                <div class="col-5">
                    <form class="row" role="search" action="" method="post">
                        <div class="col">
                            <input type="search"
                                   class="form-control"
                                   placeholder="Search by name film"
                                   aria-label="Search"
                                   name="SEARCH_BY_NAME"
                                   value="<?=$_POST['SEARCH_BY_NAME']?>">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-light">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-5">
                    <form class="w-100 me-3 row" role="search" action="" method="post">
                        <div class="col">
                            <input type="search"
                                   class="form-control"
                                   placeholder="Search by name actor"
                                   aria-label="Search"
                                   name="SEARCH_BY_ACTOR"
                                   value="<?=$_POST['SEARCH_BY_ACTOR']?>">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-light">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-2">
                    <form class="row" role="search" action="" method="post">
                        <div class="col">
                            <input type="hidden"
                                   class="form-control"
                                   placeholder="Search by name film"
                                   aria-label="Search"
                                   name="SEARCH_RESET"
                                   value="Y">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-light">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-4">
        <form class="container-fluid pb-3" method="post" action="" enctype="multipart/form-data">
            <input class="form-control" type="file" name="IMPORT_FILE">
            <button type="submit" class="btn btn-primary">Import from file</button>
        </form>
        <div>
            <a href="/?ADD_FILM=Y" class="btn btn-success">Add film</a>
        </div>
    </div>
    <h2>Films list</h2>
    <?php foreach ($allFilms as $filmData):?>
        <div class="container-fluid pb-3">
            <a href="?ID_FILM=<?=$filmData['id']?>"><?=$filmData['name']?></a>
        </div>
    <?php endforeach;?>
</div>

