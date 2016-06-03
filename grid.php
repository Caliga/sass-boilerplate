<?php
function lorem($paragraphs = 1)
{
    $sentences = [
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
        'Nullam erat nunc, dapibus blandit viverra et, interdum ac sapien. ',
        'Pellentesque bibendum magna at nisl pellentesque aliquet. ',
        'Pellentesque at quam eu libero suscipit mollis sit amet dapibus erat. ',
        'Aliquam eu lorem libero. ',
    ];
    $lipsum = '';
    for ($i = 0; $i < $paragraphs; $i++) {
        shuffle($sentences);
        $lipsum .= '<p>';
        for ($x = 0; $x < count($sentences); $x++) {
            $lipsum .= $sentences[$x];
        }
        $lipsum .= '</p>';
    }
    return $lipsum;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>HTML5 Test Page</title>
        <link rel="stylesheet" href="/build/style.css">
    </head>
    <body>
        <div class="container">
            <div class="grid grid--gutters grid--reverse">
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2" style="background: rgb(200, 255, 255)">
                    <?=lorem(1)?>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2" style="background: rgb(255, 200, 255)">
                    <?=lorem(1)?>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2" style="background: rgb(255, 255, 200)">
                    <?=lorem(1)?>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2" style="background: rgb(200, 200, 255)">
                    <?=lorem(1)?>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2" style="background: rgb(200, 255, 200)">
                    <?=lorem(1)?>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2" style="background: rgb(255, 200, 200)">
                    <?=lorem(1)?>
                </div>
            </div>
        </div>
    </body>
</html>
