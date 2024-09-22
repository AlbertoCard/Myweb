<div>
    <label for="email">Email: </label>
    <input type="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email" value="<?php echo $registro_contacto['email'] ?>" disabled required>
    <input type="hidden" name="email_hdn" value="<?php echo $registro_contacto["email"]; ?>">
</div>
<div>
    <label for="nombre">Nombre: </label>
    <input type="text" class="cambio" name="nombre_txt" placeholder="Escribe tu nombre" title="Tu nombre" value="<?php echo $registro_contacto["nombre"]; ?>" required>
</div>
<div>
    <label for="m">Sexo:</label>
    <input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" <?php if($registro_contacto["sexo"] == "M"){echo "checked";} ?> require> <label for="m">Masculino</label>

    <input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" <?php if($registro_contacto["sexo"] == "F"){echo "checked";} ?> required> <label for="f">Femenino</label>
</div>
<div>
    <label for="nacimiento">Fecha de nacimiento: </label>
    <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" placeholder="Escribe tu cumpleaños" title="Tu cumple" value="<?php echo $registro_contacto["nacimiento"]; ?>" required> 
</div>
<div>
    <label for="telefono">Telefono: </label>
    <input type="number" id="telefono" class="cambio" name="telefono_txt" placeholder="Ingresa tu telefono" title="Tu telefono" value="<?php echo $registro_contacto["telefono"]; ?>" required>
</div>
<div>
    <label for="pais">Pais: </label>
    <select name="pais_slc" id="pais" class="cambio" required>
        <option value="">- - -</option>
        <?php include("select-pais.php");?>
    </select>
</div>
<div>
    <label for="foto">Foto: </label>
    <input type="file" id="foto" name="foto_fls" title="Sube tu foto">
    <input type="hidden" name="foto_hdn" value="<?php echo $registro_contacto["imagen"]; ?>">
    <div>
        <img src="<?php echo "../".$registro_contacto["imagen"]; ?>" alt="">
    </div>
</div>
<div>
    <input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="Agregar">
</div>
