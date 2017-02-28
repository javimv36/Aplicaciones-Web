/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function grafico(){
  var chart = document.getElementById('grafico1');
  var myChart = echarts.init(chart);
  var option = {
title : {
  text: 'Prueba',
  subtext: ''
},
tooltip : {
  trigger: 'axis'
},
legend: {
  data:['Clases','Notas']
},
toolbox: {
  show : true,
  feature : {
      mark : {show: true},
      dataView : {show: true, readOnly: false},
      magicType : {show: true, type: ['line', 'bar']},
      restore : {show: true},
      saveAsImage : {show: true}
  }
},
calculable : true,
xAxis : [
  {
      type : 'category',
      boundaryGap : false,
      data : ['1','4','6','3','9','8','5']
  }
],
yAxis : [
  {
      type : 'value',
      axisLabel : {
          formatter: '{value} °C'
      }
  }
],
series : [
  {
      name:'Clases',
      type:'line',
      data:[11, 11, 15, 13, 12, 13, 10],
      markPoint : {
          data : [
              {type : 'max', name: 'max'},
              {type : 'min', name: 'min'}
          ]
      },
      markLine : {
          data : [
              {type : 'average', name: 'average'}
          ]
      }
  },
  {
      name:'Notas',
      type:'line',
      data:[1, -2, 2, 5, 3, 2, 0],
      markPoint : {
          data : [
              {name : 'Notas', value : -2, xAxis: 1, yAxis: -1.5}
          ]
      },
      markLine : {
          data : [
              {type : 'average', name : 'average'}
          ]
      }
  }
]
};

  myChart.setOption(option);
}

function grafico2(){
  var chart = document.getElementById('grafico2');
  var myChart = echarts.init(chart);
  option = {
      title : {
          text: '罗纳尔多 vs 舍普琴科',
          subtext: '完全实况球员数据'
      },
      tooltip : {
          trigger: 'axis'
      },
      legend: {
          x : 'center',
          data:['罗纳尔多','舍普琴科']
      },
      toolbox: {
          show : true,
          feature : {
              mark : {show: true},
              dataView : {show: true, readOnly: false},
              restore : {show: true},
              saveAsImage : {show: true}
          }
      },
      calculable : true,
      polar : [
          {
              indicator : [
                  {text : '进攻', max  : 100},
                  {text : '防守', max  : 100},
                  {text : '体能', max  : 100},
                  {text : '速度', max  : 100},
                  {text : '力量', max  : 100},
                  {text : '技巧', max  : 100}
              ],
              radius : 130
          }
      ],
      series : [
          {
              name: '完全实况球员数据',
              type: 'radar',
              itemStyle: {
                  normal: {
                      areaStyle: {
                          type: 'default'
                      }
                  }
              },
              data : [
                  {
                      value : [97, 42, 88, 94, 90, 86],
                      name : '舍普琴科'
                  },
                  {
                      value : [97, 32, 74, 95, 88, 92],
                      name : '罗纳尔多'
                  }
              ]
          }
      ]
  };
                      
  myChart.setOption(option);
}
