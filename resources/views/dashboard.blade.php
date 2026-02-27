<x-app-layout>
  <div class="border rounded bg-secondary bg-opacity-50 mb-5">
    <h2 class="text-center my-3 text-white">PÁGINA INICIAL</h2>
  </div>
  <div class="border rounded bg-secondary bg-opacity-50 w-25">
    <h6 class="text-center text-white my-1">Economia Mensal</h6>
  </div>
  <div id="chart"></div>
</x-app-layout>
<script>
var options = {
  series: [{
          name: 'Servings',
          data: [44, 55, 41, 67, 22, 43]
        }],
          annotations: {
          points: [{
            x: 'Bananas',
            seriesIndex: 0,
            label: {
              borderColor: '#775DD0',
              offsetY: 0,
              style: {
                color: '#fff',
                background: '#775DD0',
              },
              text: 'Bananas are good',
            }
          }]
        },
        chart: {
          height: 350,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            columnWidth: '50%',
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 0
        },
        grid: {
          row: {
            colors: ['#fff', '#f2f2f2']
          }
        },
        xaxis: {
          labels: {
            rotate: -45
          },
          categories: ['Janeiro', 'favereiro', 'Março', 'Abril', 'Maio', 'Junho',
          ],
          tickPlacement: 'on'
        },
        yaxis: {
          title: {
            text: 'Servings',
          },
        },
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'light',
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: undefined,
            inverseColors: true,
            opacityFrom: 0.85,
            opacityTo: 0.85,
            stops: [50, 0, 100]
          },
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>