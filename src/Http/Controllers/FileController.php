<?php

namespace unlobosolitario\larafile\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class FileController extends FileBaseController
{
  public function indeks()
  {
    $jalur    = '../';
    $mengajukan = scandir($jalur);
    dd($mengajukan);

  }
  public function memindai(Request $request)
  {
    $jalur = $request->input("path");
    $mengajukan = scandir($jalur);
    dd($mengajukan);
  }
  public function baca(Request $request)
  {
    $file = $request->input("file");
    $data = readfile($file);
    dd($data);

  }
  public function unduh(Request $request)
  {
    $file = $request->input("file");
    return response()->download($file);

  }
  public function mengunggah(Request $request)
  {
    $jalur = $request->input("path");
    $lampiran = $request->file('file');
    $mengajukan = $lampiran->getClientOriginalName();
    $lampiran->move($jalur, $mengajukan);
    return $jalur.$mengajukan;
  }
}

?>