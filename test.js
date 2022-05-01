let x = 0
console.log('start to count ...')
let startTime = Date.now()
while (x < 1000000000) {
  x++
}

console.log('Counted to ' + x)

let endTime = Date.now()
console.log(`${(endTime - startTime) / 1000} seconds`)
