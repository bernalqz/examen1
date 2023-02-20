function confirmacion(e)
{
    if(confirm("¿Realmente desea eliminar este estudiante?"))
    {
        return true;
    }
    else
    {
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".BotonEliminar");

for (var i = 0; i <linkDelete.length; i++)
{
    linkDelete[i].addEventListener('click', confirmacion);
}