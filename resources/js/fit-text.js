window.fitText = (el, ratio = 1) => {
  const width = window.innerWidth / el.parentNode.clientWidth
  console.log(width, el.parentNode.clientWidth, window.innerWidth)
  const size = width / ratio
  el.style.fontSize = size + 'rem';
  // el.style.lineHeight = (size * (3/2.4)) + 'px';
}

window.resizeCards = () => {
  const cardCosts = document.querySelectorAll('.card-data-cost span')
  const cardNames = document.querySelectorAll('.card-data-name span')
  const cardPowers = document.querySelectorAll('.card-data-power span')
  const cardRarities = document.querySelectorAll('.card-data-rarity span')
  const cardTexts = document.querySelectorAll('.card-data-text span')

  for (let i = 0; i < cardCosts.length; i++) {
    window.fitText(cardCosts[i], 4)
  }

  for (let i = 0; i < cardNames.length; i++) {
    window.fitText(cardNames[i], 2)
  }

  for (let i = 0; i < cardPowers.length; i++) {
    window.fitText(cardPowers[i], 3)
  }

  for (let i = 0; i < cardTexts.length; i++) {
    window.fitText(cardTexts[i], 1.3)
  }

  for (let i = 0; i < cardRarities.length; i++) {
    window.fitText(cardRarities[i])
  }
}
