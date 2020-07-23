 
   let url = 'https://pokeapi.co/api/v2/pokemon/';
   function Pokemon(){
       let numero = document.getElementById("num").value;
       const url2 = url.concat(numero);
       console.log(numero);
       fetch(url2)
       .then(Response=>Response.json())
       .then(data=>{
           let element = document.getElementById('elem');
           element.innerHTML = `
           <h3> ${data.name}</h3>
           <h3> #${data.id}</h3>
           <img width='300px' height='300px' 
           src='${data.sprites.front_default}'/>`
           console.log(data)
       })
       .catch(err=>console.log(err))
   }