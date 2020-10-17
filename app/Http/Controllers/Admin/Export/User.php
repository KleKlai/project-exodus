<?php

namespace App\Http\Controllers\Admin\Export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use App\Exports\UserExport;

class User extends Controller
{
    public function export()
    {
        return Excel::download(new UserExport, 'User.xlsx');
    }
}
