
$('.fromeliminar').submit(function(e){
    e.preventDefault();


});

Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })




//Swal.fire({
    
  //  title: 'Bienvenidod',
    //text: 'hola como estas',
    //icon: 'success',
    //confirmButtonText:'seleciones una opcion',
    //width: '50%',
    //allowOutsideClick: false,
    //input: 'button',
    //imageUrl: 'img/logo-b.png',
    //imageWidth: '200px'
    
  // })