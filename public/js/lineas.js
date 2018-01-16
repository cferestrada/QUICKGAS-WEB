

const CHART = document.getElementById("linechart");
//console.log(CHART);

//Chart.defaults.global.responsive = false;
Chart.defaults.global.animation.duration = 2000;
/*
	color: function(context) {
    var index = context.dataIndex;
    var value = context.dataset.data[index];
    return value < 50 ? 'red' :  // draw negative values in red
        index % 2 ? 'blue' :    // else, alternate values in blue and green
        'green';
}*/

/*
Chart.defaults.global.legend.labels.fontFamily ='Helvetica';
Chart.defaults.global.title.fontSize = 24; 
Chart.defaults.global.title.fontColor = '#666'; 
*/
let linechart = new Chart(CHART, {
	type: 'line',
	data: {
		labels: ["Ayer","Hoy"],
		datasets:[
					{
						label:"Tanque",
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
						data:[65,59],
					},

					{
						label:"Estacionario",
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
						data:[84,100],
					}
				]
		},
		options: {
		
			tooltips: {
          //  mode: 'dataset',
			showLines: true,
			scales: {
				yAxes: [{
					ticks:{
						beginAtZero: true,
						reverse: true
					}
				}]
			}
		}
	}
}) ;