<script>
        var data = <?=json_encode($comprasFecha);?>;

        var randomScalingFactor = function() {
			return Math.round(Math.random() * 256);
		};

		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: data.map( compra => compra.compra),
					backgroundColor: data.map( compra => 'rgb('+randomScalingFactor()+','+randomScalingFactor()+','+randomScalingFactor()+')'),
					label: 'Compras por Fecha'
				}],
				labels: data.map( compra => compra.fecha )
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Compras por Fecha'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('myChart').getContext('2d');
			window.myDoughnut = new Chart(ctx, config);
		};



		
</script>