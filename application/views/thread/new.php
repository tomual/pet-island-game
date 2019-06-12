<?php $this->load->view('header') ?>

<div class="row">
    <div class="col-lg-12">
        <div class="topic"><a href="">New Thread</a></div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <?php alerts() ?>
        <form method="post">
            <div class="form-group">
                <label for="topic">Topic</label>
                <select name="topic" id="topic" class="form-control <?php echo is_valid('topic') ?>">
                    <option value="general" <?php echo set_select('topic', 'general', TRUE) ?>>MapleStory General</option>
                    <option value="market" <?php echo set_select('topic', 'market') ?>>MapleStory Market</option>
                    <option value="games" <?php echo set_select('topic', 'games') ?>>Video Games</option>
                    <option value="irl" <?php echo set_select('topic', 'irl') ?>>IRL</option>
                </select>
                <?php echo form_error('topic') ?>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?php echo set_value('title') ?>" class="form-control <?php echo is_valid('title') ?>">
                <?php echo form_error('title') ?>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control <?php echo is_valid('message') ?>" rows="6"><?php echo set_value('message') ?></textarea>
                <?php echo form_error('message') ?>
            </div>
            <div class="form-group">
                <input type="submit" value="Post" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('footer') ?>
