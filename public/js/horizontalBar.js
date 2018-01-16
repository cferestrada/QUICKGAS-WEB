const CHART3 = document.getElementById("hbarchart");
//console.log(CHART);

//Chart.defaults.global.responsive = false;
Chart.defaults.global.animation.duration = 2000;

/*
Chart.defaults.global.legend.labels.fontFamily ='Helvetica';
Chart.defaults.global.title.fontSize = 24; 
Chart.defaults.global.title.fontColor = '#666'; 
*/
let hbarchart = new Chart(CHART3, {
	type: 'horizontalBar',
	data: {
		labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"],
		datasets:[
					{
						label:"HOLA",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(225, 100, 29, .8862745098039215)",
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
						data:[65,59,80,81,56,55,40],
					}
				]
		},
		options: {
			
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

}) ;