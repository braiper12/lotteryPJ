/*function formatoMoneda(input){

let valor = input.value;

     // Eliminar caracteres no numéricos
     valor = valor.replace(/[^\d.]/g, '');

     // Formatear como valor monetario
     //valor = parseFloat(valor).toFixed(2);

     // Agregar el símbolo de dólar y actualizar el valor en el input
     input.value = "$" + valor;



}