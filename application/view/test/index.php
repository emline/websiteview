<div class="container">
    <h2><?php if (isset($article->article_headline)) echo $article->article_headline; ?></h2>
    <?php if (isset($article->article_body)) echo $article->article_body; ?>
</div>
