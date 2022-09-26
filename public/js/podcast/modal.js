function modal(element) {
    //console.log(element);

//
    document.querySelector('#nombre').innerText = element.nombre
    document.querySelector('#episodio').innerText = element.episodio
    document.querySelector('#descripcion').innerText = element.descripcion
//
var url = "{{ route('borrarPodcast', ':id') }}";
url = url.replace(':id', element.id);
document.getElementById('borrarPodcast').href = url;
console.log(url);
$('#modalPodcast').modal('show')

}


