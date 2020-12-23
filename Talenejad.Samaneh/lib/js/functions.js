const query = (options) => {
	return fetch('data/api.php',{
		method:'POST',
		headers:{
			'Content-Type':'application/json'
		},
		body: JSON.stringify(options)
	})
	.then(response => response.json());
}



// const templater = f => a => 
// 	(Array.isArray(a)?a:[a])
// 	.reduce((r,o,i,a) => r + f(o,i,a),'');

const templater = f => a => 
	(Array.isArray(a)?a:[a]).reduce((r,o,i,a) => r + f(o),'');


