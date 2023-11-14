async function getAllGames(){
  const response = await fetch('/games');
  const games = await response.json();
  return games;
}

async function createGameElements(){
    const fetchedGames = await getAllGames();
    const allGames = document.getElementById("allgames");

    fetchedGames.forEach((game) => {
        const gameContainer = document.createElement('article');
        gameContainer.id = 'game';
        const image = document.createElement('img')
        image.id = 'img';
        const name = document.createElement('h3');
        name.id = 'featured-title';
        const description = document.createElement('p');
        description.id = 'featured-snippet';
        const rating = document.createElement('div');
        rating.id = 'rating';
        const span1 = document.createElement('span');
        const span2 = document.createElement('span');
        const span3 = document.createElement('span');
        const span4 = document.createElement('span');
        const span5 = document.createElement('span');

        image.src = ('https://images.hindustantimes.com/tech/img/2023/09/06/960x540/Baldur_Gate_3_1694006233080_1694006237849.jpg')
        name.textContent = game.name;
        description.textContent = game.description;
        rating.textContent = game.aggregate_rating;

        gameContainer.className = "game_container"

        gameContainer.appendChild(image);
        gameContainer.appendChild(name);
        gameContainer.appendChild(description)
        gameContainer.appendChild(rating)
        allGames.appendChild(gameContainer);

    })
    console.log(fetchedGames);


}

createGameElements();