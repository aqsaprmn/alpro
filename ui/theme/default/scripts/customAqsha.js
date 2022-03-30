// COLLPASE

const triggerCollapse = document.querySelectorAll('#triggerCollapse');

for (let i = 0; i < triggerCollapse.length; i++) {
    const triggerCollapseI = triggerCollapse[i];
    
    triggerCollapseI.addEventListener('click' , function (e) {
        e.preventDefault();
        e.stopPropagation();

        const collapseTable = document.querySelectorAll('#collapseTable');
        const idodp = this.dataset.id;
        for (let j = 0; j < collapseTable.length; j++) {
            const collapseTableJ = collapseTable[j];

            const idodpCollapse = collapseTableJ.dataset.id;

            if ( idodpCollapse == idodp ) {
                collapseTableJ.classList.toggle('dnone');
            }
            else {
                collapseTableJ.classList.add('dnone');
            }
        }
     })
}

// DECIMAL
const inputDecimal = document.querySelectorAll('.decimal');

for (let i = 0; i < inputDecimal.length; i++) {
    const inputDecimalI = inputDecimal[i];
    
    inputDecimalI.addEventListener('keyup' , function (e) { 
        const alp = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"," "];
        var key = String.fromCharCode(e.keyCode);
        // console.log(key);
        const valid = /(?=[^\0])(?=^([0-9]{0,6})(\.[0-9]{0,6}){0,1}$)/.test(this.value);
        // console.log(valid);
        let decVal = this.value;
        if (alp.includes(key)) {
            // console.log("Input Number!");
            this.value = "";
        }

        if(!valid){
            // console.log("Invalid Input!");
            this.value = decVal.substring(0, decVal.length - 1);
        }
     })
}

// SEARCH URL PAGIN

const formAll = document.getElementsByTagName('form');

for (let i = 0; i < formAll.length; i++) {
    const formAllI = formAll[i];

    const formKeyword = document.querySelector('form.keyword');
    if (formAllI === formKeyword) {
        const input = formAllI.querySelector('input');
        let formAct = formKeyword.action;
        let forAct = ``;
        let tempFormAct = ``;
        
        if (formAct.endsWith('/') === true) {
            forAct = formAct.slice(0,-1);
        }else {
            forAct = formAct;
        }

        if (input.value !== "") {
            tempFormAct = forAct + ' ' + input.value + '/';
            formKeyword.action = tempFormAct;
        }

        input.addEventListener('keyup' , function() {
            if (this.value != "") {    
                tempFormAct = forAct + ' ' + this.value + '/';
                formKeyword.action = tempFormAct;
            } else {
                tempFormAct = forAct + this.value + '/';
                formKeyword.action = tempFormAct;
            }

            console.log(formKeyword.action);
        })
    }
}

//Replace state if Form submission 

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }

// const form = document.getElementsByTagName('form');

// for (let i = 0; i < form.length; i++) {
//     const formI = form[i];

//     if (formI.getAttribute('id') === 'formInputTable') {
//         const divInputTable = formI.querySelectorAll('.form-group:not(:last-child)');

//         for (let j = 0; j < divInputTable.length; j++) {
//             const divInputTableJ = divInputTable[j];
//             const dataTable = divInputTableJ.querySelector('div#dataTable')
            
//             if (dataTable) {

//                 const prevDivDataTable = dataTable.previousElementSibling;

//                 const btnPrevDiv = prevDivDataTable.querySelector('button');

//                 const inputPrevDiv = prevDivDataTable.querySelector('input');

//                 const dataTableInput = dataTable.querySelector('div:last-child');
                
//                 const tableData = divInputTableJ.querySelector('table#tableInput1');
                
//                 const tableTemp = divInputTableJ.querySelector('table#tableInput2');

//                 const pagination = tableData.nextElementSibling;

//                 const tableRow = tableData.rows;

//                 const jumlahData = tableRow.length;

//                 const dataPerHal = 1;

//                 const jumlahHal = Math.ceil(jumlahData / dataPerHal);

//                 const dataTableLastIndex = jumlahData-1;

//                 let pagin = ``;

//                 const adjacents = 2;

//                 inputPrevDiv.addEventListener('focus', function () { 
//                     dataTable.classList.remove('dnone');
//                  })

//                 btnPrevDiv.addEventListener('click' , function () { 
//                     dataTable.classList.toggle('dnone');
//                 })

//                 const dataTableRow = tableData.rows;
//                 for (let i = 0; i < dataTableRow.length; i++) {
//                     const datatableRowI = dataTableRow[i];
//                     let tableCell = datatableRowI.cells;

