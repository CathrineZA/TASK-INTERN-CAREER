<?php 

    
	// connect to the database
	$conn = mysqli_connect('localhost', 'cathy', 'test2468', 'the_pizza_blog');

	// check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

	// write query for all pizzas
	$sql = 'SELECT title, ingredients, id FROM pizzas ';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


    //explode(',', $pizzas[0]['ingredients']);
?>


<html>
	
	<?php include('templates/header.php'); ?>

	<h4 class="center grey-text">Pizzas!</h4>

	<div class="container">
		<div class="row">

		<?php foreach($pizzas as $pizza): ?>

				<div class="col s6 m3">
					<div class="card z-depth-0">
						<img src="img/pizza.jpg" class="pizza">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

            

		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>