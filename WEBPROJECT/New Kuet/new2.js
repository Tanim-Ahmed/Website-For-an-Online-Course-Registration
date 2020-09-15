		function img_slide(s)
		{
			var server=window.location.host;
			switch(s)
			{
				case 1:
				$(".logo").css({"background-image":"url(http://"+server+"/img/size1.png)"},"slow");
				break;
				case 2:
				$(".logo").css({"background-image":"url(http://"+server+"/img/size.PNG"},"slow");	
				break;
				case 3:
				$(".logo").css({"background-image":"url(http://"+server+"/img/mozib.png"},"slow");	
				break;
			}
			s++;
			if(s>3){s=s-3;}
			setTimeout('img_slide('+s+')', 5000);
		}


		$(document).ready(function()
		{
			img_slide(1);
			$("#menu_1").mouseenter(function()
			{
				hide_all();
				$("#sub_menu_1").slideDown();
				$("#menu_1").css("background-color","#F69810");
			});
			$("#sub_menu_1").mouseleave(function()
			{
				hide_all();
			});			



			$("#menu_2").mouseenter(function()
			{
				hide_all();
				$("#sub_menu_2").show();
				$("#menu_2").css("background-color","#65B621");
			});
			$("#sub_menu_2").mouseleave(function()
			{
				hide_all();
			});			




			$("#menu_3").mouseenter(function()
			{
				hide_all();
				$("#sub_menu_3").show();
				$("#menu_3").css("background-color","#F96311");
			});
			$("#sub_menu_3").mouseleave(function()
			{
				hide_all();
			});			



			$("#menu_4").mouseenter(function()
			{
				hide_all();
				$("#sub_menu_4").show();
				$("#menu_4").css("background-color","#1E93C1");
			});
			$("#sub_menu_4").mouseleave(function()
			{
				hide_all();
			});			



			$("#menu_5").mouseenter(function()
			{
				hide_all();
				$("#sub_menu_5").show();
				$("#menu_5").css("background-color","#F50E47");
			});
			$("#sub_menu_5").mouseleave(function()
			{
				hide_all();
			});			



			$("#menu_6").mouseenter(function()
			{
				hide_all();
				$("#sub_menu_6").show();
				$("#menu_6").css("background-color","#F69810");
			});
			$("#sub_menu_6").mouseleave(function()
			{
				hide_all();
			});			



			$("#menu_7").mouseenter(function()
			{
				hide_all();
				$("#sub_menu_7").show();
				$("#menu_7").css("background-color","#F7DF15");
			});
			$("#sub_menu_7").mouseleave(function()
			{
				hide_all();
			});			



			$("#menu_8").mouseenter(function()
			{
				$("#sub_menu_8").show();
			});
			$("#sub_menu_8").mouseleave(function()
			{
				$("#sub_menu_8").hide();
			});			
			$("#sub_menu_8").mouseenter(function()
			{
				$("#sub_menu_8").show();
				$("#sub_menu_3").show();
			});
			$("#sub_menu_8").mouseleave(function()
			{
				$("#sub_menu_8").hide();
			});			



			$("#sub_menu_9").mouseenter(function()
			{
				$("#sub_menu_9").show();
				$("#sub_menu_3").show();
			});
			$("#sub_menu_9").mouseleave(function()
			{
				$("#sub_menu_9").hide();
			});			


			$("#menu_9").mouseenter(function()
			{
				$("#sub_menu_9").show();
			});
			$("#sub_menu_9").mouseleave(function()
			{
				$("#sub_menu_9").hide();
			});			







			$(".hide").mouseenter(function()
			{
				$("#sub_menu_8").hide();
				$("#sub_menu_9").hide();
				
			});

			


		});
		
		function hide_all()
		{
				$("#sub_menu_1").hide();
				$("#sub_menu_2").hide();
				$("#sub_menu_3").hide();
				$("#sub_menu_4").hide();
				$("#sub_menu_5").hide();
				$("#sub_menu_6").hide();
				$("#sub_menu_7").hide();
				$("#sub_menu_8").hide();
				$("#menu_1").css("background-color","#ffffff");
				$("#menu_2").css("background-color","#ffffff");
				$("#menu_3").css("background-color","#ffffff");
				$("#menu_4").css("background-color","#ffffff");
				$("#menu_5").css("background-color","#ffffff");
				$("#menu_6").css("background-color","#ffffff");
				$("#menu_7").css("background-color","#ffffff");
			
		}
		

	function show_date_time()
	{
		var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
		var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
		var currentDate = new Date();
		var day = currentDate.getDate();
		var day_name=weekday[currentDate.getDay()];
		var month = currentDate.getMonth() + 1;
		var month_name=months[month-1];
		var year = currentDate.getFullYear();
		var hours = currentDate.getHours();
		var minutes = currentDate.getMinutes();
		var second = currentDate.getSeconds();
		var am_pm="AM";
		if(hours>11)
		{
			am_pm="PM";
		}
		else
		{
			am_pm="AM";	
		}
		if(hours>12)
		{
			hours=hours-12;	
		}
		if (minutes < 10)
		{
			minutes = "0" + minutes
		}
		if (second < 10)
		{
			second = "0" + second
		}
		var date =day_name+", "+day+"th "+month_name+" "+year;
		var time=hours+":"+minutes+":"+second+" "+am_pm;
		
		document.getElementById("show_date").innerHTML=date;
		document.getElementById("show_time").innerHTML=time;
		setTimeout('show_date_time()', 1000);	
		}