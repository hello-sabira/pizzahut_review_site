<?php include 'inc/header.php' ?>
<h2>Pizza Hut Reviews</h2>

<?php
$sql = 'SELECT * FROM reviews';
$result = mysqli_query($conn, $sql);
$review = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>




<?php if (empty($review)) : ?>
  <p class="lead mt-3">There is no review</p>
<?php endif; ?>

<?php foreach ($review as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2"> <br>
        From <?php echo $item['name']; ?> <br>
        <?php echo date_format(
                  date_create($item['date']),
                  'g:ia \o\n l jS F Y'
                ); ?></div>
    </div>
  </div>
<?php endforeach; ?>
<?php include 'inc/footer.php'; ?>