//ini adalah objek
// let mahasiswa = {
//     nama : "Resthiana",
//     nrp : "173040057",
//     email : "resthiana123@gmail.com"
// }

//hasilnya objek 
//console.log(mahasiswa);

//mengubah objek jadi json
//console.log(JSON.stringify(mahasiswa));

//mengubah json jadi objek mah pake ajax
//panggil objek ajax
let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 & xhr.status == 200){
        let mahasiswa = this.responseText;
        console.log(mahasiswa);
    }
}
xhr.open('GET', 'coba.json', true);