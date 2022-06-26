<?php
/** @var array $filmDetail */

?>
<h1>Detail film</h1>
<div class="col-lg-8 mx-auto p-3 py-md-5">
    <h1><?=$filmDetail['name']?> (<?=$filmDetail['year_of_issue']?>)</h1>
    <p class="fs-5 col-md-8">Format: <?=$filmDetail['format']?></p>
    <p class="fs-5 col-md-8">Cast list: <?=$filmDetail['cast_list']?></p>
    <a href="/?DELETE_FILM=<?=$filmDetail['id']?>" class="btn btn-link">Delete</a>
</div>
<div class="row">
    <a href="/" class="btn btn-link">Back</a>
</div>

