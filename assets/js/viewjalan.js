$(function(){
  $('.view').on('click', function() {
  $('#modal-title').html('Update Data');
  const id = $(this).data('id');
  $.ajax({
    url: 'http://localhost/aplikasi/jalan/dataJalan',
    data: {id : id},
    method: 'post',
    dataType: 'json',
    success: function(data){
        $('#id_jalan').html(data.id_jalan);
        $('#nama_jalan').html(data.nama_jalan);
        $('#nama_desa').html(data.nama_desa);
        $('#panjang').html(data.panjang+'m');
        $('#pekerasan').html(data.pekerasan);
        $('#lebar').html(data.lebar+'m');
        $('#latitude').html(data.latitude);
        $('#longitude').html(data.longitude);
        $('.image1 img').attr('src','http://localhost/aplikasi/assets/img/jalan/'+data.image1);
        $('.image2 img').attr('src','http://localhost/aplikasi/assets/img/jalan/'+data.image2);
    }
  });
});
});
