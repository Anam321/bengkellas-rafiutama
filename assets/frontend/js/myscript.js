const flashdata = $('.flash-data').data('flashdata');


if (flashdata) {
Swal({
    title: 'Data Kamu',
    text: 'Berhasil' + flashdata,
    type: 'success'
 });
    
}