//                     datatableRowI.onclick = function () { 
//                         for (let j = 0; j < dataTableRow.length; j++) {
//                             const tableRowEl = dataTableRow[j];

//                             if (tableRowEl === datatableRowI) {
//                                 tableRowEl.setAttribute('class' , '');
//                                 tableRowEl.classList.add('trActive');

//                                 inputPrevDiv.value = tableCell.item(1).textContent; 
//                             }
//                             else {
//                                 tableRowEl.classList.remove('trActive');
//                             }
//                         }
//                     }
//                 }

//                 //Pagination JavaScript

//                 if (jumlahHal >= 1) {
//                     pagin += `<ul class="pagination pagination-sm">`;

//                     if ( jumlahHal < 7 + (adjacents * 2) ) {
//                         for (let i = 1 ; i <= jumlahHal; i++) {
//                             pagin += `<li class=''><a class'' href='' data-id='${i}'>${i}</a></li>`;
//                         }
//                     }
//                     else if ( jumlahHal > 5  + (adjacents * 2) ) {

//                     }
//                 }

//                 pagin += `</ul>`;

//                 pagination.innerHTML = pagin;

//                 const paginationUl = pagination.querySelector('ul');
//                 const paginationLi = paginationUl.querySelectorAll('li');

//                 for (let i = 0; i < paginationLi.length; i++) {
//                     const paginationLiI = paginationLi[i];
                    
//                     const aPagin = paginationLiI.querySelector('a');

//                     aPagin.addEventListener('click' , function (e) {
//                         e.preventDefault();
//                         e.stopPropagation();    
//                         const paginationLiAct = aPagin.parentElement;

//                         for (let j = 0; j < paginationLi.length; j++) {
//                             const paginationLiJ = paginationLi[j];
                            
//                             if (paginationLiJ === paginationLiAct) {

//                                 paginationLiJ.classList.add('active');

//                                 const dataIdaPage = aPagin.dataset.id;

//                                 const dataKe = (dataPerHal * dataIdaPage) - dataPerHal;
                                
//                                 if (tableTemp.innerHTML) {
//                                     tableTemp.innerHTML = '';
//                                 }
                                
//                                 const dataFinis = dataKe+dataPerHal;

//                                 if (j === paginationLi.length-1) {
//                                     for (let l = dataKe; l <= dataTableLastIndex; l++) {
//                                         const tableRowL = tableRow[l];
//                                         tableTemp.appendChild(tableRowL);
//                                     }
//                                 }
//                                 else {
//                                     for (let l = dataKe; l < dataFinis; l++) {
//                                         const tableRowL = tableRow[l];
//                                         tableTemp.appendChild(tableRowL);
//                                     }
//                                 }
                                
//                                 // trClickCopas();
//                             }
//                             else {
//                                 paginationLiJ.classList.remove('active');
//                             }
//                         }
//                      });
//                 }

//             }
//         }
//     }
// }








// const btnType = document.getElementById('btnType');
// const dataTableType = document.getElementById('dataTableType');
// const tableType = document.getElementById('tableType');
// const inputType = document.getElementById('inputType');
// const divDua = dataTableType.querySelector('div:last-child');

// const dataTable = [
//     [
//         1,
//         'Perumahan'
//     ],
//     [
//         2,
//         'Apartment'
//     ],
//     [
//         3,
//         'Hotel'
//     ],
//     [
//         4,
//         'Kostan'
//     ],
//     [
//         5,
//         'Kontrakan'
//     ],
//     [
//         6,
//         'Hutan'
//     ]
    
// ]

// const jumlahData = dataTable.length;
// const jumlahDataPerHal = 8;
// const jumlahHal = Math.ceil(jumlahData / jumlahDataPerHal);
// const dataTableLastIndex = dataTable.length-1;


// for (let i = 1; i <= jumlahHal; i++) {
//     const aPag = document.createElement('a');
//     aPag.setAttribute('href' , '');
//     aPag.setAttribute('data-id' , i);
//     aPag.setAttribute('class' , 'aPag');
//     const textAPage = document.createTextNode(i);
//     aPag.appendChild(textAPage);
//     divDua.appendChild(aPag);
// }


// const aPagin = document.getElementsByClassName('aPag');
// aPagin[0].style.background = '#00469e'; 
// aPagin[0].style.color = 'white';
// aPagin[0].classList.add('disabled');
// const dataIdaPage = aPagin[0].getAttribute('data-id');
// const dataKe = (jumlahDataPerHal * dataIdaPage) - jumlahDataPerHal;

