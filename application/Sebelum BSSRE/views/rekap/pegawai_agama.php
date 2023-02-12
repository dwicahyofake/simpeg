<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="content-wrapper">

    <section class="content-header">
        <?php echo $this->session->flashdata('message'); ?>
        <h1>
            Rekap Jumlah Pegawai
        </h1>
    </section>

    <section class="content">
        <div class="row" id="filter">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-search fa-fw"></i> Filter
                    </div>
                    <div class="panel-body">
                        <form role="form" id="filter-form" action="<?= site_url('rekap/PegawaiAgama/view') ?>" method="post">
                            <div class="form-group">
                                <div class="input-group-addon">
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">Jenis Rekap</div>
                                            </span>
                                            <select class="form-control " name="jenis_rekap" id="jenis_rekap" required="true">
                                                <option <?= selected('1', $jenis, TRUE) ?> value="1">Perbandingan</option>
                                                <option <?= selected('2', $jenis, TRUE) ?> value="2">Perkembangan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">Periode &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</div>
                                            </span>
                                            <select class="form-control " name="periode" id="periode" required="true">
                                                <option <?= selected('bulan', $periode, TRUE) ?> value="bulan">Per Bulan</option>
                                                <option <?= selected('tahun', $periode, TRUE) ?> value="tahun">Per Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="input-group-addon">
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">Tahun &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                            </span>
                                            <select class="form-control " name="tahun" id="tahun" required="true">

                                                <?php
                                                $tahuns = array();

                                                foreach ($list_tahun->result() as $value) {
                                                    array_push($tahuns, $value->tahun);
                                                ?>
                                                    <option value="<?= $value->tahun ?>" <?= selected($value->tahun, $tahun, TRUE) ?>><?= $value->tahun ?></option>
                                                <?php }
                                                if (!in_array(date('Y'), $tahuns)) {
                                                    echo '<option value="' . date('Y') . '" selected="selected" >' . date('Y') . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1" id="tahun-div2" style="display: none;">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">-</div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" id="tahun-div3" style="display: none;">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">Tahun &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                            </span>
                                            <select class="form-control " name="tahun2" id="tahun2" required="true">

                                                <?php
                                                $tahuns = array();

                                                foreach ($list_tahun->result() as $value) {
                                                    array_push($tahuns, $value->tahun);
                                                ?>
                                                    <option value="<?= $value->tahun ?>" <?= selected($value->tahun, $tahun, TRUE) ?>><?= $value->tahun ?></option>
                                                <?php }
                                                if (!in_array(date('Y'), $tahuns)) {
                                                    echo '<option value="' . date('Y') . '" selected="selected" >' . date('Y') . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="bulan-div1">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">Bulan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                            </span>
                                            <select class="form-control " name="bulan" id="bulan" required="true">

                                                <?php
                                                $no = 1;
                                                foreach (bulan_indo() as $value) {
                                                ?>
                                                    <option value="<?= $no ?>" <?= selected($bulan, $no, TRUE) ?>><?= ($value) ?></option>
                                                <?php $no++;
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1" id="bulan-div2" style="display: none;">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">-</div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="bulan-div3" style="display: none;">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">Bulan</div>
                                            </span>
                                            <select class="form-control " name="bulan2" id="bulan2" required="true">

                                                <?php
                                                $no = 1;
                                                foreach (bulan_indo() as $value) {
                                                ?>
                                                    <option value="<?= $no ?>" <?= selected($bulan, $no, TRUE) ?>><?= ($value) ?></option>
                                                <?php $no++;
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="input-group-addon">
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">Unit &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                            </span>
                                            <select class="form-control " name="unit" id="unit">
                                                <option value="">Semua</option>
                                                <?php foreach ($list_unit->result_array() as $key) : ?>
                                                    <option value="<?= $key['unit_nama'] ?>" <?= selected($key['unit_nama'], $unit, TRUE) ?>><?= $key['unit_nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" id="agama-div" style="display: none;">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <div class="btn btn-default">Agama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                            </span>
                                            <select class="form-control " name="agama" id="agama" required="true">
                                                <?php foreach ($list_agama->result_array() as $key) : ?>
                                                    <option value="<?= $key['agama_nama'] ?>" <?= selected($key['agama_nama'], $agama, TRUE) ?>><?= $key['agama_nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="text-align: right;">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i> Tampilkan</button>
                                        <!-- <?php
                                                if ($tahun == date('Y') && $bulan == date('m')) {
                                                ?>
                                            <a href="<?= site_url('rekap/PegawaiAgama/update') ?>" type="button" class="btn btn-warning"><i class="fa fa-save fa-fw"></i> Update Rekap Terbaru</a>
                                        <?php
                                                }
                                        ?> -->
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>

        <!-- <div class="row" id="filter">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart fa-fw"></i> Grafik
                    </div>
                    <div class="panel-body">
                        <button type="button" class="btn btn-success" onclick="tampil('agama')">AGAMA</button>
                        <button type="button" class="btn btn-success" onclick="tampil('golru')">GOLONGAN</button>
                        <button type="button" class="btn btn-success" onclick="tampil('kelamin')">KELAMIN</button>
                        <button type="button" class="btn btn-success" onclick="tampil('eselon')">ESELON</button>
                        <button type="button" class="btn btn-success" onclick="tampil('pendidikan')">PENDIDIKAN</button>
                        <button type="button" class="btn btn-success" onclick="tampil('agama')">JNS agama</button>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="row" id="agama">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div style="float: right;padding-top: 3px;padding-right: 13px">
                        <button type="button" id="excel-btn" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Excel</button>
                        <!-- <a href="<?= site_url('rekap/PegawaiAgama/excel/agama/' . $tahun . '/' . $bulan) ?>" target="_blank" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Excel</a> -->
                    </div>
                    <div class="panel-heading">
                        <i class="fa fa-users fa-fw"></i> Jumlah PNS Menurut Agama <?= $unit != null ? $unit : ''; ?>
                    </div>
                    <div class="panel-body">
                        <div id="chart_agama" width="100" height="100"></div>
                        <div class="table-responsive">
                            <!-- jika jenis rekap perbandingan -->
                            <?php if ($jenis == '1') : ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Agama</th>
                                            <th>Laki-laki</th>
                                            <th>Perempuan</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (!empty($rekap_agama)) {
                                    	$laki = 0;
                                    	$perempuan = 0;
                                    	$jumlah = 0;
                                            foreach ($rekap_agama->result() as $value) {
                                    	$laki += $value->laki;
                                    	$perempuan += $value->perempuan;
                                    	$jumlah += $value->jumlah;
                                        ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $value->agama ?></td>
                                                    <td><?= $value->laki ?></td>
                                                    <td><?= $value->perempuan ?></td>
                                                    <td><?= $value->jumlah ?></td>

                                                </tr>
                                        <?php
                                                $no++;
                                            }?>
                                            <tr>
                                                <td colspan="2">Jumlah</td>
                                                <td><?= $laki ?></td>
                                                <td><?= $perempuan ?></td>
                                                <td><?= $jumlah ?></td>                                       

                                            </tr>
                                
                                <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>

                            <!-- jika jenis rekap perkembangan -->
                            <?php if ($jenis == '2') : ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><?= $periode == 'bulan' ? 'Bulan' : 'Tahun'; ?></th>
                                            <th>Laki-laki</th>
                                            <th>Perempuan</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (!empty($rekap_agama)) {
                                            foreach ($rekap_agama->result() as $value) {
                                        ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $value->name ?></td>
                                                    <td><?= $value->laki ?></td>
                                                    <td><?= $value->perempuan ?></td>
                                                    <td><?= $value->jumlah ?></td>

                                                </tr>
                                        <?php
                                                $no++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </section>
</div>

<!-- tabel to excel -->
<!-- jika jenis rekap perbandingan -->
<?php if ($jenis == '1') : ?>
    <table style="display: none;" id="example" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th colspan="6" rowspan="2"><b>
                        <center>Rekap PNS Berdasarkan Agama</center</b> </th> </tr> <tr>
            </tr>
            <tr>
                <th><b>No</b></th>
                <th><b>Unit</b></th>
                <th><b>Agama</b></th>
                <th><b>Laki-laki</b></th>
                <th><b>Perempuan</b></th>
                <th><b>Jumlah</b></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $jumlah = 0;
            if (!empty($rekap_agama)) {
                foreach ($rekap_agama->result() as $value) {
            ?>
                    <?php
                    foreach ($rekap_agama_unit->result() as $value2) {
                        if ($value->agama == $value2->agama) {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value2->unit ?></td>
                                <td><?= $value2->agama ?></td>
                                <td><?= $value2->laki ?></td>
                                <td><?= $value2->perempuan ?></td>
                                <td><?= $value2->jumlah ?></td>

                            </tr>
                    <?php }
                    } ?>
                    <tr>
                        <td colspan="5">
                            <center><b>Jumlah <?= $value->agama ?></b></center>
                        </td>
                        <td><b><?= $value->jumlah ?></b></td>
                    </tr>
                <?php
                    // $no++;
                    $jumlah = ($jumlah + $value->jumlah);
                } ?>

                <tr>
                    <td colspan="5">
                        <center><b>Jumlah Keseluruhan</b></center>
                    </td>
                    <td><b><?= $jumlah ?></b></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php endif; ?>

<!-- jika jenis rekap perkembangan -->
<?php if ($jenis == '2') : ?>
    <table style="display: none;" id="example" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th colspan="6" rowspan="2"><b>
                        <center>Rekap PNS Berdasarkan Agama</center</b> </th> </tr> <tr>
            </tr>
            <tr>
                <th><b>No</b></th>
                <th><b><?= $periode == 'bulan' ? 'Bulan' : 'Tahun'; ?></b></th>
                <th><b>Laki-laki</b></th>
                <th><b>Perempuan</b></th>
                <th><b>Jumlah</b></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $jumlah = 0;
            if (!empty($rekap_agama)) {
                foreach ($rekap_agama->result() as $value) {
            ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value->name ?></td>
                        <td><?= $value->laki ?></td>
                        <td><?= $value->perempuan ?></td>
                        <td><?= $value->jumlah ?></td>

                    </tr>
                <?php
                    $no++;
                    $jumlah = ($jumlah + $value->jumlah);
                } ?>

                <tr>
                    <td colspan="4">
                        <center><b>Jumlah Keseluruhan</b></center>
                    </td>
                    <td><b><?= $jumlah ?></b></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php endif; ?>

<!-- <script src="<?= base_url() ?>assets/plugins/TableToExcel/jquery.tableToExcel.js"></script> -->
<script src="<?= base_url() ?>assets/dist/js/jquery.table2excel.js"></script>
<script src="<?= base_url() ?>assets/plugins/highcharts/highcharts.js"></script>
<script src="<?= base_url() ?>assets/plugins/highcharts/highcharts-3d.js"></script>
<script src="<?= base_url() ?>assets/plugins/highcharts/modules/data.js"></script>
<script src="<?= base_url() ?>assets/plugins/highcharts/modules/drilldown.js"></script>
<script src="<?= base_url() ?>assets/plugins/highcharts/modules/exporting.js"></script>
<script src="<?= base_url() ?>assets/plugins/highcharts/modules/export-data.js"></script>
<script src="<?= base_url() ?>assets/plugins/highcharts/modules/accessibility.js"></script>
<script>
    function tampil(id) {
        $('#agama').addClass('hide');
        $('#golru').addClass('hide');
        $('#golrup').addClass('hide');
        $('#kelamin').addClass('hide');
        $('#eselon').addClass('hide');
        $('#pendidikan').addClass('hide');
        $('#agama').addClass('hide');

        $('#' + id).removeClass('hide');

    }
    // alert('<?= $bulan ?>')
    $('#periode').on('change', function() {
        periode = $('#periode').val();
        jenis = $('#jenis_rekap').val();
        if (periode == 'tahun') {
            $('#bulan-div1').hide()
            $('#bulan-div2').hide()
            $('#bulan-div3').hide()
            $('#tahun-div2').hide()
            $('#tahun-div3').hide()
        }
        if (periode == 'bulan') {
            $('#bulan-div1').show()
            // $('#bulan-div2').show()
            // $('#bulan-div3').show()
        }
        if (jenis == '1' && periode == 'tahun') { //perbandingan
            $('#bulan-div1').hide()
            $('#bulan-div2').hide()
            $('#bulan-div3').hide()
            $('#tahun-div2').hide()
            $('#tahun-div3').hide()
            $('#agama-div').hide()
        }
        if (jenis == '2' && periode == 'tahun') { //perkembangan
            $('#bulan-div1').hide()
            $('#bulan-div2').hide()
            $('#bulan-div3').hide()
            $('#tahun-div2').show()
            $('#tahun-div3').show()
            $('#agama-div').show()
        }
        if (jenis == '2' && periode == 'bulan') { //perkembangan
            $('#bulan-div1').show()
            $('#bulan-div2').show()
            $('#bulan-div3').show()
            $('#tahun-div2').hide()
            $('#tahun-div3').hide()
            $('#agama-div').show()
        }
    })
    periode = $('#periode').val();
    jenis = $('#jenis_rekap').val();
    if (periode == 'tahun') {
        $('#bulan-div1').hide()
        $('#bulan-div2').hide()
        $('#bulan-div3').hide()
        $('#tahun-div2').hide()
        $('#tahun-div3').hide()
    }
    if (periode == 'bulan') {
        $('#bulan-div1').show()
        // $('#bulan-div2').show()
        // $('#bulan-div3').show()
    }
    if (jenis == '1' && periode == 'tahun') { //perbandingan
        $('#bulan-div1').hide()
        $('#bulan-div2').hide()
        $('#bulan-div3').hide()
        $('#tahun-div2').hide()
        $('#tahun-div3').hide()
        $('#agama-div').hide()
    }
    if (jenis == '2' && periode == 'tahun') { //perkembangan
        $('#bulan-div1').hide()
        $('#bulan-div2').hide()
        $('#bulan-div3').hide()
        $('#tahun-div2').show()
        $('#tahun-div3').show()
        $('#agama-div').show()
    }
    if (jenis == '2' && periode == 'bulan') { //perkembangan
        $('#bulan-div1').show()
        $('#bulan-div2').show()
        $('#bulan-div3').show()
        $('#tahun-div2').hide()
        $('#tahun-div3').hide()
        $('#agama-div').show()
    }

    $('#jenis_rekap').on('change', function() {
        periode = $('#periode').val();
        jenis = $('#jenis_rekap').val();
        if (jenis == '1') {
            $('#bulan-div2').hide()
            $('#bulan-div3').hide()
            $('#tahun-div2').hide()
            $('#tahun-div3').hide()
            $('#agama-div').hide()
        }
        if (jenis == '2') {
            $('#bulan-div1').show()
            $('#bulan-div2').show()
            $('#bulan-div3').show()
            $('#tahun-div2').hide()
            $('#tahun-div3').hide()
            $('#agama-div').show()
            // $('#bulan-div2').show()
            // $('#bulan-div3').show()
        }
        if (jenis == '1' && periode == 'tahun') { //perbandingan
            $('#bulan-div1').hide()
            $('#bulan-div2').hide()
            $('#bulan-div3').hide()
            $('#tahun-div2').hide()
            $('#tahun-div3').hide()
            $('#agama-div').hide()
        }
        if (jenis == '2' && periode == 'tahun') { //perkembangan
            $('#bulan-div1').hide()
            $('#bulan-div2').hide()
            $('#bulan-div3').hide()
            $('#tahun-div2').show()
            $('#tahun-div3').show()
            $('#agama-div').show()
        }
        if (jenis == '2' && periode == 'bulan') { //perkembangan
            $('#bulan-div1').show()
            $('#bulan-div2').show()
            $('#bulan-div3').show()
            $('#tahun-div2').hide()
            $('#tahun-div3').hide()
            $('#agama-div').show()
        }
    })

    periode = $('#periode').val();
    jenis = $('#jenis_rekap').val();
    if (jenis == '1') {
        $('#bulan-div2').hide()
        $('#bulan-div3').hide()
        $('#tahun-div2').hide()
        $('#tahun-div3').hide()
        $('#agama-div').hide()
    }
    if (jenis == '2') {
        $('#bulan-div1').show()
        $('#bulan-div2').show()
        $('#bulan-div3').show()
        $('#tahun-div2').hide()
        $('#tahun-div3').hide()
        $('#agama-div').show()
        // $('#bulan-div2').show()
        // $('#bulan-div3').show()
    }
    if (jenis == '1' && periode == 'tahun') { //perbandingan
        $('#bulan-div1').hide()
        $('#bulan-div2').hide()
        $('#bulan-div3').hide()
        $('#tahun-div2').hide()
        $('#tahun-div3').hide()
        $('#agama-div').hide()
    }
    if (jenis == '2' && periode == 'tahun') { //perkembangan
        $('#bulan-div1').hide()
        $('#bulan-div2').hide()
        $('#bulan-div3').hide()
        $('#tahun-div2').show()
        $('#tahun-div3').show()
        $('#agama-div').show()
    }
    if (jenis == '2' && periode == 'bulan') { //perkembangan
        $('#bulan-div1').show()
        $('#bulan-div2').show()
        $('#bulan-div3').show()
        $('#tahun-div2').hide()
        $('#tahun-div3').hide()
        $('#agama-div').show()
    }


    var form = $('#form-filter');
    $('#excel-btn').click(function() {
        // $('#example').tblToExcel();
        $("#example").table2excel({
            exclude: ".excludeThisClass",
            name: "Rekap_PNS_Berdasarkan_Agama",
            filename: "Rekap_PNS_Berdasarkan_Agama.xls", // do include extension
            preserveColors: false // set to true if you want background colors and font colors preserved
        });
        // $.ajax({
        //     type: "POST",
        //     url: '<?= site_url('rekap/PegawaiAgama/excel/') ?>',
        //     data: form.serialize(),
        //     success: function() {
        //         // console.log(response);
        //         // $('#show-pdf-content').html(response);
        //     }
        // });
    });
</script>

<?php if ($jenis == '1') : ?>
    <script>
        // Highcharts.setOptions({
        //     lang: {
        //         drillUpText: '<'
        //     }
        // });

        // Highcharts.chart('chart_agama', {
        //     chart: {
        //         type: 'bar',
        //         // inverted: true,
        //         height: 600,
        //         options3d: {
        //             enabled: true,
        //             alpha: 15,
        //             beta: 15,
        //             depth: 50,
        //             viewDistance: 25
        //         }
        //     },
        //     title: {
        //         text: 'Jumlah PNS Menurut Agama (Perbandingan)  <?= $unit != null ? $unit : ''; ?>'
        //     },
        //     subtitle: {
        //         text: 'sipedas.sanggau.go.id</a>'
        //     },
        //     accessibility: {
        //         announceNewData: {
        //             enabled: true
        //         }
        //     },
        //     xAxis: {
        //         type: 'category'
        //     },
        //     yAxis: {
        //         title: {
        //             text: 'Total PNS'
        //         }

        //     },
        //     legend: {
        //         enabled: true
        //     },
        //     plotOptions: {
        //         series: {
        //             borderWidth: 0,
        //             dataLabels: {
        //                 enabled: false,
        //                 // format: '{point.y:.1f}'
        //             }
        //         }
        //     },

        //     tooltip: {
        //         headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        //         pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> <br/>'
        //     },

        //     series: [{
        //         type: 'pie',
        //         name: "Laki-laki & Perempuan",
        //         data: [
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     name: "<?= $key['agama'] ?>",
        //                     y: <?= $key['jumlah'] ?>,
        //                     drilldown: "<?= 'jumlah' . $key['agama'] ?>"
        //                 },
        //             <?php endforeach; ?>
        //         ]
        //     }, {
        //         type: 'pie',
        //         name: "Laki-laki",
        //         data: [
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     y: <?= $key['laki'] ?>,
        //                     drilldown: "<?= 'laki' . $key['agama'] ?>"
        //                 },
        //             <?php endforeach; ?>
        //         ]
        //     }, {
        //         type: 'pie',
        //         name: "Perempuan",
        //         data: [
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     y: <?= $key['perempuan'] ?>,
        //                     drilldown: "<?= 'perempuan' . $key['agama'] ?>"
        //                 },
        //             <?php endforeach; ?>
        //         ]
        //     }, ],
        //     drilldown: {
        //         allowPointDrilldown: true,
        //         series: [
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     name: "<?= $key['agama'] ?>",
        //                     type: 'bar',
        //                     // inverted: true,
        //                     id: "<?= 'jumlah' . $key['agama'] ?>",
        //                     data: [
        //                         <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
        //                             <?php if ($key['agama'] == $key2['agama']) : ?> {
        //                                     name: "<?= $key2['unit'] ?>",
        //                                     y: <?= $key2['jumlah'] ?>,
        //                                 },
        //                             <?php endif; ?>
        //                         <?php endforeach; ?>
        //                     ]
        //                 },
        //             <?php endforeach; ?>
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     name: "<?= $key['agama'] ?>",
        //                     id: "<?= 'laki' . $key['agama'] ?>",
        //                     data: [
        //                         <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
        //                             <?php if ($key['agama'] == $key2['agama']) : ?> {
        //                                     name: "<?= $key2['unit'] ?>",
        //                                     y: <?= $key2['laki'] ?>,
        //                                 },
        //                             <?php endif; ?>
        //                         <?php endforeach; ?>
        //                     ]
        //                 },
        //             <?php endforeach; ?>
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     name: "<?= $key['agama'] ?>",
        //                     id: "<?= 'perempuan' . $key['agama'] ?>",
        //                     data: [
        //                         <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
        //                             <?php if ($key['agama'] == $key2['agama']) : ?> {
        //                                     name: "<?= $key2['unit'] ?>",
        //                                     y: <?= $key2['perempuan'] ?>,
        //                                 },
        //                             <?php endif; ?>
        //                         <?php endforeach; ?>
        //                     ]
        //                 },
        //             <?php endforeach; ?>
        //         ]
        //     }
        // });

        $(function() {
            // prevent default drilldown
            var seriesName = '';
            var drilldownBackText = '<< Back',
                noop = function() {};
            Highcharts.Chart.prototype.drillUp = function() {
                var chart = this;
                setTimeout(function() {
                    $(chart.renderTo).highcharts($.extend(true, {}, colChart));
                }, 0);
            };
            Highcharts.Chart.prototype.getDrilldownBackText = function() {
                return drilldownBackText;
            };

            // set chart options
            <?php foreach ($rekap_agama->result_array() as $key) : ?>
                var barChart<?= $key['agama'] ?> = {
                    series: [

                        {
                            type: 'bar',
                            name: 'Laki-laki',
                            data: [
                                <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
                                    <?php if ($key['agama'] == $key2['agama']) : ?>
                                        <?= $key2['laki'] ?>,
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            ]
                        },
                        {
                            type: 'bar',
                            name: 'Perempuan',
                            data: [
                                <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
                                    <?php if ($key['agama'] == $key2['agama']) : ?>
                                        <?= $key2['perempuan'] ?>,
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            ]
                        },
                    ],
                    xAxis: {
                        categories: [
                            <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
                                <?php if ($key['agama'] == $key2['agama']) : ?> '<?= $key2['unit'] ?>',
                                <?php endif; ?>
                            <?php endforeach; ?>
                        ]
                    },
                    chart: {
                        events: {
                            load: function() {
                                this.showDrillUpButton();
                            }
                        },
                        type: 'bar',
                        // inverted: true,
                        height: 2000,
                        // options3d: {
                        //     enabled: true,
                        //     alpha: 15,
                        //     beta: 15,
                        //     depth: 50,
                        //     viewDistance: 25
                        // }
                    },
                    title: {
                        text: 'Jumlah PNS Menurut Agama (Perbandingan) ' + seriesName + '  <?= $unit != null ? $unit : ''; ?>'
                    },
                    subtitle: {
                        text: 'sipedas.sanggau.go.id</a>'
                    },
                }
            <?php endforeach; ?>

            colChart = {
                chart: {
                    events: {
                        drilldown: function(e) {
                            var chart = this;
                            // console.log(e.seriesOptions)
                            drilldownBackText = e.category || (e.point && e.point.name) || 'Back';
                            drilldownBackText = '<< ' + drilldownBackText;
                            setTimeout(function() {
                                <?php foreach ($rekap_agama->result_array() as $key) : ?>
                                    seriesName = e.point.name;
                                    if (e.point.name == '<?= $key['agama'] ?>') {
                                        $(chart.renderTo).highcharts($.extend(true, {}, barChart<?= $key['agama'] ?>));
                                    }
                                <?php endforeach; ?>
                            }, 0);
                        }
                    },
                    type: 'column',
                    // inverted: true,
                    height: 600,
                    options3d: {
                        enabled: true,
                        alpha: 15,
                        beta: 15,
                        depth: 50,
                        viewDistance: 25
                    }
                },
                title: {
                    text: 'Jumlah PNS Menurut Agama (Perbandingan)  <?= $unit != null ? $unit : ''; ?>'
                },
                subtitle: {
                    text: 'sipedas.sanggau.go.id</a>'
                },
                xAxis: {
                    type: 'category',
                },
                yAxis: {
                    title: {
                        text: 'Total Pegawai'
                    }

                },
                legend: {
                    enabled: true
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: false,
                            // format: '{point.y:.1f}'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> <br/>'
                },
                series: [{
                    name: 'Laki-laki & Perempuan',
                    type: 'column',
                    data: [

                        <?php foreach ($rekap_agama->result_array() as $key) : ?> {
                                name: "<?= $key['agama'] ?>",
                                y: <?= $key['jumlah'] ?>,
                                drilldown: true
                            },
                        <?php endforeach; ?>
                    ]
                }]
            };

            // create the chart
            $('#chart_agama').highcharts($.extend(true, {}, colChart));
        });
    </script>
<?php endif ?>


<?php if ($jenis == '2') : ?>
    <script>
        // Highcharts.setOptions({
        //     lang: {
        //         drillUpText: '<'
        //     }
        // });

        // Highcharts.chart('chart_agama', {
        //     chart: {
        //         type: 'column',
        //         height: 600,
        //         // inverted: true,
        //     },
        //     title: {
        //         text: 'Jumlah PNS Menurut Agama (Perkembangan) <?= $unit != null ? $unit : ''; ?>'
        //     },
        //     subtitle: {
        //         text: 'sipedas.sanggau.go.id</a>'
        //     },
        //     accessibility: {
        //         announceNewData: {
        //             enabled: true
        //         }
        //     },
        //     xAxis: {
        //         type: 'category'
        //     },
        //     yAxis: {
        //         title: {
        //             text: 'Total PNS'
        //         }

        //     },
        //     legend: {
        //         enabled: true
        //     },
        //     plotOptions: {
        //         series: {
        //             borderWidth: 0,
        //             dataLabels: {
        //                 enabled: false,
        //                 // format: '{point.y:.1f}'
        //             }
        //         }
        //     },

        //     tooltip: {
        //         headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        //         pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> <br/>'
        //     },

        //     series: [{
        //         name: "Laki-laki & Perempuan",
        //         data: [
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     name: "<?= $key['name'] ?>",
        //                     y: <?= $key['jumlah'] ?>,
        //                     drilldown: "<?= 'jumlah' . $key['name'] ?>"
        //                 },
        //             <?php endforeach; ?>
        //         ]
        //     }, {
        //         name: "Laki-laki",
        //         data: [
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     y: <?= $key['laki'] ?>,
        //                     drilldown: "<?= 'laki' . $key['name'] ?>"
        //                 },
        //             <?php endforeach; ?>
        //         ]
        //     }, {
        //         name: "Perempuan",
        //         data: [
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     y: <?= $key['perempuan'] ?>,
        //                     drilldown: "<?= 'perempuan' . $key['name'] ?>"
        //                 },
        //             <?php endforeach; ?>
        //         ]
        //     }, ],
        //     drilldown: {
        //         allowPointDrilldown: true,
        //         series: [
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     name: "<?= $key['name'] ?>",
        //                     type: 'bar',
        //                     // inverted: true,
        //                     id: "<?= 'jumlah' . $key['name'] ?>",
        //                     data: [
        //                         <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
        //                             <?php if ($key['name'] == $key2['name']) : ?> {
        //                                     name: "<?= $key2['unit'] ?>",
        //                                     y: <?= $key2['jumlah'] ?>,
        //                                 },
        //                             <?php endif; ?>
        //                         <?php endforeach; ?>
        //                     ]
        //                 },
        //             <?php endforeach; ?>
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     name: "<?= $key['name'] ?>",
        //                     id: "<?= 'laki' . $key['name'] ?>",
        //                     data: [
        //                         <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
        //                             <?php if ($key['name'] == $key2['name']) : ?> {
        //                                     name: "<?= $key2['unit'] ?>",
        //                                     y: <?= $key2['laki'] ?>,
        //                                 },
        //                             <?php endif; ?>
        //                         <?php endforeach; ?>
        //                     ]
        //                 },
        //             <?php endforeach; ?>
        //             <?php foreach ($rekap_agama->result_array() as $key) : ?> {
        //                     name: "<?= $key['name'] ?>",
        //                     id: "<?= 'perempuan' . $key['name'] ?>",
        //                     data: [
        //                         <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
        //                             <?php if ($key['name'] == $key2['name']) : ?> {
        //                                     name: "<?= $key2['unit'] ?>",
        //                                     y: <?= $key2['perempuan'] ?>,
        //                                 },
        //                             <?php endif; ?>
        //                         <?php endforeach; ?>
        //                     ]
        //                 },
        //             <?php endforeach; ?>
        //         ]
        //     }
        // });

        $(function() {
            // prevent default drilldown
            var seriesName = '';
            var drilldownBackText = '<< Back',
                noop = function() {};
            Highcharts.Chart.prototype.drillUp = function() {
                var chart = this;
                setTimeout(function() {
                    $(chart.renderTo).highcharts($.extend(true, {}, colChart));
                }, 0);
            };
            Highcharts.Chart.prototype.getDrilldownBackText = function() {
                return drilldownBackText;
            };

            // set chart options
            <?php foreach ($rekap_agama->result_array() as $key) : ?>
                var barChart<?= $key['name'] ?> = {
                    series: [

                        {
                            type: 'bar',
                            name: 'Laki-laki',
                            data: [
                                <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
                                    <?php if ($key['name'] == $key2['name']) : ?>
                                        <?= $key2['laki'] ?>,
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            ]
                        },
                        {
                            type: 'bar',
                            name: 'Perempuan',
                            data: [
                                <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
                                    <?php if ($key['name'] == $key2['name']) : ?>
                                        <?= $key2['perempuan'] ?>,
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            ]
                        },
                    ],
                    xAxis: {
                        categories: [
                            <?php foreach ($rekap_agama_unit->result_array() as $key2) : ?>
                                <?php if ($key['name'] == $key2['name']) : ?> '<?= $key2['unit'] ?>',
                                <?php endif; ?>
                            <?php endforeach; ?>
                        ]
                    },
                    chart: {
                        events: {
                            load: function() {
                                this.showDrillUpButton();
                            }
                        },
                        type: 'bar',
                        // inverted: true,
                        height: 2000,
                        // options3d: {
                        //     enabled: true,
                        //     alpha: 15,
                        //     beta: 15,
                        //     depth: 50,
                        //     viewDistance: 25
                        // }
                    },
                    title: {
                        text: 'Jumlah PNS Menurut Agama (Perbandingan) ' + seriesName + '  <?= $unit != null ? $unit : ''; ?>'
                    },
                    subtitle: {
                        text: 'sipedas.sanggau.go.id</a>'
                    },
                }
            <?php endforeach; ?>

            colChart = {
                chart: {
                    events: {
                        drilldown: function(e) {
                            var chart = this;
                            // console.log(e.seriesOptions)
                            drilldownBackText = e.category || (e.point && e.point.name) || 'Back';
                            drilldownBackText = '<< ' + drilldownBackText;
                            setTimeout(function() {
                                <?php foreach ($rekap_agama->result_array() as $key) : ?>
                                    seriesName = e.point.name;
                                    if (e.point.name == '<?= $key['name'] ?>') {
                                        $(chart.renderTo).highcharts($.extend(true, {}, barChart<?= $key['name'] ?>));
                                    }
                                <?php endforeach; ?>
                            }, 0);
                        }
                    },
                    type: 'column',
                    // inverted: true,
                    height: 600,
                    options3d: {
                        enabled: true,
                        alpha: 15,
                        beta: 15,
                        depth: 50,
                        viewDistance: 25
                    }
                },
                title: {
                    text: 'Jumlah PNS Menurut Agama (Perkembangan)  <?= $unit != null ? $unit : ''; ?>'
                },
                subtitle: {
                    text: 'sipedas.sanggau.go.id</a>'
                },
                xAxis: {
                    type: 'category',
                },
                yAxis: {
                    title: {
                        text: 'Total Pegawai'
                    }

                },
                legend: {
                    enabled: true
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: false,
                            // format: '{point.y:.1f}'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> <br/>'
                },
                series: [{
                    name: 'Laki-laki & Perempuan',
                    type: 'column',
                    data: [

                        <?php foreach ($rekap_agama->result_array() as $key) : ?> {
                                name: "<?= $key['name'] ?>",
                                y: <?= $key['jumlah'] ?>,
                                drilldown: true
                            },
                        <?php endforeach; ?>
                    ]
                }]
            };

            // create the chart
            $('#chart_agama').highcharts($.extend(true, {}, colChart));
        });
    </script>
<?php endif ?>