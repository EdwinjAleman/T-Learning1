<form name="forminfo" id="forminfo" onSubmit="event.preventDefault();">

    <input type="text" name="inf_id" hidden>

    <label for="inf_soms"> Historia </label> <br>
    <textarea name="mensaje" name="inf_soms"></textarea> <br>

    <label for="inf_visn"> Mision </label> <br>
    <textarea name="mensaje" name="inf_visn"></textarea> <br>

    <label for="inf_soms"> Vision </label> <br>
    <textarea name="mensaje" name="inf_soms"></textarea> <br>

    <label for="inf_dirctr_genrl">Director General</label><br>
    <input type="text" name="inf_dirctr_genrl"><br>

    <label for="inf_dirctr_regnl">Directora Regional</label><br>
    <input type="text" name="inf_dirctr_regnl"><br>

    <label for="inf_subdrctr_centr">Subdirecto de Centro </label><br>
    <input type="text" name="inf_subdrctr_centr"><br>

    <label for="inf_cordndr_msnl"> Coordinador Misional </label><br>
    <input type="text" name="inf_cordndr_msnl"><br>


    <input id="btnguardar" type="button" value="Grabar" onclick="InsertAnuncio();">

</form>