<?php
function lorem($paragraphs = 1, $reorder = true)
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
        if ($reorder) {
            shuffle($sentences);
        }
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
    <body style="background:#eee">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Foo</a></li>
                    <li><a href="#">Bar</a></li>
                    <li>Baz</li>
                </ul>
            </div>
            <div class="margin-bottom"></div>
            <div class="grid grid--gutters">
                <div class="grid__col grid__col--sm-12 grid__col--lg-8">
                    <div class="card">
                        <?=lorem(4, 1)?>
                    </div>
                </div>
                <div class="grid__col grid__col--sm-12 grid__col--lg-4">
                    <div class="card">
                        <div class="card__header">
                            <h3 class="card__title">Contact us</h3>
                        </div>
                        <div class="card__body">
                            <form class="form" action="#">
                                <div class="grid grid--gutters">
                                    <div class="grid__col grid__col--sm-6">
                                        <div class="form__group">
                                            <label for="">First Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="grid__col grid__col--sm-6">
                                        <div class="form__group">
                                            <label for="">Last Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="margin-bottom"></div>
            <div class="grid grid--gutters">
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 margin-bottom">
                    <div class="card card--float card--flex">
                        <div class="card__header card__header--expand">
                            <img class="card__image" src="http://loremflickr.com/800/600/cats" width="100%" alt="Placeholder Image" />
                        </div>
                        <div class="card__body">
                            <?=lorem(1, 0)?>
                        </div>
                        <div class="card__footer">
                            <a href="#" class="button button--success button--block button--xl">Click me</a>
                        </div>
                    </div>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 margin-bottom">
                    <div class="card card--float card--flex">
                        <div class="card__header card__header--expand">
                            <img class="card__image" src="http://loremflickr.com/800/600/cats" width="100%" alt="Placeholder Image" />
                        </div>
                        <div class="card__body">
                            <?=lorem(1, 0)?>
                        </div>
                        <div class="card__footer">
                            <a href="#" class="button button--info button--block button--xl">Click me</a>
                        </div>
                    </div>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 margin-bottom">
                    <div class="card card--float card--flex">
                        <div class="card__header card__header--expand">
                            <img class="card__image" src="http://loremflickr.com/800/600/cats" width="100%" alt="Placeholder Image" />
                        </div>
                        <div class="card__body">
                            <?=lorem(1, 0)?>
                        </div>
                        <div class="card__footer">
                            <a href="#" class="button button--warning button--block button--xl">Click me</a>
                        </div>
                    </div>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 margin-bottom">
                    <div class="card card--float card--flex">
                        <div class="card__header card__header--expand">
                            <img class="card__image" src="http://loremflickr.com/800/600/cats" width="100%" alt="Placeholder Image" />
                        </div>
                        <div class="card__body">
                            <?=lorem(1, 0)?>
                        </div>
                        <div class="card__footer">
                            <a href="#" class="button button--danger button--block button--xl">Click me</a>
                        </div>
                    </div>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 margin-bottom">
                    <div class="card card--float card--flex">
                        <div class="card__header card__header--expand">
                            <img class="card__image" src="http://loremflickr.com/800/600/cats" width="100%" alt="Placeholder Image" />
                        </div>
                        <div class="card__body">
                            <?=lorem(1, 0)?>
                        </div>
                        <div class="card__footer">
                            <a href="#" class="button button--success button--block button--inset button--lg">Click me</a>
                        </div>
                    </div>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 margin-bottom">
                    <div class="card card--float card--flex">
                        <div class="card__header card__header--expand">
                            <img class="card__image" src="http://loremflickr.com/800/600/cats" width="100%" alt="Placeholder Image" />
                        </div>
                        <div class="card__body">
                            <?=lorem(1, 0)?>
                        </div>
                        <div class="card__footer">
                            <a href="#" class="button button--info button--block button--inset button--lg">Click me</a>
                        </div>
                    </div>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 margin-bottom">
                    <div class="card card--float card--flex">
                        <div class="card__header card__header--expand">
                            <img class="card__image" src="http://loremflickr.com/800/600/cats" width="100%" alt="Placeholder Image" />
                        </div>
                        <div class="card__body">
                            <?=lorem(1, 0)?>
                        </div>
                        <div class="card__footer">
                            <a href="#" class="button button--warning button--block button--inset button--lg">Click me</a>
                        </div>
                    </div>
                </div>
                <div class="grid__col grid__col--sm-6 grid__col--md-4 grid__col--lg-3 margin-bottom">
                    <div class="card card--float card--flex">
                        <div class="card__header card__header--expand">
                            <img class="card__image" src="http://loremflickr.com/800/600/cats" width="100%" alt="Placeholder Image" />
                        </div>
                        <div class="card__body">
                            <?=lorem(1, 0)?>
                        </div>
                        <div class="card__footer">
                            <a href="#" class="button button--danger button--block button--inset button--lg">Click me</a>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table margin-bottom">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Stuff</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                    </tr>
                    <tr>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                    </tr>
                    <tr>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                    </tr>
                    <tr>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                    </tr>
                    <tr>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                    </tr>
                    <tr>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                    </tr>
                    <tr>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                        <td>Some Example</td>
                    </tr>
                </tbody>
            </table>
            <ul class="pagination">
                <li class="pagination__prev"><a href="#"></a></li>
                <li><a href="#">1</a></li>
                <li class="pagination__active">2</li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="pagination__dots"></li>
                <li><a href="#">12</a></li>
                <li><a href="#">13</a></li>
                <li class="pagination__next"><a href="#"></a></li>
            </ul>
        </div>
    </body>
</html>
