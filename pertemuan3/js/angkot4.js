let jmlAngkot = 10;
let angkotBeroprasi = 6;
let noAngkot = 1;

for(let noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++){
    if( noAngkot <= angkotBeroprasi){
        console.log('Angkot No. ' +noAngkot+ ' beroprasi baik');
    } else if( noAngkot === 8){
        console.log('Angkot No.' +noAngkot+ ' Lembur');
    } else {
        console.log('Angkot No. ' +noAngkot+ ' rusak');
    }
}