<?php

?>
<form method="post" action="" class="col-5 mt-5">
    <h1>Add new film</h1>

    <?php if (!empty($_POST['ADD_FILM'])):?>
        <p style="color: red">Please fill in all the fields</p>
    <?php endif;?>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text"
               class="form-control"
               id="exampleFormControlInput1"
               name="ADD_FILM[NAME]"
               value="<?=$_POST['ADD_FILM']['NAME']?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Year</label>
        <input type="number"
               class="form-control"
               id="exampleFormControlInput2"
               name="ADD_FILM[YEAR]"
               value="<?=$_POST['ADD_FILM']['YEAR']?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput3" class="form-label">Format</label>
        <input type="text"
               class="form-control"
               id="exampleFormControlInput3"
               name="ADD_FILM[FORMAT]"
               value="<?=$_POST['ADD_FILM']['FORMAT']?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea4" class="form-label">Cast list</label>
        <textarea class="form-control"
                  id="exampleFormControlTextarea4"
                  rows="3"
                  name="ADD_FILM[CAST_LIST]"><?=$_POST['ADD_FILM']['CAST_LIST']?></textarea>
    </div>
    <a href="/" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-success">Add</button>
</form>

