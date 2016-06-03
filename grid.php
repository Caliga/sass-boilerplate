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
            <div class="grid grid--gutters">
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--default">Button</a>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--success">Button</a>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--info">Button</a>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--warning">Button</a>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--danger">Button</a>
                </div>
            </div>
            <div class="grid grid--gutters">
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--inset button--block button--default">Button</a>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--inset button--block button--success">Button</a>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--inset button--block button--info">Button</a>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--inset button--block button--warning">Button</a>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 grid__col--xl-2">
                    <a href="#" class="button button--inset button--block button--danger">Button</a>
                </div>
            </div>
        </div>
    </body>
</html>
