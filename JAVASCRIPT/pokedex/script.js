//             afficherPokemon(pokemon)
//         });
// };

// const afficherPokemon=(pokemon)=>{
//     const pokemonHTML= pokemon => { `
//     <img src="${pokemon.image}">`}
// }

//         // <p>nom pokemon</p>
//         // <p>image du pokemon</p>
//         // <p>type pokemon</p>
// chercherPokemon();


// const chercherPokemon = function(){
//     const promises = [];
//     for(let i =1; i<=1279; i++){
//         const url = `https://pokeapi.co/api/v2/pokemon/${i}`;

//         promises.push(fetch(url).then( Response => Response.json()))}

//         Promise.all(promises).then(resultat => {
//             const pokemon = resultat.map((data) => ({
//                 nom:data.name,
//                 id:data.id,
//                 image:data.sprites['front_default'],
//                 type:data.types.map(type => type.type.name)
//             }));
//         })
//     }


const pokedex = document.getElementById("pokemon");
const totalPokemon = 905;
const idPokemonRandom = Math.floor(Math.random() * totalPokemon)+1;
fetch(`https://pokeapi.co/api/v2/pokemon/${idPokemonRandom}`)
    .then(response=>response.json())
    .then(data=>{
        const pokemonHTML=`
       <div>
        <h2> ${data.name} </h2>
        <img src="${data.sprites.front_default}"/>
        </div>
        `;
        pokedex.innerHTML=pokemonHTML;
    });
