const element = document.querySelector('#generatePDF')
const btn = document.querySelector('#download')



const opt = {
     filename: 'Report for all faults.pdf',
     image: {
          type: 'jpeg',
          quality: 0.98
     },
     html2canvas: {
          scale: 2
     },
     jsPDF: {
          unit: 'in',
          format: 'letter',
          orientation: 'portrait'
     }
}
const download = () => {
     html2pdf().set(opt).from(element).save()
}


btn.addEventListener('click', download)
// btn.addEventListener('click', () => { console.log('download') })