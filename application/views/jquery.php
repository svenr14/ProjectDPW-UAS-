<!DOCTYPE >
<html>
	<head>
		<title>JQuery</title>
		<script type="text/javascript" src="/UjianPraktek/js/jquery.js"></script>
		<script>
			$(document).ready(function(){
		
				var state = 10
				var gh = $('#bater')[0].getContext('2d'); //garis baterei
				gh.strokeStyle="blue";
				gh.fillStyle="blue";
				gh.beginPath();
				gh.moveTo(10,10);
				gh.lineTo(570,10);
				gh.lineTo(570,210);
				gh.lineTo(10,210);
				gh.closePath();
				gh.stroke();
				gh.fill();
				
				gh.strokeStyle="white"; //baterei per kolom
				gh.fillStyle="blue";
				gh.beginPath();
				gh.moveTo(20,20);
				gh.lineTo(560,20);
				gh.lineTo(560,200);
				gh.lineTo(20,200);
				gh.closePath();
				gh.stroke();
				gh.fill();
					
				var a = 20;
						
				for (var z=0;z<state;z++)	
				{	
					draw(a,20);
					a=a+27;	
				}
										
				$(document).keydown(function(e){
					switch (e.keyCode){
						case 48://nol
							rePaintz();
							break;
						case 49: //satu
							rePaintz();
							
							state=2
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 50: //dua
							rePaintz();
							state=4
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 51: //tiga
							rePaintz();
							state=6
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 52: //empat
							rePaintz();
							state=8
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 53: //lima
							rePaintz();
							state=10
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 54: //enam
							rePaintz();
							state=12
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 55: //tujuh
							rePaintz();
							state=14
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 56: //delapan
							rePaintz();
							state=16
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 57: //sembilan
							rePaintz();
							state=18
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 187: // =
							rePaintz();
							state=20
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
						case 219: // [  -
							rePaintz();
							if (state>0)
							{
								state = state-1;
							}
								else
								{
									state = 0;
								}
							
								var a = 20;
							
								for (var z=0;z<state;z++)	
								{	
									draw(a,20);
									a=a+27;	
								}
							break;
								
						case 221: // ]  +
							rePaintz();
							if(state<20)
							{
								state = state+1
							}
							else
							{
								state = 20
							}
							var a = 20;
						
							for (var z=0;z<state;z++)	
							{	
								draw(a,20);
								a=a+27;	
							}
							break;
					}
				});
			});
			
			function draw(x,y){
				var context = $('#bater')[0].getContext('2d'); //khusus context harus diberi index karena dia merasa dipanggil seolah-olah dari array
				var grad = context.createLinearGradient(20,180,560,560);
				grad.addColorStop(0,"lightblue");
				grad.addColorStop(1,"green");
				context.fillStyle=grad;
				context.fillRect(x,y,27,180);
			}
			
			function rePaintz(){
				var gh = $('#bater')[0].getContext('2d'); //khusus context harus diberi index karena dia merasa dipanggil seolah-olah dari array
				
				gh.strokeStyle="blue";
				gh.fillStyle="blue";
				gh.beginPath();
				gh.moveTo(10,10);
				gh.lineTo(570,10);
				gh.lineTo(570,210);
				gh.lineTo(10,210);
				gh.closePath();
				gh.stroke();
				gh.fill();
				
				gh.strokeStyle="white"; //baterei per kolom
				gh.fillStyle="blue";
				gh.beginPath();
				gh.moveTo(20,20);
				gh.lineTo(560,20);
				gh.lineTo(560,200);
				gh.lineTo(20,200);
				gh.closePath();
				gh.stroke();
				gh.fill();
				
			}
		</script>
	</head>
	<body>
		<div id="container">
			<center>
				<span style="float:left">
					Tekan 0 untuk menampilkan 0% <br>
			Tekan 1 untuk menampilkan 10% <br>
			Tekan 2 untuk menampilkan 20% <br>
			Tekan 3 untuk menampilkan 30% <br>
			Tekan 4 untuk menampilkan 40% <br>
			Tekan 5 untuk menampilkan 50% <br>
			Tekan 6 untuk menampilkan 60% <br>
			Tekan 7 untuk menampilkan 70% <br>
			Tekan 8 untuk menampilkan 80% <br>
			Tekan 9 untuk menampilkan 90% <br>
			Tekan = untuk menampilkan 100% <br>
			Tekan [ untuk menampilkan -5% <br>
			Tekan ] untuk menampilkan +5% <br>
				</span>
				<span style="float:right; text-align: left;" id="baterai"> 
					<p>PROGRESS BAR </p>
					<canvas id="bater" width="1000" height="500"></canvas> 
				</span>
			</center>
		</div>
	</body>
</html>