<script>
        var data = <?=json_encode($ventas);?>;

        var randomScalingFactor = function() {
			return Math.round(Math.random() * 256);
		};

		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: data.map( venta => venta.venta),
					backgroundColor: data.map( venta => 'rgb('+randomScalingFactor()+','+randomScalingFactor()+','+randomScalingFactor()+')'),
					label: 'Ventas Producto'
				}],
				labels: data.map( venta => venta.producto )
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Ventas por producto'
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