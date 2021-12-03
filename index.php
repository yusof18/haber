<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>TELESALUD </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<!-- particles.js container --> <div id="particles-js"> 
  

<button class="btn btn-dark btn-lg position-relative position-absolute top-0 start-50 translate-middle-x fw-light ">
Pinchar aqui Desarrollador JGLL TELESALUD BOLIVIA<svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
</button>

</div>
 <!-- stats - count particles  <div class="count-particles"> -->
 <span class="js-count-particles"> 
  </span> particles </div>  
  <script src="particles.min.js">
    
  </script> <!-- stats.js lib --> 
<!--  <script src="stats.min.js"></script>
 partial -->

  <script>
    var button = document.querySelector('button');

button.onclick = function() {
  Swal.fire({
  title: 'Anota tu nombre',
  input: 'text',
  inputAttributes: {
    autocapitalize: 'off'
  },
  showCancelButton: true,
  confirmButtonText: 'Quiero saber que paso?',
  showLoaderOnConfirm: true,
  preConfirm: (login) => {
    return fetch(`//api.github.com/users/${login}`)
      .then(response => {
        if (!response.ok) {
          throw new Error(response.statusText)
        }
        return response.json()
      })
      .catch(error => {
        Swal.showValidationMessage(
          `No puedes saltarte esto wey hay un: ${error}`
        )
      })
  },
  allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: `${result.value.login} - Imaynalla - LA PAGINA DE TELESALUD esta en fase de construccion ademas nos extenderemos Con la tecnologia LoT data analitics marcaremos un mañana haremos realidad el sueño de todo medico historia clinica digital nacional hecha por medicos discutida por medicos a poco no esperadnos`,
      imageUrl: result.value.avatar_url
    })
  }
})

}
 


  </script> <!-- stats.js lib -->

  <script > 
  
  var audio = new Audio("1.mp3");

document.onclick = function() {
  audio.play();
  document.addEventListener('contextmenu', event => event.preventDefault());

}</script>

    <script  src="./script.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script><script  src="./script.js"></script>

</body>
</html>
