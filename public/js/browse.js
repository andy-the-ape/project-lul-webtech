async function getAllGames(){
  const response = await fetch('/games');
  const games = await response.json();
  return games;
}

async function createGameElements(){
    const fetchedGames = await getAllGames();
    const allGames = document.getElementById("allgames");

    fetchedGames.forEach((game) => {
        const gameContainer = document.createElement('div');
        const name = document.createElement('p');
        const description = document.createElement('p');
        const releaseDate = document.createElement('p');
        const rating = document.createElement('p');

        name.textContent = game.name;
        description.textContent = game.description;
        releaseDate.textContent = game.release_date;
        rating.textContent = game.aggregate_rating;

        gameContainer.className = "game_container"
        //gameContainer.style.border = "solid 2px red"

        gameContainer.appendChild(name);
        gameContainer.appendChild(description);
        gameContainer.appendChild(releaseDate)
        gameContainer.appendChild(rating)
        allGames.appendChild(gameContainer);

    })
    console.log(fetchedGames);


}

createGameElements();
