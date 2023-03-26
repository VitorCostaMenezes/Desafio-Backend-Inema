


// Controle dos botpoes de permissão de perfil do sgq, e auditor

// document.getElementById("p_sgq_auditor").disabled = true;
// document.getElementById("auditor_alt").style.color = '#bf1919';

function marcardesmarcar(val){

        // $(`#amount_${val}`).attr("disabled", false)
				// document.querySelector(`#amount_${val}`).disabled = true;



                // if($(`#amount_${val}`).is(':checked')){
                //     $(`#amount_${val}`).prop("disabled", true)

                // } else {
                //     $(`#amount_${val}`).prop("disabled", false)

                // }

    let valid_um = document.querySelector(`#${val}`).checked;

	if (valid_um == '') {
		document.querySelector(`#amount-${val}`).disabled = true;
		// document.querySelector(`#amount_${val}`).checked = '';
        valid_um = "checked";
        console.log('teste 1')

	} else {
		document.querySelector(`#amount-${val}`).disabled = false;
		// document.querySelector(`#amount_${val}`).checked = 'checked';
        valid_um = "checked";
        console.log('teste 2')

	}




                
					
    }


    function alteracheckbox(id){
        marcardesmarcar(id);
        document.querySelector(`#amount-${id}`).checked = '';
}





    // function alteracheckbox(id){
    //     marcardesmarcar(id);
    //     document.querySelector(`#amount_${val}`).checked = '';
    //     // document.querySelector('#p_sgq_3').checked = '';
    // }
// 		let teste  = document.querySelector(val).checked;

// 		if(val == '#p_sgq_auditor'){
// 			if(teste != ''){
// 				document.querySelector(val).checked = '';	
// 				// document.querySelector('#p_sgq_auditor').disabled = true;
// 				// document.querySelector('#auditor').style.color = '#bf1919';
// 			}else{
// 				controlperfilsgqalt();
// 			}
// 		}else if (val != '#p_sgq_auditor' && (val == '#p_sgq_1' || val ==  '#p_sgq_2' )){
// 			if (teste == '') {
// 				let teste_audit  = document.querySelector('#p_sgq_auditor').checked;
// 					document.querySelector('#p_sgq_auditor').disabled = false;
// 					document.querySelector(val).checked = 'checked';
// 					document.querySelector('#auditor_alt').style.color = '#000000';

// 					if(val == '#p_sgq_1' || val == '#p_sgq_2') {
// 						if(teste_audit != ''){
// 							document.querySelector('#p_sgq_auditor').disabled = false;
// 							document.querySelector('#p_sgq_auditor').checked = 'checked';	
// 							document.querySelector('#auditor_alt').style.color = '#000000';
// 						}
// 					}	
// 			}else{

// 				document.querySelector(val).checked = '';

// 				if(val == '#p_sgq_1' || val == '#p_sgq_2') {
// 					let perfil_adm = document.querySelector('#p_sgq_1').checked;
// 					let perfil_controler = document.querySelector('#p_sgq_2').checked;

// 					if(perfil_adm == '' && perfil_controler == '' ){
// 						document.querySelector('#p_sgq_auditor').checked = '';
// 						document.querySelector('#p_sgq_auditor').disabled = true;
// 						document.querySelector('#auditor_alt').style.color = '#bf1919';
// 					}
// 				}	
// 			}	
// 		} else {
// 			if(teste != ''){
// 				document.querySelector(val).checked = '';
// 			} else {
// 				document.querySelector(val).checked = 'checked';
// 			}
// 		}
// 	}


// function controlperfilsgqalt() {

// 	let valid_um = document.querySelector('#p_sgq_1').checked;
// 	let valid_dois = document.querySelector('#p_sgq_2').checked;

// 	if (valid_um == '' && valid_dois == '') {
// 		document.querySelector('#p_sgq_auditor').disabled = true;
// 		document.querySelector('#p_sgq_auditor').checked = '';	
// 		document.querySelector('#auditor_alt').style.color = '#bf1919';

// 	} else {
// 		document.querySelector('#p_sgq_auditor').disabled = false ;
// 		document.querySelector('#p_sgq_auditor').checked = 'checked';
// 		document.querySelector('#auditor_alt').style.color = '#000000';
// 	}
// }



// function alteracheckbox1(id){
// 	marcardesmarcar(id);
// 	document.querySelector('#p_sgq_2').checked = '';
// 	document.querySelector('#p_sgq_3').checked = '';
// }

