<script>
    //Función para validar una CURP
    function curpValida(curp) {
        var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

    if (!validado)  //Coincide con el formato general?
        return false;
    
    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
        lngSuma      = 0.0,
        lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }

    if (validado[2] != digitoVerificador(validado[1])) 
        return false;

    return true; //Validado
}


//Handler para el evento cuando cambia el input
//Lleva la CURP a mayúsculas para validarlo
function validarInput(input) {
    var curp = input.value.toUpperCase(),
    resultado = document.getElementById("resultado"),
    valido = "No válido";

    if (curpValida(curp)) { // ⬅️ Acá se comprueba
        valido = "Válido";
        resultado.classList.add("ok");
    } else {
        resultado.classList.remove("ok");
    }

    resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;
}
</script>
<script>
    // usamos onload para asegurarnos que existan los elementos en nuestro DOM
    window.onload = function() {
        var anchor = document.getElementById("curp");         
        
            // le asociamos el evento a nuestro elemento para tener un codigo 
            // html mas limpio y manejar toda la interaccion
            // desde nuestro script
            anchor.onclick = function() {
                // una variable donde pongo la url a donde quiera ir, 
                //podria estar de mas pero asi queda mas limpio la funcion window.open()
                var url = "https://consultas.curp.gob.mx/CurpSP/";
                window.open(url, "_blank", 'width=500,height=500'); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
            };
        }
    </script>
    <script>
    // usamos onload para asegurarnos que existan los elementos en nuestro DOM
    window.onload = function() {
        var anchor = document.getElementById("ine");         
        
            // le asociamos el evento a nuestro elemento para tener un codigo 
            // html mas limpio y manejar toda la interaccion
            // desde nuestro script
            anchor.onclick = function() {
                // una variable donde pongo la url a donde quiera ir, 
                //podria estar de mas pero asi queda mas limpio la funcion window.open()
                var ine = "http://listanominal.ine.mx/";
                window.open(url, "_blank", 'width=500,height=500'); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
            };
        }
    </script>