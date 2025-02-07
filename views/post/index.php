<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;


?>


 <section class="bg-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-text">
                            <h3>Classic BLOG Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-post-area">
            <div class="container">
                <div class="row">
                    <div class="blog-post-area-style">
                            <div class="col-md-12">
                                <div class="single-post-big">
                                    <div class="big-image">
                                        <img src="img/post-image1.jpg" alt="">
                                    </div>
                                    <div class="big-text">
                                        <h3><a href="#">Post Title Goes Here.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <h4><span class="date">25 February 2017</span><span class="author">Posted By: <span class="author-name">Kabbo Liate</span></span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($posts as $post):?>
                            <div class="col-md-3">
                                <div class="single-post">
                                    <img src='<?= $post->img ?>'>
                                  
                                    <h3><a href="<?= \yii\helpers\Url::to(['post/view','id'=>$post->id]) ?>"><?= $post->title ?></a></h3>
                                    <h4><span>Posted By: <span class="author-name">Kabbo Liate</span></span>
                                    </h4>
                                    <?= $post->excerpt ?>
                                    <h4><span><?= Yii::$app->formatter->asDate($post->created_at) ?></span></h4>
                                </div>
                            </div>
                            <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="pegination">


                <div class="nav-links">
                <?= \yii\widgets\LinkPager::widget([
                    'pagination'=>$pages,
                ])?>
                </div>
            </div>
        </section>