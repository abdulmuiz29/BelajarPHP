<?php

function validasiNama($nama) {
  if (empty($nama)) {
    return false;
  }
  if (!preg_match('/^[a-zA-Z ]+$/', $nama)) {
    return false;
  }
  return true;
}

function validasiNim($nim) {
  if (empty($nim)) {
    return false;
  }
  if (!is_numeric($nim)) {
    return false;
  }
  if (strlen($nim) != 12) {
    return false;
  }
  return true;
}

function validasiJenisKelamin($jenis_kelamin) {
  if (empty($jenis_kelamin)) {
    return false;
  }
  return true;
}

function validasiAsal($asal) {
  if (empty($asal)) {
    return false;
  }
  return true;
}

function validasiJurusan($jurusan) {
  if (empty($jurusan)) {
    return false;
  }
  return true;
}

function validasiEmail($email) {
  if (empty($email)) {
    return false;
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return false;
  }
  return true;
}

?>
