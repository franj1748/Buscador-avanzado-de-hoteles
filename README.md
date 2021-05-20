# Buscador-avanzado-de-hoteles
Código para incrustar en su página web un buscador avanzado de hoteles y vuelos. 

1.- Se debe incrustar en la página de la agencia el siguiente código:
 
      <div id="capa"></div>
      <script>
        $(document).ready(
          function (){
            $.get("https://panasystem.eurolatina.travel/public/buscador?idAgencia=2629", function (htmlexterno) {
            $("#capa").html(htmlexterno);
           });
        });
      </script>
 
2.- Asegurese de cumplir con lo siguiente:
 
   - Si su página no contiene jquery, por favor añadir en la cabecera de su página:
    
              <script src="//code.jquery.com/jquery-1.12.4.js"></script>
              
   - Si su página no contiene bootstrap jquery, por favor añadir en la cabecera de su página:
              
              <script src="https://www.eurolatina.travel/public/js/bootstrap.js"></script>
              
   - Si su página no contiene bootstrap tags input, por favor añadir en la cabecera de su página.
             
             <script src="https://panasystem.eurolatina.travel/public/js/bootstrap-tagsinput.js"></script>
              
   - Si su página no contiene bootstrap datePicker, por favor añadir en la cabecera de su página.
              
              <script src="https://panasystem.eurolatina.travel/public/js/bootstrap-datepicker.min.js"></script>
