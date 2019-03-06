<?php

namespace App\Http\Controllers;

use App\Submission;
use App\Tim;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function getPageSubmit(){
        // TODO : return page submit
    }

    public function submitFile(Request $request){

        $tim = Tim::where('submissionid', $request->submission_id)->get()->first();

        if($tim == null){
            // TODO : Upload error not match
            return redirect()->back();
        }

        $request->validate([
            'file' => 'required|file|max:10240'
        ]);

        $file = $request->file('file');
        $path = $file->store(public_path() . 'files/' . $request->submission_id . '/' . $tim->nama_tim . '_' . $request->judul);

        $sub = Submission::createSubmission($tim->id, $request->judul, $path);
    }
}
