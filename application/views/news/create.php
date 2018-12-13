<h2><?= $title ?></h2>

<?= validation_errors(); ?>

<?= form_open('news/create'); ?>

<label for="title">Title</label>
<input type="input" name="title"><br>

<label for="text"></label>
<textarea name="text"></textarea>

<input type="submit" name="submit" value="Create a news item">

</form>
