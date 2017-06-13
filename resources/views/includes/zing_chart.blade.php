<html>

<head>
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  
  <style>
    .zc-ref {
      display: none;
    }
  </style>
</head>

<body>
  <div id='myChart'></div>
  <script>
    zingchart.THEME = "classic";
    var myConfig = {
      "background-color": "white",  //background of page
      "graphset": [{
        "type": "line",
        "background-color": "white",  //background of graph
        "border-color": "#dae5ec",    //border of graph
        "border-width": "1px",
        "width": "90%",
        "height": "90%",
        "x": "1%",                   // margin-left from x-axis
        "y": "0%",                 // margin-left from y-axis
        "title": {
          "margin-top": "7px",
          "margin-left": "120px",
          "text": "Funding",
          "background-color": "none",     //bg of text
          "shadow": 0,
          "text-align": "left",
          "font-family": "Arial",
          "font-size": "11px",
          "font-color": "#707d94"
        },
        "plot": {
          "animation": {
            "delay": 500,         //speed of loading the graph lines
            "effect": "ANIMATION_SLIDE_LEFT"
          }
        },
        "plotarea": {
          "margin": "50px 25px 70px 46px"
        },
        "scale-y": {
          "values": "0:20000:25",
          "line-color": "none",
          "guide": {
            "line-style": "solid",
            "line-color": "#d2dae2",
            "line-width": "1px",
            "alpha": 0.5
          },
          "tick": {
            "visible": false
          },
          "item": {
            "font-color": "#8391a5",
            "font-family": "Arial",
            "font-size": "10px",
            "padding-right": "5px"
          }
        },
        "scale-x": {
          "line-color": "#d2dae2",
          "line-width": "2px",
          "values": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          "tick": {
            "line-color": "#d2dae2",  //color of the marker(i.e. dot in x axis)
            "line-width": "1px"
          },
          "guide": {
            "visible": false
          },
          "item": {
            "font-color": "#8391a5",
            "font-family": "Arial",
            "font-size": "10px",
            "padding-top": "5px"
          }
        },
        "legend": {
          "layout": "x4",
          "background-color": "none",
          "shadow": 0,
          "margin": "auto auto 15 auto",
          "border-width": 0,
          "item": {
            "font-color": "#707d94",
            "font-family": "Arial",
            "padding": "0px",
            "margin": "0px",
            "font-size": "9px"
          },
          "marker": {
            "show-line": "true",
            "type": "match",
            "font-family": "Arial",
            "font-size": "10px",
            "size": 4,
            "line-width": 2,
            "padding": "3px"
          }
        },
        "crosshair-x": {
          "lineWidth": 1,
          "line-color": "#707d94",
          "plotLabel": {
            "shadow": false,
            "font-color": "#000",            // color inside label of box(i.e. where it shows         likes,funding, footfall)
            "font-family": "Arial",
            "font-size": "10px",
            "padding": "5px 10px",
            "border-radius": "5px",
            "alpha": 1
          },
          "scale-label": {
            "font-color": "#ffffff",          //scale font color
            "background-color": "#337AB7",    //scale Line color
            "font-family": "Arial",
            "font-size": "10px",
            "padding": "5px 10px",
            "border-radius": "5px"
          }
        },
        "tooltip": {
          "visible": true
        },
        "series": [{
          "values": [8000, 10000, 12000, 12000, 13000, 14000, 17000, 17000, 17500, 17500, 19000, 20000],
          "text": "Footfall",
          "line-color": "#77dd77",        //color of the line
          "line-width": "2px",
          "shadow": 0,
          "marker": {
            "background-color": "white", //dot color
            "size": 3,
            "border-width": 1,
            "border-color": "#77dd77",    //border of the dot
            "shadow": 1
          },
          "palette": 0
        }, {
         "values": [3000, 4000, 3000, 4000, 5000, 9000, 6000, 11000, 5000, 7000, 7000, 8000],
          "text": "Likes",
          "line-width": "2px",
          "line-color": "#F26C4A",
          "shadow": 0,
          "marker": {
            "background-color": "white",
            "size": 3,
            "border-width": 1,
            "border-color": "#F26C4A",
            "shadow": 1
          },
          "palette": 1,
          "visible": 1
        }, {
          "values":  [1000, 2000, 1000, 2000, 3000, 4000, 4000, 2000, 3000, 5000, 5000, 6000],
          "text": "Funding",
          "line-color": "#779ECB",
          "line-width": "2px",
          "shadow": 0,
          "marker": {
            "background-color": "#fff",
            "size": 3,
            "border-width": 1,
            "border-color": "#779ECB",
            "shadow": 1
          },
          "palette": 2,
          "visible": 1
        }]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 500,
      width: '100%'
    });
  </script>
</body>

</html>