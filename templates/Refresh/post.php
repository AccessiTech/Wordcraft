<h1><a href="<?php echo $WCDATA["post"]["url"] ?>"><?php echo $WCDATA["post"]["subject"]; ?></a> <small>by <?php echo $WCDATA["post"]["user_name"]; ?></small></h2>

<div class="body">
    <?php echo $WCDATA["post"]["body"]; ?>
</div>

<p class="post-footer align-right">
    <a href="<?php echo $WCDATA["post"]["url"]; ?>" class="readmore">Read more</a>
    <a href="<?php echo $WCDATA["post"]["url"]; ?>#comments" class="comments">Comments (<?php echo $WCDATA["post"]["comment_count"]; ?>)</a>
    <span class="date"><?php echo $WCDATA["post"]["post_date"]; ?></span>
    <?php if(!empty($WCDATA["post"]["tags"])) { ?>
        <br />
        Tags:
        <?php foreach($WCDATA["post"]["tags"] as $tag) { ?>
            <a href="<?php echo $tag["url"]; ?>"><?php echo $tag["tag"]; ?></a>&nbsp;&nbsp;
        <?php } ?>
    <?php } ?>

</p>


<a name="comments"></a>
<?php if(!empty($WCDATA["comments"])) { ?>
    <div id="comments">
        <?php foreach($WCDATA["comments"] as $comment) { ?>

                <?php if(!empty($comment["url"])){ ?>
                    <h4><a rel="nofollow" href="<?php echo $comment["url"]; ?>"><?php echo $comment["name"]; ?></a> Says:</h4>
                <?php } else { ?>
                    <h4><?php echo $comment["name"]; ?> Says:</h4>
                <?php } ?>
                <p><?php echo $comment["comment"]; ?><p>

        <?php } ?>
    </div>
<?php } ?>


<?php if($WCDATA["post"]["allow_comments"]) { ?>
    <div id="add-comment">
        <a name="add_comment"></a>
        <h3>Add A Comment</h3>
        <form action="<?php echo $WCDATA["comment_url"]; ?>" method="post">
            <input type="hidden" class="text-input" name="post_id" value="<?php echo $WCDATA["post"]["post_id"]; ?>" />

            <?php if(!empty($WCDATA["user"])) { ?>

                You are logged in as <?php echo $WCDATA["user"]["user_name"]; ?>
                <br /><br />

            <?php } else { ?>

                Your Name:<br />
                <input type="text" class="text-input" name="your_name" value="" maxlength="50" size="30" />
                <br /><br />

                Your Email:<br />
                <input type="text" class="text-input" name="your_email" value="" maxlength="50" size="30" />
                <br /><br />

                Your URL:<br />
                <input type="text" class="text-input" name="your_url" value="" maxlength="50" size="30" />
                <br /><br />

                <?php if($WCDATA["captcha"]) { ?>
                    Spam Prevention:<br />
                    <?php echo $WCDATA["captcha"]; ?>
                    <br /><br />
                <?php } ?>


            <?php } ?>

            Your Comment:<br />
            <textarea name="your_comment" id="your-comment" /></textarea>
            <br /><br />

            <input type="submit" value="Submit" />
        </form>
    </div>

<?php } else {?>

    <p>Comments are disabled for this post.</p>

<?php } ?>