
function marcardesmarcar(val){

    let valid_um = document.querySelector(`#${val}`).checked;

	if (valid_um == '') {
		document.querySelector(`#amount-${val}`).disabled = true;
        valid_um = "checked";
        console.log('teste 1')
	} else {
		document.querySelector(`#amount-${val}`).disabled = false;
        valid_um = "checked";
        console.log('teste 2')
	}      
					
}

function alteracheckbox(id){
        marcardesmarcar(id);
        document.querySelector(`#amount-${id}`).checked = '';
}




   