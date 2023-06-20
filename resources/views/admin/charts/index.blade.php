@extends('layouts.app')

@section('content')
  {{-- CHARTJS --}}
  <div class="container chart_bgc border rounded pb-3">
    <div class="row px-3 pt-3 mb-4">
      <h2 class="col-12 mb-3">Numero di ordini</h2>
      <div class="col-12 col-lg-6 my-2">
        <canvas id="userChart" class="rounded shadow"></canvas>
        <div class="mt-4 text-center">
          <label for="startDate">Da:</label>
          <input onchange="filterData()" type="month" id="startDate">
          <label class="ml-3" for="endDate">A:</label>
          <input onchange="filterData()" type="month" id="endDate">
        </div>
      </div>

      {{-- <div class="col-12 col-lg-6">
        <canvas id="userChartyear" class="rounded shadow"></canvas>
      </div> --}}
    </div>

    {{-- <div class="row px-3 pt-3">
      <h2 class="col-12 mb-3">Ammontare delle vendite</h2>
      <div class="col-12 col-lg-6 container mb-5">
        <canvas id="ChartPriceMonth" class="rounded shadow"></canvas>
      </div>

      <div class="col-12 col-lg-6 container">
        <canvas id="chartPriceYear" class="rounded shadow"></canvas>
      </div>
    </div> --}}
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script async>
    console.log({!!$chartMonth!!});
    const dates = {!! json_encode($chartMonth->labels) !!};
    const dataPoints = {!! json_encode($chartMonth->dataset) !!};

    let inpStartDate = document.getElementById('startDate').value = dates[0];
    // console.log(inpStartDate)
    let inpEndDate = document.getElementById('endDate').value = dates[dates.length - 1];

    //CHIAMATA MESI
    var ctx = document.getElementById('userChart').getContext('2d');
    var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
        labels: dates, // Pariole sotto la tabella
        datasets: [{
          label: 'N°ordini / mese',
          data: dataPoints,

          // Bisogna trovare un modo assegnare un colore per ogni elemento con un ciclo
          backgroundColor: [
            'rgba(73, 242, 228, .4)',
          ],
          borderColor: [
            // 'rgba(0, 106, 100, 1)',
          ],
          borderWidth: 2
        }, ]
      },
      // Configuration options go here
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              callback: function(value) {
                if (value % 1 === 0) {
                  return value;
                }
              }
            },
            scaleLabel: {
              display: false
            }
          }]
        },
        legend: {
          labels: {
            // This more specific font property overrides the global property
            fontColor: '#122C4B',
            fontFamily: "'Muli', sans-serif",
            padding: 25,
            boxWidth: 25,
            fontSize: 18,
          }
        },
        layout: {
          padding: {
            left: 10,
            right: 10,
            top: 0,
            bottom: 10
          }
        }
      }
    });

    filterData();




    function filterData() {
      
      const dates2 = [...dates];
      
      const startDate = document.getElementById('startDate');
      const endDate = document.getElementById('endDate');

      console.log(startDate.value);
      console.log(endDate.value);

      let suppLabels = [];
      let tokenTemp = startDate.value;
      let tokenEnd = endDate.value;

      suppLabels.push(tokenTemp);

      while (tokenTemp != tokenEnd) {
        let month = "";
        month += tokenTemp[5];
        month += tokenTemp[6];
        let numMonth = parseInt(month);

        if (numMonth != 12) {
          numMonth++;
          stringMonth = numMonth.toString();

          if (stringMonth.length < 2) {
            stringMonth = '0' + stringMonth;
          }

          tokenTemp = setCharAt(tokenTemp, 5, stringMonth[0]);
          tokenTemp = setCharAt(tokenTemp, 6, stringMonth[1]);
        } else {
          let year = "";
          year = tokenTemp[0];
          year += tokenTemp[1];
          year += tokenTemp[2];
          year += tokenTemp[3];

          console.log("year", year);
          let numYear = parseInt(year);
          console.log("numYear", numYear);
          numYear++;
          stringYear = numYear.toString();

          console.log("stringYear", stringYear);

          tokenTemp = setCharAt(tokenTemp, 0, stringYear[0]);
          tokenTemp = setCharAt(tokenTemp, 1, stringYear[1]);
          tokenTemp = setCharAt(tokenTemp, 2, stringYear[2]);
          tokenTemp = setCharAt(tokenTemp, 3, stringYear[3]);

          tokenTemp = setCharAt(tokenTemp, 5, '0');
          tokenTemp = setCharAt(tokenTemp, 6, '1');
        }
        suppLabels.push(tokenTemp);
        console.log(suppLabels);
      }


      chart.config.data.labels = suppLabels;


      let suppData = [];

      const dataPoints2 = [...dataPoints];

      suppLabels.forEach((itemPost, indexPost) => {
        let boolSent = false;
        dates2.forEach((itemPre, indexPre) => {
          if (itemPost == itemPre) {
            suppData[indexPost] = dataPoints2[indexPre];
            boolSent = true;
          }
        });
        if (boolSent == false) {
          suppData[indexPost] = 0;
        }
      });

      console.log("suppData", suppData);

     
      chart.config.data.datasets[0].data = suppData;

     

      chart.update();
    }

    function setCharAt(str, index, chr) {
      if (index > str.length - 1) return str;
      return str.substring(0, index) + chr + str.substring(index + 1);
    }
  </script>
@endsection