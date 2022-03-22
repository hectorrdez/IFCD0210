

let tabla = document.querySelector("table");

let i = 0;
setInterval(pedirDato, 100);

function pedirDato() {
  i++;
  if (i < 100) {
    fetch(`https://jsonplaceholder.typicode.com/todos/${i}`)
      .then(response => response.json())
      .then(data => guardar(data));
  }
}

function guardar(data) {
  let print = "";
  print += "<tr>";
  // data.userId
  print += `<td>${data.userId}</td>`;
  // data.id
  print += `<td>${data.id}</td>`;
  // data.title
  print += `<td>${data.title}</td>`;
  // data.completed
  print += `<td>${data.completed}</td>`;
  print += "</tr>";
  tabla.innerHTML += print;
}
