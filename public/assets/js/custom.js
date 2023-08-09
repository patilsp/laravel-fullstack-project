const button = document.querySelector('button')
console.log(button)

window.addEventListener('mousemove', (e) => {
  console.log(e.clientX, e.clientY)
  button.style.backgroundPosition = `bottom ${-e.clientY/25}%  right ${-e.clientX/25}%`
})