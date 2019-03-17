<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Mahasiswa;
use App\Peserta;
use App\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function getMailPage()
    {
        $kategoris = Kategori::select('id')
            ->where('id_ormawa', Auth::user()->id_ormawa)
            ->get();

        $tims = [];
        foreach ($kategoris as $kategori) {
            $tim = Tim::select('id', 'nama_tim')
                ->where('id_kategori', $kategori->id)
                ->get();
            foreach ($tim as $t) {
                array_push($tims, $t);
            }
        }

        $mahasiswas = Mahasiswa::select('nim', 'nama', 'email')->get();
        return view('admin.pages.mail', compact('tims', 'mahasiswas'));
    }

    public function sendMailMahasiswa(Request $request)
    {
        $text = $request->pesan;
        $mailer = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $emails = $request->emails;
        foreach ($emails as $email) {
            $nama = Mahasiswa::where('email', $email)->get()->first()->nama;
            $mailer->send('mails.send', compact('text', 'nama'), function ($message) use ($email) {
                $message
                    ->from(Auth::user()->name . '@idle.ilkom.unej.ac.id')
                    ->to($email)
                    ->subject('Pesan dari IDLe');
            });
        }
        return redirect()->route('admin.mail.page')->with('success', 'Pesan berhasil dikirim');
    }

    public function sendMailTim(Request $request)
    {
        $mailer = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $text = $request->pesan;
        foreach ($request->tims as $t) {
            $tim = Tim::with('pesertas.mahasiswa')
                ->findOrFail($t);
            foreach($tim->pesertas as $peserta){
                $nama = $peserta->mahasiswa->nama;
                $email = $peserta->mahasiswa->email;
                $mailer->send('mails.send', compact('text', 'nama'), function ($message) use ($email) {
                    $message
                        ->from(Auth::user()->name . '@idle.ilkom.unej.ac.id')
                        ->to($email)
                        ->subject('Pesan dari IDLe');
                });
            }
        } 
        return redirect()->route('admin.mail.page')->with('success', 'Pesan berhasil dikirim');
    }
}
