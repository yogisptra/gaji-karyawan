<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="/create" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
        {{ csrf_field() }}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"> &times; </span>
          </button>
          <h3 class="modal-title"></h3>
        </div>
        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="form-group">
            <label for="id_karyawan" class="col-md-3 control-label">ID Karyawan</label>
            <div class="col-md-6">
              <input type="text" id="id_karyawan" name="id" class="form-control" autofocus required >
              <span class="help-block with-errors"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="nama" class="col-md-3 control-label">Nama Karyawan</label>
            <div class="col-md-6">
              <input type="text" id="nama" name="nama" class="form-control" autofocus required>
              <span class="help-block with-errors"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-md-3 control-label">Golongan</label>
            <div class="col-md-6">
              <select class="form-control" name="golongan" id="golongan">
                <option value="" >- Pilih Golongan -</option>
                <option value="1" data-price="3500000" data-tunjangan="1500000">Golongan 1</option>
                <option value="2" data-price="2500000" data-tunjangan="1000000">Golongan 2</option>
                <option value="3" data-price="2000000" data-tunjangan="5000000">Golongan 3</option>
              </select>
              <span class="help-block with-errors"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="gaji_bersih" class="col-md-3 control-label">Gaji Bersih</label>
            <div class="col-md-6">
              <!-- <label for="gaji_bersih" id="lbl_gaji_bersih" class="col-md-3 control-label">-</label> -->
              <input type="text" id="gaji_bersih" name="gaji_bersih" class="form-control" readonly="">
              <span class="help-block with-errors"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="tunjangan" class="col-md-3 control-label">Tunjangan</label>
            <div class="col-md-6">
              <!-- <label for="tunjangan" id="lbl_tunjangan" class="col-md-3 control-label">-</label> -->
              <input type="text" id="tunjangan" name="tunjangan" class="form-control" readonly="">
              <span class="help-block with-errors"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="terima_gaji" class="col-md-3 control-label">Terima Gaji</label>
            <div class="col-md-6">
              <!-- <label for="terima_gaji" id="lbl_terima_gaji" class="col-md-3 control-label">-</label> -->
              <input type="text" id="terima_gaji" name="terima_gaji" class="form-control" readonly="">
              <span class="help-block with-errors"></span>
            </div>
          </div>
        </div>
        <div class="modal-bodyal-footer">
          <button type="submit" class="btn btn-primary btn-save">OK</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('assets/jquery/jquery-1.12.4.min.js') }}"></script>
<script>
  $("#golongan").change(function () {
    gaji_bersih = $(this).children(':selected').data('price');
    tunjangan = $(this).children(':selected').data('tunjangan');
    terima_gaji = gaji_bersih + tunjangan;
    $("#tunjangan").val(number_to_price(tunjangan));
    $("#terima_gaji").val(number_to_price(terima_gaji));
    $("#gaji_bersih").val(number_to_price(gaji_bersih));

    // $("#lbl_gaji_bersih").text(number_to_price(gaji_bersih));
    // $("#lbl_tunjangan").text(number_to_price(tunjangan));
    // $("#lbl_terima_gaji").text(number_to_price(terima_gaji));
  });
  function number_to_price(v){
    if(v==0){return '0';}
    v=parseFloat(v);
    v=v.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    v=v.split('.').join('*').split(',').join('.').split('*').join(',');
    return v;
  }
</script>