const CHART4 = document.getElementById("radar");
//console.log(CHART);

//Chart.defaults.global.responsive = false;
Chart.defaults.global.animation.duration = 2000;

/*
Chart.defaults.global.legend.labels.fontFamily ='Helvetica';
Chart.defaults.global.title.fontSize = 24; 
Chart.defaults.global.title.fontColor = '#666'; 
*/
let radar = new Chart(CHART4, {
	type: 'radar',
	data: {
		labels: ["Ventas", "Pedidos", "Cancelaciones", "NoEntregas"],
		datasets:[
					{
						label:"HOLA",
						fill: true,
						lineTension: 0,
						backgroundColor: "rgba(225, 100, 29, .6784313725490196)",
						borderColor: "rgba(237, 58, 17, 1.)",
						borderCapStyle: 'butt',
						borderDash: [],
						borderDashOffSet: 0.0,
						borderJoinStyle: 'miter',
						pointBorderColor: "rgba(225, 100, 29, .8862745098039215)",
						pointBackgroundColor: "#fff",
						pointBorderWidth: 1,
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(225, 100, 29, .8862745098039215)",
						pointHoverBorderColor: "rgba(225, 100, 29, .8862745098039215)",
						pointHoverBorderWidth: 2,
						pointRadius: 1,
						pointHitRadius: 10,
						data:[65,59,80,81],
					}
				]
		},
		options: {
			
			showLines: true,
			scales: {
				yAxes: [{
					ticks:{
						beginAtZero: false,
						reverse: false
					}
				}]
			}

		}

}) ;