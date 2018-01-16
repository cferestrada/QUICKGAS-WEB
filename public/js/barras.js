const CHART2 = document.getElementById("barchart");
//console.log(CHART);

//Chart.defaults.global.responsive = false;
Chart.defaults.global.animation.duration = 2000;

/*
Chart.defaults.global.legend.labels.fontFamily ='Helvetica';
Chart.defaults.global.title.fontSize = 24; 
Chart.defaults.global.title.fontColor = '#666'; 
*/
let barchart = new Chart(CHART2, {
	type: 'bar',
	data: {
		labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"],
		datasets:[
					{
						label:"HOLA",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(75,192,192,0.4)",
						borderColor: "rgba(75,192,192,1)",
						borderCapStyle: 'butt',
						borderDash: [],
						borderDashOffSet: 0.0,
						borderJoinStyle: 'miter',
						pointBorderColor: "rgba(75,192,192,1)",
						pointBackgroundColor: "#fff",
						pointBorderWidth: 1,
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(75,192,192,1)",
						pointHoverBorderColor: "rgba(220,220,220,1)",
						pointHoverBorderWidth: 2,
						pointRadius: 1,
						pointHitRadius: 10,
						data:[65,59,80,81,56,55,40],
					},

					{
						label:"HOLA2",
						fill: true,
						lineTension: 0.2,
						backgroundColor: "rgba(75,75,192,0.4)",
						borderColor: "rgba(75,72,192,1)",
						borderCapStyle: 'butt',
						borderDash: [],
						borderDashOffSet: 0.0,
						borderJoinStyle: 'miter',
						pointBorderColor: "rgba(75,72,192,1)",
						pointBackgroundColor: "#fff",
						pointBorderWidth: 1,
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(75,72,192,1)",
						pointHoverBorderColor: "rgba(220,220,220,1)",
						pointHoverBorderWidth: 2,
						pointRadius: 4,
						pointHitRadius: 10,
						data:[100,39,100,4,56,55,40],
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