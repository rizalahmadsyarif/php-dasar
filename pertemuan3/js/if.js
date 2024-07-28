let jmlAngkot = 10;
let angkotBeroprasi = 7;
let noAngkot = 1;

for(let noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++){
    if( noAngkot <= angkotBeroprasi){
        console.log('Angkot No. ' +noAngkot+ ' beroprasi baik');
    } else {
        console.log('Angkot No. ' +noAngkot+ ' rusak');
    }
}