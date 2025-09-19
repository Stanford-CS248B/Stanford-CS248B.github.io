
<div class="home_container">

<!-- <div class="home_title">Fundamentals of Computer Graphics: Animation and Simulation <span style="font-size: 12pt;">(CS248B)</span> </div> -->
<div style="padding-top: 0px; padding-bottom: 5px;" class="home_title">
<span style="padding-top: 0px; padding-bottom: 0px; font-size: 30pt;">Fundamentals of Computer Graphics:</span><br>Animation and Simulation</div>

<p>This page contains lecture slides for the Autumn 2024 offering of CS248B.

</p>

<p><b>Lectures for each class will be made available shortly before class.</b></p>

<?php

function sortByDate($a, $b) {
    $ta = strtotime($a->lecture_date);
    $tb = strtotime($b->lecture_date);
    return (int)($ta > $tb);
}

usort($lectures_uploaded, "sortByDate");

foreach ($lectures_uploaded as $lecture) {
    ?>
<div class="book_lecture">
     <div class="book_lecture_title" style="padding-bottom: 0px">
     <a href="<?php echo lecture_url($lecture->shortname); ?>">Lecture <?php echo $lecture->number; ?>: <?php echo $lecture->title; ?></a></div>
     <!-- <div class="colored_text book_lecture_subtitle"></div> -->

     <div class="book_lecture_indent">

</div>
<?php
}
?>

<p>&nbsp;</p>

</div>


