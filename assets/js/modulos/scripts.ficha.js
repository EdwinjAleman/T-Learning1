function Crear(){

	var result=document.getElementById('tview');
	
	var fic_codigo = document.formficha.fic_codigo.value;
    var fic_fch_inc = document.formficha.fic_fch_inc.value;
    var fic_fch_fin = document.formficha.fic_fecfn.value;
    var fic_pro_for_id = document.formficha.fic_pro_for_id.value;
    var fic_tip_jor_id = document.formficha.fic_tip_jor_id.value;
    var fic_tip_ofe_id = document.formficha.fic_tip_ofe_id.value;
    var fic_mod_id = document.formficha.fic_mod_id.value;

	const ajax=new XMLHttpRequest(); 
	ajax.open("POST","main.php",true);
	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
											}else{}
										}else{}
									};
	
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("Ctr=ficha&Acc=insertar&fic_codigo="+fic_codigo+"&fic_fch_inc="+fic_fch_inc+"&fic_fch_fin="+fic_fch_fin+"&fic_pro_for_id="+fic_pro_for_id+"&fic_tip_jor_id="+fic_tip_jor_id+"&fic_tip_ofe_id="+fic_tip_ofe_id+"&fic_mod_id="+fic_mod_id);
}

function Borrar(fic_id){

	var result=document.getElementById('tview');

	const ajax=new XMLHttpRequest(); 

	ajax.open("POST","main.php",true);

	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
											}else{
												console.log('Ups,Me equivoque;');
											}
										}else{
											console.log("Ups, Me equivoque;");
										}
									};
	
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("Ctr=ficha&Acc=eliminar&fic_id="+fic_id+"&fic_codigo="+fic_codigo+"&fic_fch_inc="+fic_fch_inc+"&fic_fch_fin="+fic_fch_fin+"&fic_pro_for_id="+fic_pro_for_id+"&fic_tip_jor_id="+fic_tip_jor_id+"&fic_tip_ofe_id="+fic_tip_ofe_id+"&fic_mod_id="+fic_mod_id);
}

function Editar(id, codigo, ini, fin, pro, jor, ofe, mod){
    
    document.formficha.fic_id.value=id;
	document.formficha.fic_codigo.value=codigo;
    document.formficha.fic_fch_inc.value=ini;
    document.formficha.fic_fecfn.value=fin;
    document.formficha.fic_pro_for_id.value=pro;
    document.formficha.fic_tip_jor_id.value=jor;
    document.formficha.fic_tip_ofe_id.value=ofe;
    document.formficha.fic_mod_id.value=mod;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formficha").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var fic_id=document.formficha.fic_id.value;
	var fic_codigo = document.formficha.fic_codigo.value;
    var fic_fch_inc = document.formficha.fic_fch_inc.value;
    var fic_fch_fin = document.formficha.fic_fecfn.value;
    var fic_pro_for_id = document.formficha.fic_pro_for_id.value;
    var fic_tip_jor_id = document.formficha.fic_tip_jor_id.value;
    var fic_tip_ofe_id = document.formficha.fic_tip_ofe_id.value;
    var fic_mod_id = document.formficha.fic_mod_id.value;

	var ajax=new XMLHttpRequest();
	ajax.open("POST","main.php",true);
	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
												
											}else{
												console.log('Ups,Me equivoque;');
											}
										}else{
											console.log("Ups, Me equivoque;");
										}
									};
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("Ctr=ficha&Acc=actualizar&fic_id="+fic_id+"&fic_codigo="+fic_codigo+"&fic_fch_inc="+fic_fch_inc+"&fic_fch_fin="+fic_fch_fin+"&fic_pro_for_id="+fic_pro_for_id+"&fic_tip_jor_id="+fic_tip_jor_id+"&fic_tip_ofe_id="+fic_tip_ofe_id+"&fic_mod_id="+fic_mod_id);


	//cambiar la propiedad onsubmit
	//document.getElementById("formtipoofe").setAttribute('onSubmit','CrearForo();');
}