const CHART6 = document.getElementById("pie");
//console.log(CHART);

//Chart.defaults.global.responsive = false;
Chart.defaults.global.animation.duration = 2000;

/*
Chart.defaults.global.legend.labels.fontFamily ='Helvetica';
Chart.defaults.global.title.fontSize = 24; 
Chart.defaults.global.title.fontColor = '#666'; 
*/
let pie = new Chart(CHART6, {
	//type: 'pie',
	type: 'doughnut',
	data: {
		labels: ["Ventas", "Pedidos", "Cancelaciones", "NoEntregas"],
		datasets:[
					{
						label:"HOLA",
						fill: true,
						lineTension: 0,
						backgroundColor: ['#FF6A00FF','#FF7000D2','#E76C1EFF','#E76C1EBD'],
						
						data:[65,59,80,81],
					}
				]
		},
		options: {
			cutoutPercentage:60,
			//rotation: MATH.PI * 0.5,
			animation:{
				animateScale: false,
				animateRotate: true,
			showLines: true,
			scales: {
				yAxes: [{
					ticks:{
						beginAtZero: true,
						reverse: false
					}
				}]
			}

		}
	}

}) ;