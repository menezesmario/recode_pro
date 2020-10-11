let frutas = ['carambola', 'manga', 'caja', 'banana', 'morango'];

frutas.push('banana');
for (i = 0; i < 4; i++) {
  console.log(frutas[i]);
}

let num = [];
for (i = 0; i < 20; i++) {
  if (i != 0 && i % 2 == 0) {
    if (num.length < 10) {
      num.push(i);
    }
  }
}

num.pop();
num.splice(1, 1);

console.log(num);

let num2 = [];
let i = 0;
while (num2.length < 10) {
  i++;
  if (i != 0 && i % 2 == 0) {
    num2.push(i);
  }
}

console.log(num2);