// function alteracheckbox2(id){
// 	marcardesmarcar(id);
// 	document.querySelector('#p_sgq_1').checked = '';
// 	document.querySelector('#p_sgq_3').checked = '';
// }

// function alteracheckbox3(id){
// 	marcardesmarcar(id);
// 	document.querySelector('#p_sgq_1').checked = '';
// 	document.querySelector('#p_sgq_2').checked = '';
// 	document.querySelector('#p_sgq_auditor').checked = '';		
// 	document.querySelector('#auditor_alt').style.color = '#bf1919';
// 	document.querySelector('#p_sgq_auditor').disabled = true ;

// }

// document.getElementById("p_sgq_auditor").disabled = true;
// document.getElementById("auditor_alt").style.color = '#bf1919';

// 	function marcardesmarcar(val){
					
// 		let teste  = document.querySelector(val).checked;

// 		if(val == '#p_sgq_auditor'){
// 			if(teste != ''){
// 				document.querySelector(val).checked = '';	
// 				// document.querySelector('#p_sgq_auditor').disabled = true;
// 				// document.querySelector('#auditor').style.color = '#bf1919';
// 			}else{
// 				controlperfilsgqalt();
// 			}
// 		}else if (val != '#p_sgq_auditor' && (val == '#p_sgq_1' || val ==  '#p_sgq_2' )){
// 			if (teste == '') {
// 				let teste_audit  = document.querySelector('#p_sgq_auditor').checked;
// 					document.querySelector('#p_sgq_auditor').disabled = false;
// 					document.querySelector(val).checked = 'checked';
// 					document.querySelector('#auditor_alt').style.color = '#000000';

// 					if(val == '#p_sgq_1' || val == '#p_sgq_2') {
// 						if(teste_audit != ''){
// 							document.querySelector('#p_sgq_auditor').disabled = false;
// 							document.querySelector('#p_sgq_auditor').checked = 'checked';	
// 							document.querySelector('#auditor_alt').style.color = '#000000';
// 						}
// 					}	
// 			}else{

// 				document.querySelector(val).checked = '';

// 				if(val == '#p_sgq_1' || val == '#p_sgq_2') {
// 					let perfil_adm = document.querySelector('#p_sgq_1').checked;
// 					let perfil_controler = document.querySelector('#p_sgq_2').checked;

// 					if(perfil_adm == '' && perfil_controler == '' ){
// 						document.querySelector('#p_sgq_auditor').checked = '';
// 						document.querySelector('#p_sgq_auditor').disabled = true;
// 						document.querySelector('#auditor_alt').style.color = '#bf1919';
// 					}
// 				}	
// 			}	
// 		} else {
// 			if(teste != ''){
// 				document.querySelector(val).checked = '';
// 			} else {
// 				document.querySelector(val).checked = 'checked';
// 			}
// 		}
// 	}


// function controlperfilsgqalt() {

// 	let valid_um = document.querySelector('#p_sgq_1').checked;
// 	let valid_dois = document.querySelector('#p_sgq_2').checked;

// 	if (valid_um == '' && valid_dois == '') {
// 		document.querySelector('#p_sgq_auditor').disabled = true;
// 		document.querySelector('#p_sgq_auditor').checked = '';	
// 		document.querySelector('#auditor_alt').style.color = '#bf1919';

// 	} else {
// 		document.querySelector('#p_sgq_auditor').disabled = false ;
// 		document.querySelector('#p_sgq_auditor').checked = 'checked';
// 		document.querySelector('#auditor_alt').style.color = '#000000';
// 	}
// }



// function alteracheckbox1(id){
// 	marcardesmarcar(id);
// 	document.querySelector('#p_sgq_2').checked = '';
// 	document.querySelector('#p_sgq_3').checked = '';
// }

// function alteracheckbox2(id){
// 	marcardesmarcar(id);
// 	document.querySelector('#p_sgq_1').checked = '';
// 	document.querySelector('#p_sgq_3').checked = '';
// }

// function alteracheckbox3(id){
// 	marcardesmarcar(id);
// 	document.querySelector('#p_sgq_1').checked = '';
// 	document.querySelector('#p_sgq_2').checked = '';
// 	document.querySelector('#p_sgq_auditor').checked = '';		
// 	document.querySelector('#auditor_alt').style.color = '#bf1919';
// 	document.querySelector('#p_sgq_auditor').disabled = true ;

// }
