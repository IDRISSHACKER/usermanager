<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AWA</title>
	<meta name="theme-color" content="#7d1594">
	<link rel="stylesheet" href="master.css">
</head>

<body>
	<div class="area">
		<nav class="navbar">
			<div class="nav1">
				<div class="nav-item navbar-brand">
					<a href="">AWA</a>
				</div>
			</div>
			<div class="nav2"></div>
		</nav>
		<main class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="enregistrement">
						<h1 class="title">Janvier 15 fevrier 2022</h1>
						<div class="table">
							<table border="1px">
								<tr>
									<td>Telephone</td>
									<td>Noms</td>
									<td>Heure</td>
									<td>Montant total</td>
									<td>Montant verse</td>
									<td>Reste</td>
									<td>Actions</td>
								</tr>
								<tr>
									<td>656987656</td>
									<td>Hacker</td>
									<td>17:30</td>
									<td>17 000 Fcfa</td>
									<td>7 000 Fcfa</td>
									<td>10 000 Fcfa</td>
									<td>
										<div class="btn-group">
											<button class="btn btn-error">Drop</button>
											<button class="btn btn-dark">Edit</button>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<br>
						<button class="btn btn-primary pulse">Nouvel enregistrement</button>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card-stat">
						<div class="illustration">
							<img src="./img/work.png" alt="">
						</div>
						<div class="items">
							<div class="item">
								<img src="" alt="">
								<h2>Nombre de client(s)</h2>
								<h3>
									<span class="chip">40</span>
								</h3>
							</div>
							<div class="item">
								<img src="" alt="">
								<h2>Paiement(s) terminé(s)</h2>
								<h3>
									<span class="chip">20</span>
								</h3>
							</div>
							<div class="item">
								<img src="" alt="">
								<h2>Paiement(s) en cours</h2>
								<h3>
									<span class="chip">20</span>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<div class="area-bg">
	</div>
</body>
<script>
	const pulsebtn = document.querySelector(".pulse");
	pulsebtn.addEventListener("click", function() {
		pulsebtn.classList.add("btn-pulse");
		const timer = setTimeout(() => {
			clearTimeout(timer)
			pulsebtn.classList.remove("btn-pulse")
			pulsebtn.removeEventListener("click", this)
		}, 1000)
	})
</script>

</html>