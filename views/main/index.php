
<p>Main page - главная страница</p>

<?php foreach ($news as $new): ?>
    <p><?php echo $new['title']; ?></p>
    <p><?php echo $new['description']; ?></p>
<?php endforeach; ?>
