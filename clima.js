
fetch('https://api.openweathermap.org/data/2.5/forecast?q=Buenos%20Aires&appid=0df39b4b9d9ed1e00543bfc269eb773f&units=metric')
	.then(resp => {
		return resp.json();
	})
	.then(data => {
		console.log(data.list[0].weather[0].icon);
		
		var img = `http://openweathermap.org/img/w/${data.list[0].weather[0].icon}.png`;
		
		
		var temperatura = 
			Math.round(data.list[0].main.temp);
		
		
		clima.innerHTML = ` ${data.city.name}
			${temperatura}°C
			<img src="${img}" alt="">
			`;
	})
	.catch(error => {
		console.log('Error:', error)
	});
	
	
	
	
	
	
	
	
	