<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterdataController extends Controller
{
    public function requestperdi(){
        return view('perjalanandinas.request');
    }

    public function approvalperdi(){
        return view('perjalanandinas.approval');
    }

    public function validasiperdi(){
        return view('perjalanandinas.validasi');
    }

    public function requestreim(){
        return view('reimbursement.request');
    }

    public function approvalreim(){
        return view('reimbursement.approval');
    }

    public function validasireim(){
        return view('reimbursement.validasi');
    }
}
