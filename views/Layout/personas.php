/**
 * Created by PhpStorm.
 * User: ENESTO
 * Date: 13-12-2017
 * Time: 22:32
 */


<div class="container">
    <form>
        <div class="form-group">
            <label for="exampleInputFile">Rut</label>
            <input type="text" class="form-control" id="exampleInputFile" placeholder="Enter Rut" />
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Primer Nombre</label>
            <input type="text" class="form-control" id="exampleInputFile" placeholder="Primer Nombre" />
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Segundo Nombre</label>
            <input type="text" class="form-control" id="exampleInputFile" placeholder="Segundo Nombre" />
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Primer Apellido</label>
            <input type="text" class="form-control" id="exampleInputFile" placeholder="Primer Apellido" />
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Segundo Apellido</label>
            <input type="text" class="form-control" id="exampleInputFile" placeholder="Segundo Apellido" />
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Sexo</label><br>
            <label for="exampleInputFile">Femenino</label>
            <input type="radio" name="sexo" value="Femenino" id="exampleInputFile"  /> <br>
            <label for="exampleInputFile">Masculino</label>
            <input type="radio" name="sexo" value="Masculino" class="form-control" id="exampleInputFile"  />
        </div>
        <div class="form-group">
            <label type="exampleInputFile">Fecha de nacimiento</label>
            <input type="date" class="form-group">
        </div>
        <div class="form-group">
            <label type="exampleInputFile">Sede cliente</label>
            <select class="form-control" id="exampleInputFile" x-placement="">
                <option value=""> Sede 1 </option>
                <option value=""> Sede 2 </option>
                <option value=""> Sede 3 </option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
