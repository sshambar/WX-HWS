<?php

	####################################################################################################
	#	DATACHARTS by BRIAN UNDERDOWN 2017                                                      	   #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html #
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS quality Stored								               #
	# 	                                                                                               #
	# 	3rd General Release: updated : 4th Nov 2017  	                                      		   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
	include('chartslivedata.php');include('./chart_theme.php');header('Content-type: text/html; charset=utf-8');
	$weatherfile = date('Y');

	if ($tempunit == 'F') {
	$conv = '(9 / 5) + 32';
	} else {
	$conv = '1';
	}

    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>DEWPOINT TEMP YEAR CHART</title>
		<script src=../js/jquery.js></script>

	';
	?>
    <br>
    <script type="text/javascript">
		// today temperature
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "chartdata.php?csv=<?php echo $weatherfile;?>",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});

	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			//hi
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/\�|\"|\u0000/g,'').split(',');
				if ( rowData.length >7)
					dataPoints1.push({label: rowData[0],y:parseFloat(rowData[3]*<?php echo $conv ;?>)});
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			//lo
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/\�|\"|\u0000/g,'').split(',');
				if ( rowData.length >7)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[4]*<?php echo $conv ;?>)});

			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

		function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer", {
		 backgroundColor: '<?php echo $backgroundcolor;?>',
		  animationEnabled: true,
		  animationDuration: <?php echo $animationduration;?>,


		title: {
            text: " ",
			fontSize: 11,
			fontColor: '<?php echo $fontcolor;?>',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: '<?php echo $tooltipbackgroundcolor;?>',
			   contentFormatter: function(e) {
      var str = '<span style="color: <?php echo $fontcolor;?>;">' + e.entries[0].dataPoint.label + '</span><br/>';
      for (var i = 0; i < e.entries.length; i++) {
        var temp = '<span style="color: ' + e.entries[i].dataSeries.color + ';">' + e.entries[i].dataSeries.name + '</span> <span style="color: <?php echo $fontcolor;?>;">' + e.entries[i].dataPoint.y.toFixed(1) + "<?php echo ' °'.$tempunit ;?>" + '</span> <br/>';
        str = str.concat(temp);
      }
      return (str);
    },
			   shared: true,


 },
		axisX: {
			gridColor: '<?php echo $gridcolor;?>',
		    labelFontSize: 10,
			labelFontColor: '<?php echo $fontcolor;?>',
			lineThickness: 0.5,
			gridThickness: 1,
      gridDashType: "dot",
			titleFontFamily: "arial",
			labelFontFamily: "arial",
			minimum:0,
			interval:'auto',
			intervalType:"day",
			//xValueType: "dateTime",
			crosshair: {
        enabled: true,
        snapToDataPoint: true,
        color: '<?php echo $xcrosshaircolor;?>',
        labelFontColor: "#F8F8F8",
        labelFontSize:11,
        labelBackgroundColor: '<?php echo $xcrosshaircolor;?>',
      }

			},

		axisY:{
		title: "Dewpoint (°<?php echo $tempunit ;?>) Recorded",
		titleFontColor: '<?php echo $fontcolor;?>',
		titleFontSize: 10,
        titleWrap: false,
		margin: 10,
		lineThickness: 0.5,
		gridThickness: 1,
      gridDashType: "dot",
        includeZero: true,
		interval: 'auto',
		gridColor: '<?php echo $gridcolor;?>',
		labelFontSize: 11,
		labelFontColor: '<?php echo $fontcolor;?>',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0) + " °<?php echo $tempunit ;?>" ;
         },
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: '<?php echo $ycrosshaircolor;?>',
			labelFontColor: "#fff",
			labelFontSize:11,
			labelBackgroundColor: '<?php echo $ycrosshaircolor;?>',
			valueFormatString: "##0.# °<?php echo $tempunit ;?>",
		}
      },

	  legend:{
      fontFamily: "arial",
      fontColor: '<?php echo $fontcolor;?>',

 },


		data: [
		{
			//type: "spline",
			type: "splineArea",
			color: '<?php echo $line1color;?>',
			lineColor: '<?php echo $line1linecolor;?>',
			markerSize:0,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 2,
			markerType: "circle",
			name:" Hi Dewpoint",
			dataPoints: dataPoints1,
			yValueFormatString: "#0.# °<?php echo $tempunit ;?>",

		},
		{

			type: "splineArea",
			color: '<?php echo $line2color;?>',
			markerSize:0,
      markerColor: '<?php echo $line2markercolor;?>',
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 2,
      lineColor: '<?php echo $line2markercolor;?>',
			markerType: "circle",
			name:" Lo Dewpoint",
			dataPoints: dataPoints2,
			yValueFormatString: "#0.# °<?php echo $tempunit ;?>",

		}

		]
		});

		chart.render();
	}
});

    </script>
     <link rel="stylesheet" href="weather34chartstyle-<?php echo $charttheme;?>.css">
<body>
<div class="weather34darkbrowser" url="Dewpoint - <?php echo date('Y') ;?> &nbsp;&nbsp;|&nbsp;&nbsp; High: <?php echo $weather['dewymax'].' °'.$tempunit;?>&nbsp;&nbsp; Low: <?php echo $weather['dewymin'].' °'.$tempunit;?>"></div>
<div style="width:auto;background:0;padding:0px;margin-left:5px;font-size: 12px;border-radius:3px;">
<div id="chartContainer" class="chartContainer"></div></div>
<div class="weather34browser-footer">
<span style="position:absolute;color:#fff;font-family:arial;padding-top:5px;margin-left:25px;border-radius:3px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>
<a href="https://github.com/weather34/Meteobridge-Weather34-Template" title="Weather34 GitHub" target="_blank">
<span style="color:#00A4B4;"><?php echo $chartversionmysql  ;?> CSS & PHP scripts by weather34</span> </a></span>
<span style="position:absolute;color:#aaa;font-family:arial;padding-top:5px;margin-left:25px;display:block;margin-top:12px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank"><?php echo $creditschart ;?> </a></span>
<div class="weather34browser-footerlogo"><a href="https://github.com/weather34/Meteobridge-Weather34-Template" title="Weather34 GitHub" target="_blank"><img src="../img/weatherlogo34.svg" width="35px"</img></a></div></div>
</body>
<script src='canvasJs.js'></script>
</html>