// if ((dataKe+jumlahDataPerHal) > dataTableLastIndex) {
//     for (let l = dataKe ; l <= (dataKe+dataTableLastIndex) ; l++) {
//         const dataTableL = dataTable[l];

//         const trType = document.createElement('tr');
//         tableType.appendChild(trType);

//         for (let k = 0; k < dataTableL.length; k++) {
//             const dataTableK = dataTableL[k];
//             const tdType = document.createElement('td');
//             tdType.innerText = dataTableK;
//             trType.appendChild(tdType);
//         }
//     }
// }
// else {
//     for (let l = dataKe ; l < (dataKe+jumlahDataPerHal) ; l++) {
//         const dataTableL = dataTable[l];

//         const trType = document.createElement('tr');
//         tableType.appendChild(trType);

//         for (let k = 0; k < dataTableL.length; k++) {
//             const dataTableK = dataTableL[k];
//             const tdType = document.createElement('td');
//             tdType.innerText = dataTableK;
//             trType.appendChild(tdType);
//         }
//     }
// }

// for (let i = 0; i < aPagin.length; i++) {
//     const aPaginI = aPagin[i];

//     aPaginI.addEventListener('click' , function (e) { 
//         e.preventDefault();
//         e.stopPropagation();

//         for (let j = 0; j < aPagin.length; j++) {
//             const aPaginJ = aPagin[j];
            
//             if (j === i) {
//                 aPaginJ.style.background = '#00469e'; 
//                 aPaginJ.style.color = 'white';
//                 aPaginJ.classList.add('disabled');
//                 const dataIdaPage = aPaginJ.getAttribute('data-id');
//                 const dataKe = (jumlahDataPerHal * dataIdaPage) - jumlahDataPerHal;
                
//                 if (tableType.innerHTML) {
//                     tableType.innerHTML = '';
//                 }
                
//                 const dataFinis = dataKe+jumlahDataPerHal;
//                 if (j === aPagin.length-1) {
//                     for (let l = dataKe; l <= dataTableLastIndex; l++) {
//                         const dataTableL = dataTable[l];
    
//                         const trType = document.createElement('tr');
//                         tableType.appendChild(trType);
                   
//                         for (let k = 0; k < dataTableL.length; k++) {
//                            const dataTableK = dataTableL[k];
//                            const tdType = document.createElement('td');
//                            tdType.innerText = dataTableK;
//                            trType.appendChild(tdType);
//                         }
//                     }
//                 }
//                 else {
//                     for (let l = dataKe; l < dataFinis; l++) {
//                         const dataTableL = dataTable[l];
    
//                         const trType = document.createElement('tr');
//                         tableType.appendChild(trType);
                   
//                         for (let k = 0; k < dataTableL.length; k++) {
//                            const dataTableK = dataTableL[k];
//                            const tdType = document.createElement('td');
//                            tdType.innerText = dataTableK;
//                            trType.appendChild(tdType);
//                         }
//                     }
//                 }
                
//                 trClickCopas();
//             }
//             else {
//                 aPaginJ.style.background = '#0061db';
//                 aPaginJ.classList.remove('disabled');
//             }
//         }
//     })
// }

// btnType.addEventListener('click' , function () { 
//     if (dataTableType.style.display === 'block') {
//         dataTableType.style.display = 'none';
//         dataTableType.classList.add('dnone');
//     }
//     else {
//         dataTableType.style.display = 'block';
//         dataTableType.classList.remove('dnone');
//     }
//  })

//  for (let j = 0; j < jumlahDataPerHal; j++) {
//      const dataTableJ = dataTable[j];
//      const trType = document.createElement('tr');
//      tableType.appendChild(trType);

//      for (let k = 0; k < dataTableJ.length; k++) {
//         const dataTableK = dataTableJ[k];
//         const tdType = document.createElement('td');
//         tdType.innerText = dataTableK;
//         trType.appendChild(tdType);
//      }
//  }

// dataTable.forEach(function (val , index) { 
//     const trType = document.createElement('tr');
//     tableType.appendChild(trType);

//     val.forEach(function (item) { 
//         const tdType = document.createElement('td');
//         tdType.innerText = item;
//         trType.appendChild(tdType);
//      })
//  })

// inputType.onfocus = function () { 
//     dataTableType.style.display = 'block';
//     dataTableType.classList.remove('dnone');

//     if (dataTableType.style.display === 'block') {
//         trClickCopas();
//     }
// }


