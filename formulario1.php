
<div style="width: 80%; float: right; display: inline-block;">
        <form>
        <h3>Publicar su perfil</h3>
        <br><br>
        <div style="max-width: 100%; margin: auto; text-align: center; display: block;">
        
        <label>
          Nombre:<br><br>
        <input type="text" placeholder="Ingrese su Nombre" name="Nombre" required>
        </label>
        <br><br>
        <label>
          Apellido:<br><br>
        <input type="text" placeholder="Ingrese su Apellido" name="Apellido" required>
        </label> 
        <br><br>
        <label>
          E-mail:<br><br>
        <input type="email" name="E-mail" required>
        </label>
        <br><br>
        <label>
          Contraseña: <br><br>
        <input type="password">
        </label>
        <br><br>
        <label>
          Profesión:<br><br>
        <select name="categorias" id="">
              <option value="Plomería">Plomería</option>
              <option value="Gasista">Gasista</option>
              <option value="Electricista">Electricista</option>
              <option value="Jardineria">Jardineria</option>
              <option value="Música">Música</option>
              <option value="Ama de Casa">Ama de Casa</option>
              <option value="Pinturería">Pinturería</option>
              <option value="Idiomas">Idiomas</option>
        </select> 
        </label>
        <br><br>
        <label>
         Provincia:<br><br>
        <select name="provincia" id="">
                <option value="Buenos Aires">Buenos Aires</option>
                <option value="Córdoba">Córdoba</option>
                <option value="Santa Fe">Santa Fe</option>
                <option value="Mendoza">Mendoza</option>
        </select> 
        </label>
        <br><br>
        <label>
            Ciudad:<br>
        <input type="text" required> 
        </label>
        <br><br>
        <label>
        Barrio:<br><br>
        <input type="text" required placeholder="Ingrese su Barrio"> 
        </label>
        <br><br>
        <label></label>
        Disponibilidad
        <select name="Disponibilidad" id="">
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
                <option value="Noche">Noche</option>
        </select>
        </label>
        <br><br>
        <label>
        Cobro aproximado de su sercivio
        <select name="Precio" id="">
                <option value="Menos de 1000">Menos de 1000</option>
                <option value="Entre 1000-2000">Entre 1000-2000</option>
                <option value="Entre 2000-3000">Entre 2000-3000</option>
                <option value="Entre 3000-4000">Entre 3000-4000</option>
                <option value="Más de 4000">Más de 4000</option>
        </select>
        </label>
        <br><br>
        Describa en pocas Palabras su perfil <br>
          <textarea name="Breve descripción" id="" cols="30" rows="10"></textarea> <br><br>
          <input type="submit" value="Enviar">
	  <input type="reset"  value="Resetear">
        </form>
</div>
