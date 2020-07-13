$(function(){
  $('.tambah-data').on('click', function() {
  $('#modal-title').html('Tambah Data ');
  $('.modal-footer button[type=submit]').html('Tambah Data');
  $('.modal-body form').attr('action','http://localhost/aplikasi/kecamatan');
  $('#id_kecamatan').val('');
  $('#kecamatan').val('');
});
            // ubah data
            $('.update-data').on('click', function() {
            $('#modal-title').html('Update Data');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action','http://localhost/aplikasi/kecamatan/update');
            const id = $(this).data('id');
            $.ajax({
              url: 'http://localhost/aplikasi/kecamatan/dataKec',
              data: {id : id},
              method: 'post',
              dataType: 'json',
              success: function(data){
                console.log(data);
                  $('#id_kecamatan').val(data.id_kecamatan);
                  $('#kecamatan').val(data.kecamatan);
              }
            });

          });
});
