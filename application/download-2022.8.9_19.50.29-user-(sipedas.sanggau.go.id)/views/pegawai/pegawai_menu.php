<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php 
                        $segmen2 = $this->uri->segment(2);
						$session = $this->session->userdata('login');
                        ?>

						<?php if($session['group_id'] != '4') { ?>
                        <a href="<?= site_url('pegawai/PegawaiIdentitas/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiIdentitas")echo 'warning';else echo 'primary';?>">A. IDENTITAS PEGAWAI</a>
                        <a href="<?= site_url('pegawai/PegawaiCpns/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiCpns")echo 'warning';else echo 'primary'; ?> btn-sm <?php if($pegawai->pegawai_status_kepegawaian_id >2){ echo 'disabled';} ?>" >B. PENGANGKATAN SEBAGAI CPNS</a>
                        <a href="<?= site_url('pegawai/PegawaiPns/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiPns")echo 'warning';else echo 'primary'; ?> btn-sm <?php if($pegawai->pegawai_status_kepegawaian_id >2){ echo 'disabled';} ?>">C. PENGANGKATAN SEBAGAI PNS</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatPangkat/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatPangkat")echo 'warning';else echo 'primary'; ?> btn-sm <?php if($pegawai->pegawai_status_kepegawaian_id >2){ echo 'disabled';} ?>">D. RIWAYAT PANGKAT / GOLONGAN</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatJabatan/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatJabatan")echo 'warning';else echo 'primary'; ?> btn-sm">E. RIWAYAT JABATAN</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatKgb/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatKgb")echo 'warning';else echo 'primary'; ?> btn-sm <?php if($pegawai->pegawai_status_kepegawaian_id >2){ echo 'disabled';} ?>">F. RIWAYAT KENAIKAN GAJI BERKALA TERAKHIR</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatPendidikan/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatPendidikan")echo 'warning';else echo 'primary'; ?> btn-sm">G. RIWAYAT PENDIDIKAN</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatDiklatStruktural/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatDiklatStruktural")echo 'warning';else echo 'primary'; ?> btn-sm <?php if($pegawai->pegawai_status_kepegawaian_id >2){ echo 'disabled';} ?>">H. RIWAYAT DIKLAT STRUKTURAL</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatDiklatFungsional/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatDiklatFungsional")echo 'warning';else echo 'primary'; ?> btn-sm <?php if($pegawai->pegawai_status_kepegawaian_id >2){ echo 'disabled';} ?>">I. RIWAYAT DIKLAT FUNGSIONAL</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatDiklatTeknis/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatDiklatTeknis")echo 'warning';else echo 'primary'; ?> btn-sm">J. RIWAYAT DIKLAT TEKNIS</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatPenataran/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatPenataran")echo 'warning';else echo 'primary'; ?> btn-sm">K. RIWAYAT DIKLAT PRAJABATAN / LATSAR</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatSeminar/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatSeminar")echo 'warning';else echo 'primary'; ?> btn-sm">L. RIWAYAT SEMINAR / LOKAKARYA / SIMPOSIUM</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatKursus/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatKursus")echo 'warning';else echo 'primary'; ?> btn-sm">M. RIWAYAT KURSUS</a><br />
                        <a href="<?= site_url('pegawai/PegawaiTandaJasa/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiTandaJasa")echo 'warning';else echo 'primary'; ?> btn-sm">N. TANDA JASA / PENGHARGAAN / SATYA LENCANA</a><br />
                        <a href="<?= site_url('pegawai/PegawaiKunjungan/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiKunjungan")echo 'warning';else echo 'primary'; ?> btn-sm">O. RIWAYAT KUNJUNGAN</a><br />
                        <a href="<?= site_url('pegawai/PegawaiOrganisasi/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiOrganisasi")echo 'warning';else echo 'primary'; ?> btn-sm">P. RIWAYAT KEANGGOTAAN ORGANISASI</a><br />
                        <a href="<?= site_url('pegawai/PegawaiPengalamanKerja/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiPengalamanKerja")echo 'warning';else echo 'primary'; ?> btn-sm">Q. PENGALAMAN KERJA</a><br />
                        <a href="<?= site_url('pegawai/PegawaiBahasa/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiBahasa")echo 'warning';else echo 'primary'; ?> btn-sm">R. PENGUASAAN BAHASA</a><br />
                        <a href="<?= site_url('pegawai/PegawaiTugasBelajar/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiTugasBelajar")echo 'warning';else echo 'primary'; ?> btn-sm">S. IZIN / TUGAS BELAJAR </a><br />
                        <a href="<?= site_url('pegawai/PegawaiDisiplin/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiDisiplin")echo 'warning';else echo 'primary'; ?> btn-sm">T. RIWAYAT SANKSI ADMINISTRATIF</a><br />
                        <a href="<?= site_url('pegawai/PegawaiKaryaTulis/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiKaryaTulis")echo 'warning';else echo 'primary'; ?> btn-sm">U. KARYA TULIS</a><br />
                        <a href="<?= site_url('pegawai/PegawaiKeluarga/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiKeluarga")echo 'warning';else echo 'primary'; ?> btn-sm">V. DATA KELUARGA</a><br />
                        <a href="<?= site_url('pegawai/PegawaiPensiun/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiPensiun")echo 'warning';else echo 'primary'; ?> btn-sm">W. PENSIUN</a><br />
						<a href="<?= site_url('pegawai/PegawaiCuti/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if ($segmen2 == "PegawaiCuti") echo 'warning';
                                                                                                    else echo 'primary'; ?> btn-sm">X. CUTI PEGAWAI</a><br />
						<?php } else { ?>
						<a href="<?= site_url('pegawai/PegawaiIdentitas/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiIdentitas")echo 'warning';else echo 'primary';?>">A. IDENTITAS PEGAWAI</a>
                        <a href="<?= site_url('pegawai/PegawaiKeluarga/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiKeluarga")echo 'warning';else echo 'primary'; ?> btn-sm">B. DATA KELUARGA</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatDiklatStruktural/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatDiklatStruktural")echo 'warning';else echo 'primary'; ?> btn-sm <?php if($pegawai->pegawai_status_kepegawaian_id >2){ echo 'disabled';} ?>">C. RIWAYAT DIKLAT STRUKTURAL</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatDiklatFungsional/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatDiklatFungsional")echo 'warning';else echo 'primary'; ?> btn-sm <?php if($pegawai->pegawai_status_kepegawaian_id >2){ echo 'disabled';} ?>">D. RIWAYAT DIKLAT FUNGSIONAL</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatDiklatTeknis/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatDiklatTeknis")echo 'warning';else echo 'primary'; ?> btn-sm">E. RIWAYAT DIKLAT TEKNIS</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatPenataran/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatPenataran")echo 'warning';else echo 'primary'; ?> btn-sm">F. RIWAYAT PENATARAN</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatSeminar/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatSeminar")echo 'warning';else echo 'primary'; ?> btn-sm">G. RIWAYAT SEMINAR / LOKAKARYA / SIMPOSIUM</a><br />
                        <a href="<?= site_url('pegawai/PegawaiRiwayatKursus/view/' . $pegawai->pegawai_nip) ?>" class="btn btn-<?php if($segmen2 == "PegawaiRiwayatKursus")echo 'warning';else echo 'primary'; ?> btn-sm">H. RIWAYAT KURSUS</a><br />
                        
						<?php } ?>