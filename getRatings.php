<?php
// Считываем содержимое файла с оценками
$ratings = file("ratings.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Считаем общее количество голосов
$totalVotes = count($ratings);

// Считаем количество каждой оценки
$counts = array_count_values($ratings);
ksort($counts);

// Выводим количество каждой оценки в виде горизонтальных блоков
foreach ($counts as $rating => $count) { ?>
    <h6><?php echo $rating ?></h6>
    <div class='progress my-2'>
        <?php
        $width = ($count / $totalVotes) * 100;
        ?>
        <div class='progress-bar' role='progressbar' style='width:<?php echo $width ?>%;' aria-valuenow='<?php echo $width ?>'
             aria-valuemin='0' aria-valuemax='100'><?php echo $count ?></div>
    </div>
    <?php
}
