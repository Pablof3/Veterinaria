// var nroDireccion=0;
// function AgregarCamposDireccion() 
// {  
//     var formRow=document.createElement('div');
//     formRow.classList.add(['form-row ','mb-3']);

//     var colMd2=document.createElement('div');
//                 colMd2.classList.add('col-md-2');
//     var label=document.createElement('label');
//     var labelmsg=document.createTextNode('Descripcion');
//     label.appendChild(labelmsg);

    
//     var element=`<div class="form-row mb-3">

//     <div class="col-md-2">
//         <label for="">Descripcion</label>
//         <input type="text"
//                 class="form-control"
//                 placeholder="Descripcion"
//                 name="Cliente[Direcciones][${nroDireccion}][descripcion]" required>
//         <div class="invalid-tooltip">
//             Aviso
//         </div>
//     </div>
//     <div class="col-md-6">
//         <label for="">Direccion</label>
//         <input type="text"
//                 class="form-control"
//                 placeholder="Direccion"
//                 name="Cliente[Direcciones][${nroDireccion}][direccion]" required>
//         <div class="invalid-tooltip">
//             Aviso
//         </div>
//     </div>
//     <div class="col-md-2">
//         <label for="">Latitud</label>
//         <input type="text"
//                 class="form-control"
//                 placeholder="Latitud"
//                 name="Cliente[Direcciones][${nroDireccion}][latitud]" required>
//         <div class="invalid-tooltip">
//             Aviso
//         </div>
//     </div>
//     <div class="col-md-2">
//         <label for="">Longitud</label>
//         <input type="text"
//                 class="form-control"
//                 placeholder="Longitud"
//                 name="Cliente[Direcciones][${nroDireccion}][longitud]" required>
//         <div class="invalid-tooltip">
//             Aviso
//         </div>
//     </div>
// </div>`;
// var clienteDirecciones=document.getElementById('ClienteDirecciones');
// clienteDirecciones.appendChild(element);
// }