<?php

use Illuminate\Support\Facades\Auth;

$user = Auth::user();
if ($user != null) {
    if ($user->tipo == 'tutor') {
        redirect()->route('tutor.index');
    } else {
        redirect()->route('funcionario.index');
    }
} else {
    redirect()->route('logout');
}
