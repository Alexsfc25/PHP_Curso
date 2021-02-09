<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no,maximum-scale=1.0,
              user-scalable=no">
        <title>Formulario PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre</label>
            <input name="nombre" id="nombre" type="text" minlength="3" required="required"
                   placeholder="Inserte nombre"/>
            <br/>
            <label for="apellido">Apellido</label>
            <input name="apellido" id="apellido" type="text" pattern="[A-Z]+" autofocus="autofocus" maxlength="4"
                   required="true" placeholder="Inserte Apellido"/>
            <br/>
            <label for="boton">Button</label>
            <input name="boton" id="boton" type="button" value="Botón"/>
            <br/>
            <label for="sexo">Sexo</label>
            <label for="hombre">Hombre</label>
            <input name="hombre" id="hombre" type="checkbox"/>
            <label for="mujer">Mujer</label>
            <input name="mujer" id="mujer" type="checkbox" checked/>
            <br/>
            <label for="color">Color</label>
            <input name="color" id="color" type="color"/>
            <br/>
            <label for="fecha">Fecha</label>
            <input name="fecha" id="fecha" type="date"/>
            <br/>
            <label for="email">Email</label>
            <input name="email" id="email" type="email"/>
            <br/>
            <label for="archivo">Archivo</label>
            <!--multiple para seleccionar multiples archivos-->
            <input name="archivo" id="archivo" type="file" multiple="true"/>
            <br/>
            <label for="oculto">Hidden</label>
            <input name="oculto" id="oculto" type="hidden"/>
            <br/>
            <label for="numero">Número</label>
            <input name="numero" id="numero" type="number"/>
            <br/>
            <label for="contraseña">Contraseña</label>
            <input name="contraseña" id="contraseña" type="password"/>
            <br/>
            <label for="continente">Continente</label>
            <br/>
            <label for="america">América</label>
            <input name="continente" id="america" value="América" type="radio"/>
            <label for="asia">Asia</label>
            <input name="continente" id="asia" value="Asia" type="radio"/>
            <label for="europa">Europa</label>
            <input name="continente" id="europa" value="Europa" type="radio"/>
            <br/>
            <label for="pagina">Página Web</label>
            <input name="pagina" id="pagina" type="url"/>
            <br/>
            <label for="area">Página Web</label>
            <textarea id="area  "></textarea>
            <br/>
            <label for="peliculas">Peliculas</label>
            <select name="peliculas">
                <option value="Nemo">Nemo</option>
                <option value="Hercules">Hercules</option>
                <option value="Batman">Batman</option>
                <option value="bob_esponja">Bob Esponja</option>
            </select>

            <input type="submit" value="Enviar" />
        </form>
    </body>


</html>