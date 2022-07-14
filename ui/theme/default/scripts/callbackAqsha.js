const hostloc = 'http://localhost/alpro/index.php?_route=datacall/';
const hostserv = 'http://103.242.181.10/alpro/index.php?_route=datacall/';

function trClickCopas(table , selectItem , input , closeTrigger) {
    const dataTableRow = table.rows;
    for (let i = 0; i < dataTableRow.length; i++) {
        const datatableRowI = dataTableRow[i];
        let tableCell = datatableRowI.cells;
        datatableRowI.onclick = function () { 
            for (let j = 0; j < dataTableRow.length; j++) {
                const tableRowEl = dataTableRow[j];

                if (tableRowEl === datatableRowI) {
                    tableRowEl.setAttribute('class' , '');
                    tableRowEl.classList.add('trActive');

                    input.value = tableCell.item(selectItem).textContent; 
                }
                else {
                    tableRowEl.classList.remove('trActive');
                }
            }
            closeTrigger.click();
            input.focus();
        }
    }
}

function dataTrApi(dataLength , data , dataName) {
    let tr = ``;
    data.forEach( e => {
        tr += `<tr>`;
        for (let i = 0; i < dataLength; i++) {
            tr += `<td class="">${e[dataName[i]]}</td>`;
        }      
        tr += `</tr>`;       
    });
    
    return tr;
}

const form = document.getElementById('formInputTable');
const divInput = form.querySelectorAll('div.form-group:not(:last-child)');

for (let i = 0; i < divInput.length; i++) {
    const divInputI = divInput[i];
    const dataTable = divInputI.querySelector('#dataTable');
    if (dataTable) {    
        const divInputIn = dataTable.previousElementSibling;
        const inputDivIn = divInputIn.querySelector('input');

        const idInputDivIn = inputDivIn.id;

        const divModalTable = dataTable.querySelector('.modal');
        const search = divModalTable.querySelector('#search');
        const table = divModalTable.querySelector('table');
        const tBody = divModalTable.querySelector('tbody');
        const divTable = divModalTable.querySelector('.dataTable');
        const close = divModalTable.querySelector('.close');
        const button = dataTable.querySelector('button');
       

        fetch(hostloc+idInputDivIn)
        // fetch(hostserv+idInputDivIn)
            .then( response => {
                response.json().then( (response) => {

                    const objLenght = Object.keys(response[0]).length;
                    const objName = Object.keys(response[0]);

                    tBody.innerHTML = dataTrApi(objLenght , response , objName);

                    const loader = divModalTable.querySelector('#loader');

                    search.addEventListener('keyup', function (e) {

                            const alpha = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0",' ','\b'];

                            const keyPress = String.fromCharCode(e.keyCode); 

                            if (alpha.includes(keyPress)) {
                                if (tBody.innerHTML) {
                                    tBody.innerHTML = '';
                                }
                                loader.classList.replace('dnone','dflex'); 
                                divTable.classList.add('dnone');
                                const val = search.value;
                
                                if (val != '' || val != null) {
                                    if (!loader.classList.contains('dnone')) {   
                                        const xhttp = new XMLHttpRequest;
                        
                                        xhttp.onreadystatechange = function () { 

                                            if (xhttp.status === 200) {
                                                loader.classList.replace('dflex' , 'dnone'); 
                                                divTable.classList.remove  ('dnone');
                                                if (xhttp.readyState === 4) {
                                                    const dataSearch = JSON.parse(xhttp.response);
                        
                                                    tBody.innerHTML = dataTrApi(objLenght , dataSearch , objName);

                                                        trClickCopas(table , 0 , inputDivIn , close);
                                                }
                                            }
                                        }
                        
                                        xhttp.open('GET' , hostloc+idInputDivIn+'/'+val);
                                        // xhttp.open('GET' , hostserv+idInputDivIn+'/'+val);
                                        xhttp.send();
                                    }
                                }
                                else {
                                    tBody.innerHTML = dataTrApi(objLenght , dataSearch , objName);
                                    trClickCopas(table , 0 , inputDivIn , close);
                                }
                            }
                        })
                    trClickCopas(table , 0 , inputDivIn , close);
                    })
            });
        inputDivIn.addEventListener('focus' , function () {
            if (inputDivIn.value == "" || inputDivIn.value == null) {
                button.click();
            }
            else {
                this.focus();
            }
        })
    }
}

// PORT ODC IN ADD ODP
// ONBLUR AFTER VALUE ID ODC ALREADY FIELD
for (let j = 0; j < divInput.length; j++) {
    const divInputJ = divInput[j];
    const dataSelect = divInputJ.querySelector('#dataSelect');
    if (dataSelect) {
        const form = dataSelect.parentElement.parentElement;
        const divInputFormIn = form.querySelectorAll('.form-group:not(:last-child)');
        for (let k = 0; k < divInputFormIn.length; k++) {
            const divInputFormInK = divInputFormIn[k];
            const dataTable = divInputFormInK.querySelector('#dataTable');
            if (dataTable) {
                const divInputIn = dataTable.previousElementSibling;
                const inputDivIn = divInputIn.querySelector('input');
                const select = dataSelect.querySelector('select');
                const idodp = select.dataset.idodp;
                const idSelect = select.id;
                const valInputDiv = inputDivIn.value;
                if (valInputDiv != '') {
                        fetch(hostloc + idSelect + '/' + valInputDiv+'/'+ idodp)
                        // fetch(hostserv + idSelect + '/' + valInputDiv+'/'+ idodp)
                        .then(response => { 
                            response.json().then(response => {
                                let option = ``;
                                for (let i = 0; i < response.length; i++) {
                                    const responseI = response[i];
                                    option += `<option {if $d['port_odc'] eq '${responseI}'}selected{/if}>${responseI}</option>`;
                                }
                                select.innerHTML = option;
                            });
                        });
                }
                inputDivIn.addEventListener('focusout', function () { 
                    const valInputDivIn = inputDivIn.value;
                    if (valInputDivIn != '') {
                        fetch(hostloc + idSelect + '/' + valInputDivIn)
                        // fetch(hostserv + idSelect + '/' + valInputDivIn)
                            .then(response => {
                                response.json().then(response => {
                                    let option = ``;
                                    for (let i = 0; i < response.length; i++) {
                                        const responseI = response[i];
                                        option += `<option {if $d['id_odc'] eq ${responseI}}selected{/if}>${responseI}</option>`;
                                    }
                                    select.innerHTML = option;
                            });
                        });
                    }
                })
            }       
        }
    }
}
