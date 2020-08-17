<style>
    /* Eric Meyer's Reset CSS v2.0 - http://cssreset.com */
    html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}

    body {
        background: #212529;
        margin-top: 60px;
        margin-left: 60px;
        margin-bottom: 60px;
        margin-right: 60px;
    }

    .bacon-blog-post {
        position: relative;
        width: 100%;
        background: #343a40;
        font-weight: 400;
        line-height: 1.45;
    }

    .bacon-blog-post-inner { padding: 42px; }

    .bacon-blog-post .wp-post-image {
        width: 100%;
        height: auto;
    }

    .bacon-blog-post h1, .bacon-blog-post h2, .bacon-blog-post h3, .bacon-blog-post h4 {
        margin: 1.414em 0 0.5em;
        font-weight: 700;
        line-height: 1.2;
        font-family: Open Sans, sans-serif;
    }

    .bacon-blog-post h1 a, .bacon-blog-post h2 a, .bacon-blog-post h3 a, .bacon-blog-post h4 a {
        display: inline-block;
        color: #000;
        text-decoration: none;
    }

    .bacon-blog-post h1 {
        margin-top: 0;
        font-size: 3.157em;
    }

    .bacon-blog-post h2 { margin-top: 0; font-size: 2.369em;}
    .bacon-blog-post h3 {font-size: 1.777em;}
    .bacon-blog-post h4 {font-size: 1.333em;}
    .bacon-blog-post small, .bacon-blog-post .font_small {font-size: 0.75em;}

    .bacon-blog-post p, .bacon-blog-post p a {
        font-family: Lora, Times New Roman, serif;
        font-size: 20px;
        line-height: 28px;
    }

    .bacon-blog-post p { margin-bottom: 1.3em; }
    .bacon-blog-post p:last-child { margin-bottom: 0; }
    .bacon-blog-post p a { color: #B21A13; }

    .bacon-blog-post blockquote {
        margin: 1.3em;
        padding-left: 1.3em;
        border-left: rgb(224,40,43) solid 0.25em;
        font-style: italic;
    }

    .bacon-shadow:after {
        position: absolute;
        content: "";
        left: 20px;
        right: 20px;
        bottom: 0px;
        z-index: -1;
        box-shadow: 0 0 30px 4px rgba(0,0,0,0.60);
    }
</style>

<?php
$id = Yii::$app->request->get('id');
$blogs = \common\models\Blog::findOne(['id'=>$id]);
?>
<div style="width: 710px; margin: 0 auto;">
    <div class="bacon-blog-post bacon-shadow">
        <img src="<?=\yii\helpers\Url::to(["../../css/img/$blogs->image"], true)?>" class="wp-post-image">
        <div class="bacon-blog-post-inner">
            <?php if(\Yii::$app->language == 'ru'){ ?>
                <h2>
                    <a href="http://garybacon.com/post/finding-what-challenges-you/" rel="bookmark" title="Permanent link to Finding What Challenges You" class="title-row" style="color: whitesmoke">
                        <?php echo  $blogs->title_ru; ?>
                    </a>
                </h2>
            <?php } elseif (\Yii::$app->language == 'uz'){ ?>
                <h2>
                    <a href="http://garybacon.com/post/finding-what-challenges-you/" rel="bookmark" title="Permanent link to Finding What Challenges You" class="title-row" style="color: whitesmoke">
                        <?php echo  $blogs->title_uz; ?>
                    </a>
                </h2>
            <?php } elseif (\Yii::$app->language == 'en'){ ?>
                <h2>
                    <a href="http://garybacon.com/post/finding-what-challenges-you/" rel="bookmark" title="Permanent link to Finding What Challenges You" class="title-row" style="color: whitesmoke">
                        <?php echo  $blogs->title_en; ?>
                    </a>
                </h2>
            <?php }?>


            <?php if(\Yii::$app->language == 'ru'){ ?>
                <p><?php echo  $blogs->about_ru; ?></p>
            <?php } elseif (\Yii::$app->language == 'uz'){ ?>
                <p><?php echo  $blogs->about_uz; ?></p>
            <?php } elseif (\Yii::$app->language == 'en'){ ?>
                <p><?php echo  $blogs->about_en; ?></p>
            <?php }?>
        </div>
    </div>
</div>