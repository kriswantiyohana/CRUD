<?php
use App\Models\Mahasiswa;

class MahasiswaController extends Controller {
    public function index() {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }
}
?>